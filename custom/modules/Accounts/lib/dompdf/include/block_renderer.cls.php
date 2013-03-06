<?php





class Block_Renderer extends Abstract_Renderer {

  

  function render(Frame $frame) {
    $style = $frame->get_style(); 
    list($x, $y, $w, $h) = $frame->get_padding_box();
    
    $this->_set_opacity( $frame->get_opacity( $style->opacity ) );

    
    if ( ($bg = $style->background_color) !== "transparent" ) {
      $this->_canvas->filled_rectangle( $x, $y, $w, $h, $bg );
    }

    if ( ($url = $style->background_image) && $url !== "none" )
      $this->_background_image($url, $x, $y, $w, $h, $style);

    $this->_render_border($frame);
    $this->_render_outline($frame);
    
    if (DEBUG_LAYOUT && DEBUG_LAYOUT_BLOCKS) {
      $this->_debug_layout($frame->get_border_box(), "red");
      if (DEBUG_LAYOUT_PADDINGBOX) {
        $this->_debug_layout($frame->get_padding_box(), "red", array(0.5, 0.5));
      }
    }
    
    if (DEBUG_LAYOUT && DEBUG_LAYOUT_LINES && $frame->get_decorator()) {
      foreach ($frame->get_decorator()->get_lines() as $line) {
        $frame->_debug_layout(array($line["x"], $line["y"], $line["w"], $line["h"]), "orange");
      }
    }
  }

  protected function _render_border(Frame_Decorator $frame, $corner_style = "bevel") {
    $style = $frame->get_style();
    $bbox = $frame->get_border_box();
    $bp = $style->get_border_properties();

    
    if (
      in_array($bp["top"]["style"], array("solid", "dashed", "dotted")) && 
      $bp["top"]    == $bp["right"] &&
      $bp["right"]  == $bp["bottom"] &&
      $bp["bottom"] == $bp["left"]
    ) {
      $props = $bp["top"];
      if ( $props["color"] === "transparent" || $props["width"] <= 0 ) return;
      
      list($x, $y, $w, $h) = $bbox;
      $width = $style->length_in_pt($props["width"]);
      $pattern = $this->_get_dash_pattern($props["style"], $width);
      $this->_canvas->rectangle($x + $width / 2, $y + $width / 2, $w - $width, $h - $width, $props["color"], $width, $pattern);
      return;
    }

    $widths = array($style->length_in_pt($bp["top"]["width"]),
                    $style->length_in_pt($bp["right"]["width"]),
                    $style->length_in_pt($bp["bottom"]["width"]),
                    $style->length_in_pt($bp["left"]["width"]));
    
    foreach ($bp as $side => $props) {
      list($x, $y, $w, $h) = $bbox;

      if ( !$props["style"] || 
            $props["style"] === "none" || 
            $props["width"] <= 0 || 
            $props["color"] == "transparent" )
        continue;

      switch($side) {
      case "top":
        $length = $w;
        break;

      case "bottom":
        $length = $w;
        $y += $h;
        break;

      case "left":
        $length = $h;
        break;

      case "right":
        $length = $h;
        $x += $w;
        break;
      default:
        break;
      }
      $method = "_border_" . $props["style"];

      $this->$method($x, $y, $length, $props["color"], $widths, $side, $corner_style);
    }
  }

  protected function _render_outline(Frame_Decorator $frame, $corner_style = "bevel") {
    $style = $frame->get_style();
    
    $props = array(
      "width" => $style->outline_width,
      "style" => $style->outline_style,
      "color" => $style->outline_color,
    );
    
    if ( !$props["style"] || $props["style"] === "none" || $props["width"] <= 0 )
      return;
      
    $bbox = $frame->get_border_box();
    $offset = $style->length_in_pt($props["width"]);
    $pattern = $this->_get_dash_pattern($props["style"], $offset);

    
    if ( in_array($props["style"], array("solid", "dashed", "dotted")) ) {
      $bbox[0] -= $offset / 2;
      $bbox[1] -= $offset / 2;
      $bbox[2] += $offset;
      $bbox[3] += $offset;
    
      list($x, $y, $w, $h) = $bbox;
      $this->_canvas->rectangle($x, $y, $w, $h, $props["color"], $offset, $pattern);
      return;
    }

    $bbox[0] -= $offset;
    $bbox[1] -= $offset;
    $bbox[2] += $offset * 2;
    $bbox[3] += $offset * 2;
    
    $method = "_border_" . $props["style"];
    $widths = array_fill(0, 4, $props["width"]);
    $sides = array("top", "right", "left", "bottom");
    
    foreach ($sides as $side) {
      list($x, $y, $w, $h) = $bbox;

      switch($side) {
      case "top":
        $length = $w;
        break;

      case "bottom":
        $length = $w;
        $y += $h;
        break;

      case "left":
        $length = $h;
        break;

      case "right":
        $length = $h;
        $x += $w;
        break;
      default:
        break;
      }

      $this->$method($x, $y, $length, $props["color"], $widths, $side, $corner_style);
    }
  }
}
