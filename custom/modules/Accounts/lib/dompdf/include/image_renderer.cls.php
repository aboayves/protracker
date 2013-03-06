<?php





class Image_Renderer extends Block_Renderer {

  function render(Frame $frame) {
    
    $style = $frame->get_style();
    $cb = $frame->get_containing_block();
    list($x, $y, $w, $h) = $frame->get_border_box();
  
    $this->_set_opacity( $frame->get_opacity( $style->opacity ) );  

    
    if ( ($bg = $style->background_color) !== "transparent" ) 
      $this->_canvas->filled_rectangle( $x + $widths[3], $y + $widths[0], $w, $h, $bg);

    if ( ($url = $style->background_image) && $url !== "none" )           
      $this->_background_image($url, $x + $widths[3], $y + $widths[0], $w, $h, $style);
    
    $this->_render_border($frame);
    $this->_render_outline($frame);
    
    list($x, $y) = $frame->get_padding_box();
    $x += $style->length_in_pt($style->padding_left, $cb["w"]);
    $y += $style->length_in_pt($style->padding_top, $cb["h"]);
    
    $w = $style->length_in_pt($style->width, $cb["w"]);
    $h = $style->length_in_pt($style->height, $cb["h"]);

    if ( strrpos( $frame->get_image_url(), DOMPDF_LIB_DIR . "/res/broken_image.png", 0) !== false &&
      $alt = $frame->get_node()->getAttribute("alt") ) {
      $font = $style->font_family;
      $size = $style->font_size;
      $spacing = $style->word_spacing;
      $this->_canvas->text($x, $y, $alt,
                           $font, $size,
                           $style->color, $spacing);
    }
    else {
      $this->_canvas->image( $frame->get_image_url(), $frame->get_image_ext(), $x, $y, $w, $h);
    }
    
    if (DEBUG_LAYOUT && DEBUG_LAYOUT_BLOCKS) {
      $this->_debug_layout($frame->get_border_box(), "blue");
      if (DEBUG_LAYOUT_PADDINGBOX) {
        $this->_debug_layout($frame->get_padding_box(), "blue", array(0.5, 0.5));
      }
    }
  }
}
