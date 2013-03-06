<?php





class Block_Frame_Reflower extends Frame_Reflower {
  
  const MIN_JUSTIFY_WIDTH = 0.80;

  
  protected $_frame;
  
  function __construct(Block_Frame_Decorator $frame) { parent::__construct($frame); }

  
  protected function _calculate_width($width) {
    $style = $this->_frame->get_style();
    $w = $this->_frame->get_containing_block("w");

    if( $style->position === "fixed" )
      $w = $this->_frame->get_parent()->get_containing_block("w");

    $rm = $style->length_in_pt($style->margin_right, $w);
    $lm = $style->length_in_pt($style->margin_left, $w);

    $left = $style->length_in_pt($style->left, $w);
    $right = $style->length_in_pt($style->right, $w);
    
    
    $dims = array($style->border_left_width,
                  $style->border_right_width,
                  $style->padding_left,
                  $style->padding_right,
                  $width !== "auto" ? $width : 0,
                  $rm !== "auto" ? $rm : 0,
                  $lm !== "auto" ? $lm : 0);

    
    if ( $style->position === "absolute" || $style->position === "fixed" ) {
      $absolute = true;
      $dims[] = $left !== "auto" ? $left : 0;
      $dims[] = $right !== "auto" ? $right : 0;
    } else {
      $absolute = false;
    }

    $sum = $style->length_in_pt($dims, $w);

    
    $diff = $w - $sum;

    if ( $diff > 0 ) {

      if ( $absolute ) {

        
        

        if ( $width === "auto" && $left === "auto" && $right === "auto" ) {

          if ( $lm === "auto" )
            $lm = 0;
          if ( $rm === "auto" )
            $rm = 0;

          
          
          
          $left = 0;
          $right = 0;
          $width = $diff;

        } else if ( $width === "auto" ) {

          if ( $lm === "auto" )
            $lm = 0;
          if ( $rm === "auto" )
            $rm = 0;
          if ( $left === "auto" )
            $left = 0;
          if ( $right === "auto" )
            $right = 0;

          $width = $diff;

        } else if ( $left === "auto" ) {
          
          if ( $lm === "auto" )
            $lm = 0;
          if ( $rm === "auto" )
            $rm = 0;
          if ( $right === "auto" )
            $right = 0;

          $left = $diff;

        } else if ( $right === "auto" ) {

          if ( $lm === "auto" )
            $lm = 0;
          if ( $rm === "auto" )
            $rm = 0;

          $right = $diff;
        }

      } else {

        
        if ( $width === "auto" )
          $width = $diff;

        else if ( $lm === "auto" && $rm === "auto" )
          $lm = $rm = round($diff / 2);

        else if ( $lm === "auto" )
          $lm = $diff;

        else if ( $rm === "auto" )
          $rm = $diff;
      }

    } else if ($diff < 0) {

      
      $rm = $diff;

    }

    return array("width"=> $width, "margin_left" => $lm, "margin_right" => $rm, "left" => $left, "right" => $right);
  }

  
  protected function _calculate_restricted_width() {
    $frame = $this->_frame;
    $style = $frame->get_style();
    $cb = $frame->get_containing_block();
    
    if ( $style->position === "fixed" )
      $cb = $frame->get_root()->get_containing_block();
    
    
    

    if ( !isset($cb["w"]) )
      throw new DOMPDF_Exception("Box property calculation requires containing block width");

    
    if ( $style->width === "100%" ) {
      $width = "auto";
    }
    else {
      $width = $style->length_in_pt($style->width, $cb["w"]);
    }
    extract($this->_calculate_width($width));

    
    $min_width = $style->length_in_pt($style->min_width, $cb["w"]);
    $max_width = $style->length_in_pt($style->max_width, $cb["w"]);

    if ( $max_width !== "none" && $min_width > $max_width)
      
      list($max_width, $min_width) = array($min_width, $max_width);

    if ( $max_width !== "none" && $width > $max_width )
      extract($this->_calculate_width($max_width));

    if ( $width < $min_width )
      extract($this->_calculate_width($min_width));

    return array($width, $margin_left, $margin_right, $left, $right);

  }
  
  
  protected function _calculate_content_height() {
    $height = 0;
    
    foreach ($this->_frame->get_lines() as $line) {
      $height += $line["h"];
    }

    return $height;
  }

  
  protected function _calculate_restricted_height() {
    $style = $this->_frame->get_style();
    $content_height = $this->_calculate_content_height();
    $cb = $this->_frame->get_containing_block();
    
    $height = $style->length_in_pt($style->height, $cb["h"]);

    $top    = $style->length_in_pt($style->top, $cb["h"]);
    $bottom = $style->length_in_pt($style->bottom, $cb["h"]);

    $margin_top    = $style->length_in_pt($style->margin_top, $cb["h"]);
    $margin_bottom = $style->length_in_pt($style->margin_bottom, $cb["h"]);

    if ( $style->position === "absolute" || $style->position === "fixed" ) {

      

      $dims = array($top !== "auto" ? $top : 0,
                    $style->margin_top !== "auto" ? $style->margin_top : 0,
                    $style->padding_top,
                    $style->border_top_width,
                    $height !== "auto" ? $height : 0,
                    $style->border_bottom_width,
                    $style->padding_bottom,
                    $style->margin_bottom !== "auto" ? $style->margin_bottom : 0,
                    $bottom !== "auto" ? $bottom : 0);

      $sum = $style->length_in_pt($dims, $cb["h"]);

      $diff = $cb["h"] - $sum; 

      if ( $diff > 0 ) {

        if ( $height === "auto" && $top === "auto" && $bottom === "auto" ) {

          if ( $margin_top === "auto" ) 
            $margin_top = 0;
          if ( $margin_bottom === "auto" )
            $margin_bottom = 0;

          $height = $diff;

        } else if ( $height === "auto" && $top === "auto" ) {

          if ( $margin_top === "auto" ) 
            $margin_top = 0;
          if ( $margin_bottom === "auto" )
            $margin_bottom = 0;

          $height = $content_height;
          $top = $diff - $content_height;

        } else if ( $height === "auto" && $bottom === "auto" ) {

          if ( $margin_top === "auto" ) 
            $margin_top = 0;
          if ( $margin_bottom === "auto" )
            $margin_bottom = 0;

          $height = $content_height;
          $bottom = $diff - $content_height;

        } else if ( $top === "auto" && $bottom === "auto" ) {

          if ( $margin_top === "auto" ) 
            $margin_top = 0;
          if ( $margin_bottom === "auto" )
            $margin_bottom = 0;

          $bottom = $diff;

        } else if ( $top === "auto" ) {

          if ( $margin_top === "auto" ) 
            $margin_top = 0;
          if ( $margin_bottom === "auto" )
            $margin_bottom = 0;

          $top = $diff;

        } else if ( $height === "auto" ) {

          if ( $margin_top === "auto" ) 
            $margin_top = 0;
          if ( $margin_bottom === "auto" )
            $margin_bottom = 0;

          $height = $diff;

        } else if ( $bottom === "auto" ) {

          if ( $margin_top === "auto" ) 
            $margin_top = 0;
          if ( $margin_bottom === "auto" )
            $margin_bottom = 0;

          $bottom = $diff;

        } else {

          if ( $style->overflow === "visible" ) {

            
            if ( $margin_top === "auto" ) 
              $margin_top = 0;
            if ( $margin_bottom === "auto" )
              $margin_bottom = 0;
            if ( $top === "auto" )
              $top = 0;
            if ( $bottom === "auto" )
              $bottom = 0;
            if ( $height === "auto" )
              $height = $content_height;

          }

          
        }

      }

    } else {

      
      if ( $height === "auto" && $content_height > $height ) 
        $height = $content_height;

      
      
      
      
      if ( !($style->overflow === "visible" ||
             ($style->overflow === "hidden" && $height === "auto")) ) {

        $min_height = $style->min_height;
        $max_height = $style->max_height;

        if ( isset($cb["h"]) ) {
          $min_height = $style->length_in_pt($min_height, $cb["h"]);
          $max_height = $style->length_in_pt($max_height, $cb["h"]);

        } else if ( isset($cb["w"]) ) {

          if ( mb_strpos($min_height, "%") !== false )
            $min_height = 0;
          else
            $min_height = $style->length_in_pt($min_height, $cb["w"]);

          if ( mb_strpos($max_height, "%") !== false )
            $max_height = "none";
          else
            $max_height = $style->length_in_pt($max_height, $cb["w"]);
        }

        if ( $max_height !== "none" && $min_height > $max_height )
          
          list($max_height, $min_height) = array($min_height, $max_height);

        if ( $max_height !== "none" && $height > $max_height )
          $height = $max_height;

        if ( $height < $min_height )
          $height = $min_height;
      }

    }

    return array($height, $margin_top, $margin_bottom, $top, $bottom);

  }

  
  protected function _text_align() {
    $style = $this->_frame->get_style();
    $w = $this->_frame->get_containing_block("w");
    $width = $style->length_in_pt($style->width, $w);
    switch ($style->text_align) {

    default:
    case "left":
      foreach ($this->_frame->get_lines() as $line) {
        if ( !$line["left"] ) continue;
        foreach($line["frames"] as $frame) {
          if ( $frame instanceof Block_Frame_Decorator) continue;
          $frame->set_position( $frame->get_position("x") + $line["left"] );
        }
      }
      return;

    case "right":
      foreach ($this->_frame->get_lines() as $line) {
        
        $dx = $width - $line["w"] - $line["right"];
        
        foreach($line["frames"] as $frame) {
          
          if ($frame instanceof Block_Frame_Decorator) continue;
          
          $frame->set_position( $frame->get_position("x") + $dx );
        }
      }
      break;


    case "justify":
      
      $lines = $this->_frame->get_lines(); 
      $lines = array_splice($lines, 0, -1);
      
      foreach($lines as $i => $line) {
        if ( $line["br"] ) {
          unset($lines[$i]);
        }
      }
      
      
      $space_width = Font_Metrics::get_text_width(" ", $style->font_family, $style->font_size);
      
      foreach ($lines as $i => $line) {
        if ( $line["left"] ) {
          foreach($line["frames"] as $frame) {
            if ( !$frame instanceof Text_Frame_Decorator )
              continue;
  
            $frame->set_position( $frame->get_position("x") + $line["left"] );
          }
        }
          
        
        
        
          
          
          if ( $line["wc"] > 1 )
            $spacing = ($width - ($line["left"] + $line["w"] + $line["right"]) + $space_width) / ($line["wc"] - 1);
          else
            $spacing = 0;

          $dx = 0;
          foreach($line["frames"] as $frame) {
            if ( !$frame instanceof Text_Frame_Decorator )
              continue;
              
            $text = $frame->get_text();
            $spaces = mb_substr_count($text, " ");
            
            $char_spacing = $style->length_in_pt($style->letter_spacing);
            $_spacing = $spacing + $char_spacing;
            
            $frame->set_position( $frame->get_position("x") + $dx );
            $frame->set_text_spacing($_spacing);
            
            $dx += $spaces * $_spacing;
          }

          
          $this->_frame->set_line($i, null, $width);

        
      }
      break;

    case "center":
    case "centre":
      foreach ($this->_frame->get_lines() as $line) {
        
        $dx = ($width + $line["left"] - $line["w"] - $line["right"] ) / 2;
        
        foreach ($line["frames"] as $frame) {
          
          if ($frame instanceof Block_Frame_Decorator) continue;
          
          $frame->set_position( $frame->get_position("x") + $dx );
        }
      }
      break;
    }
  }
  
  
  function vertical_align() {
    
    foreach ( $this->_frame->get_lines() as $i => $line ) {

      $height = $line["h"];
    
      foreach ( $line["frames"] as $frame ) {
        $style = $frame->get_style();

        if ( $style->display !== "inline" && $style->display !== "text" )
          continue;

        
        if ( $this instanceof Table_Cell_Frame_Reflower )
          $align = $frame->get_frame()->get_style()->vertical_align;
        else 
          $align = $frame->get_frame()->get_parent()->get_style()->vertical_align;
          
        $frame_h = $frame->get_margin_height();
        $y = $line["y"];
        
        switch ($align) {

        case "baseline":
          $y += $height - $frame_h;
          break;

        case "middle":
          $y += ($height + $frame_h) / 2;
          break;

        case "sub":
          $y += 0.2 * $height;
          break;

        case "super":
          $y += -0.3 * $height;
          break;

        case "text-top":
        case "top": 
          break;

        case "text-bottom":
        case "bottom":
          $y += $height - $frame_h;
          break;
        }

        $x = $frame->get_position("x");
        $frame->set_position($x, $y);

      }
    }
  }

  function reflow(Frame_Decorator $block = null) {

    
    $page = $this->_frame->get_root();
    $page->check_forced_page_break($this->_frame);

    
    if ( $page->is_full() )
      return;
      
    
    $this->_set_content();

    
    $this->_collapse_margins();

    $style = $this->_frame->get_style();
    $cb = $this->_frame->get_containing_block();
    
    if ( $style->counter_increment && ($increment = $style->counter_increment) !== "none" )
      $this->_frame->increment_counter($increment);
    
    if ( $style->position === "fixed" )
      $cb = $this->_frame->get_root()->get_containing_block();
    
    
    
    list($w, $left_margin, $right_margin, $left, $right) = $this->_calculate_restricted_width();

    
    $style->width = $w . "pt";
    $style->margin_left = $left_margin."pt";
    $style->margin_right = $right_margin."pt";
    $style->left = $left ."pt";
    $style->right = $right . "pt";
    
    
    $this->_frame->position();
    list($x, $y) = $this->_frame->get_position();

    
    $indent = $style->length_in_pt($style->text_indent, $cb["w"]);
    $this->_frame->increase_line_width($indent);

    
    $top = $style->length_in_pt(array($style->margin_top,
                                      $style->padding_top,
                                      $style->border_top_width), $cb["h"]);

    $bottom = $style->length_in_pt(array($style->border_bottom_width,
                                         $style->margin_bottom,
                                         $style->padding_bottom), $cb["h"]);

    $cb_x = $x + $left_margin + $style->length_in_pt(array($style->border_left_width, 
                                                           $style->padding_left), $cb["w"]);

    $cb_y = $y + $top;

    $cb_h = ($cb["h"] + $cb["y"]) - $bottom - $cb_y;

    
    $this->_frame->set_current_line($cb_y);
    
    $floating_children = array();
    
    
    foreach ( $this->_frame->get_children() as $child ) {
      
      
      if ( $page->is_full() )
        break;

      
      if ( DOMPDF_ENABLE_CSS_FLOAT && count($floating_children) ) {
        $offset_left = 0;
        $offset_right = 0;
        
        
        $child->set_containing_block($cb_x, $cb_y, $w, $cb_h);
        $child->reflow($this->_frame);
          
        $current_line = $this->_frame->get_current_line();
        
        foreach ( $floating_children as $child_key => $floating_child ) {
          $float = $floating_child->get_style()->float;
          $floating_width = $floating_child->get_margin_width();
          $floating_x = $floating_child->get_position("x");
          
          if ( $float === "left" ) {
            if ($current_line["left"] + $child->get_position("x") > $floating_x + $floating_width) continue;
          }
          else {
            if ($current_line["left"] + $child->get_position("x") + $child->get_margin_width() < $w - $floating_width - $current_line["right"]) continue;
          }
          
          
          if ( $floating_child->get_position("y") + $floating_child->get_margin_height() > $current_line["y"] ) {
            if ( $float === "left" )
              $offset_left += $floating_width;
            else
              $offset_right += $floating_width;
          }
          
          
          else {
            unset($floating_children[$child_key]);
          }
        }
        
        if ( $offset_left ) 
          $this->_frame->set_current_line(array("left" => $offset_left));
          
        if ( $offset_right )
          $this->_frame->set_current_line(array("right" => $offset_right));
      }
      
      $child->set_containing_block($cb_x, $cb_y, $w, $cb_h);
      $child->reflow($this->_frame);
      
      
      if ( $page->check_page_break($child) )
        break;
        
      $child_style = $child->get_style();
      
      if ( DOMPDF_ENABLE_CSS_FLOAT && $child_style->float !== "none") {
        $floating_children[] = $child;
        
        
        $next = $child->get_next_sibling();
        if ( $next && $next instanceof Text_Frame_Decorator) {
          $next->set_text(ltrim($next->get_text()));
        }
        
        $float_x = $cb_x;
        $float_y = $this->_frame->get_current_line("y");
        
        $child_style = $child->get_style();
        
        switch( $child_style->float ) {
          case "left": break;
          case "right": 
            $width = $w;
            $float_x += ($width - $child->get_margin_width());
            break;
        }
        
        $child->set_position($float_x, $float_y);
      }
      
    }

    
    list($height, $margin_top, $margin_bottom, $top, $bottom) = $this->_calculate_restricted_height();
    $style->height = $height;
    $style->margin_top = $margin_top;
    $style->margin_bottom = $margin_bottom;
    $style->top = $top;
    $style->bottom = $bottom;

    $this->_text_align();
    $this->vertical_align();
    
    if ( $block ) {
      $block->add_frame_to_line($this->_frame);
    }
  }
}
