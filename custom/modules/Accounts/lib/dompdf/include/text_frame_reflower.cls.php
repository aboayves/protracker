<?php





class Text_Frame_Reflower extends Frame_Reflower {

  
  protected $_block_parent; 
  
  
  protected $_frame;
  
  public static $_whitespace_pattern = "/[ \t\r\n\f]+/u";

  function __construct(Text_Frame_Decorator $frame) { parent::__construct($frame); }

  

  protected function _collapse_white_space($text) {
    


    return preg_replace(self::$_whitespace_pattern, " ", $text);
  }

  

  protected function _line_break($text) {
    $style = $this->_frame->get_style();
    $size = $style->font_size;
    $font = $style->font_family;
    $current_line = $this->_block_parent->get_current_line();
    
    
    $line_width = $this->_frame->get_containing_block("w");
    $current_line_width = $current_line["left"] + $current_line["w"] + $current_line["right"];
    
    $available_width = $line_width - $current_line_width;

    
    $words = preg_split('/([\s-]+)/u', $text, -1, PREG_SPLIT_DELIM_CAPTURE);
    $wc = count($words);

    
    $word_spacing = $style->length_in_pt($style->word_spacing);
    $char_spacing = $style->length_in_pt($style->letter_spacing);

    
    $text_width = Font_Metrics::get_text_width($text, $font, $size, $word_spacing, $char_spacing);
    $mbp_width =
      $style->length_in_pt( array( $style->margin_left,
                                   $style->border_left_width,
                                   $style->padding_left,
                                   $style->padding_right,
                                   $style->border_right_width,
                                   $style->margin_right), $line_width );
                                   
    $frame_width = $text_width + $mbp_width;












    if ( $frame_width <= $available_width )
      return false;

    
    $width = 0;
    $str = "";
    reset($words);

    
    for ($i = 0; $i < $wc; $i += 2) {
      $word = $words[$i] . (isset($words[$i+1]) ? $words[$i+1] : "");
      $word_width = Font_Metrics::get_text_width($word, $font, $size, $word_spacing, $char_spacing);
      if ( $width + $word_width + $mbp_width > $available_width )
        break;

      $width += $word_width;
      $str .= $word;

    }

    
    if ( $current_line_width == 0 && $width == 0 ) {
      $width += $word_width;
      $str .= $word;
    }

    $offset = mb_strlen($str);






    return $offset;

  }

  

  protected function _newline_break($text) {

    if ( ($i = mb_strpos($text, "\n")) === false)
      return false;

    return $i+1;

  }

  

  protected function _layout_line() {
    $style = $this->_frame->get_style();
    $text = $this->_frame->get_text();
    $size = $style->font_size;
    $font = $style->font_family;
    $word_spacing = $style->length_in_pt($style->word_spacing);
    $char_spacing = $style->length_in_pt($style->letter_spacing);

    
    $style->height = Font_Metrics::get_font_height( $font, $size );

    $split = false;
    $add_line = false;

    
    
    switch (strtolower($style->text_transform)) {
      default: break;
      case "capitalize": $text = mb_convert_case($text, MB_CASE_TITLE); break;
      case "uppercase":  $text = mb_convert_case($text, MB_CASE_UPPER); break;
      case "lowercase":  $text = mb_convert_case($text, MB_CASE_LOWER); break;
    }
    
    
    
    switch ($style->white_space) {

    default:
    case "normal":
      $this->_frame->set_text( $text = $this->_collapse_white_space($text) );
      if ( $text == "" )
        break;

      $split = $this->_line_break($text);
      break;

    case "pre":
      $split = $this->_newline_break($text);
      $add_line = $split !== false;
      break;

    case "nowrap":
      $this->_frame->set_text( $text = $this->_collapse_white_space($text) );
      break;

    case "pre-wrap":
      $split = $this->_newline_break($text);

      if ( ($tmp = $this->_line_break($text)) !== false ) {
        $add_line = $split < $tmp;
        $split = min($tmp, $split);
      } else
        $add_line = true;

      break;

    case "pre-line":
      
      $this->_frame->set_text( $text = preg_replace( "/[ \t]+/u", " ", $text ) );

      if ( $text == "" )
        break;

      $split = $this->_newline_break($text);

      if ( ($tmp = $this->_line_break($text)) !== false ) {
        $add_line = $split < $tmp;
        $split = min($tmp, $split);
      } else
        $add_line = true;

      break;

    }

    
    if ( $text === "" )
      return;

    if ( $split !== false) {

      
      if ( $split == 0 && $text === " " ) {
        $this->_frame->set_text("");
        return;
      }

      if ( $split == 0 ) {

        
        

        $this->_block_parent->add_line();
        $this->_frame->position();

        
        $this->_layout_line();

      } 
      
      else if ( $split < mb_strlen($this->_frame->get_text()) ) {
        
        $this->_frame->split_text($split);

        $t = $this->_frame->get_text();
        
        
        if ( $split > 1 && $t[$split-1] === "\n" )
          $this->_frame->set_text( mb_substr($t, 0, -1) );

        
        
        
        
        
      }

      if ( $add_line ) {
        $this->_block_parent->add_line();
        $this->_frame->position();
      }

    } else {

      
      
      
      $t = $this->_frame->get_text();
      $parent = $this->_frame->get_parent();
      $is_inline_frame = get_class($parent) === 'Inline_Frame_Decorator';
      
      if ((!$is_inline_frame && !$this->_frame->get_next_sibling()) || 
          ( $is_inline_frame && !$parent->get_next_sibling())) {
        $t = rtrim($t);
      }
      
      if ((!$is_inline_frame && !$this->_frame->get_prev_sibling()) || 
          ( $is_inline_frame && !$parent->get_prev_sibling())) {
      	$t = ltrim($t);
      }
      
      $this->_frame->set_text( $t );
      
    }

    
    $width = $this->_frame->recalculate_width();
  }

  

  function reflow(Frame_Decorator $block = null) {

    $page = $this->_frame->get_root();
    $page->check_forced_page_break($this->_frame);
    
    if ( $page->is_full() )
      return;

    $this->_block_parent = $this->_frame->find_block_parent();

    
    





    
    $this->_frame->position();

    $this->_layout_line();
    
    if ( $block ) {
      $block->add_frame_to_line($this->_frame);
    }
  }

  

  
  
  function get_min_max_width() {

    $style = $this->_frame->get_style();
    $this->_block_parent = $this->_frame->find_block_parent();
    $line_width = $this->_frame->get_containing_block("w");

    $str = $text = $this->_frame->get_text();
    $size = $style->font_size;
    $font = $style->font_family;

    $word_spacing = $style->length_in_pt($style->word_spacing);
    $char_spacing = $style->length_in_pt($style->letter_spacing);

    switch($style->white_space) {

    default:
    case "normal":
      $str = preg_replace(self::$_whitespace_pattern," ", $str);
    case "pre-wrap":
    case "pre-line":

      

      
      
      
      $words = array_flip(preg_split("/[\s-]+/u",$str, -1, PREG_SPLIT_DELIM_CAPTURE));
      array_walk($words, create_function('&$val,$str',
                                         '$val = Font_Metrics::get_text_width($str, "'.addslashes($font).'", '.$size.', '.$word_spacing.', '.$char_spacing.');'));
      arsort($words);
      $min = reset($words);
      break;

    case "pre":
      $lines = array_flip(preg_split("/\n/u", $str));
      array_walk($lines, create_function('&$val,$str',
                                         '$val = Font_Metrics::get_text_width($str, "'.addslashes($font).'", '.$size.', '.$word_spacing.', '.$char_spacing.');'));

      arsort($lines);
      $min = reset($lines);
      break;

    case "nowrap":
      $min = Font_Metrics::get_text_width($this->_collapse_white_space($str), $font, $size, $word_spacing, $char_spacing);
      break;

    }

    switch ($style->white_space) {

    default:
    case "normal":
    case "nowrap":
      $str = preg_replace(self::$_whitespace_pattern," ", $text);
      break;

    case "pre-line":
      
      $str = preg_replace( "/[ \t]+/u", " ", $text);

    case "pre-wrap":
      
      $lines = array_flip(preg_split("/\n/", $text));
      array_walk($lines, create_function('&$val,$str',
                                         '$val = Font_Metrics::get_text_width($str, "'.$font.'", '.$size.', '.$word_spacing.', '.$char_spacing.');'));
      arsort($lines);
      reset($lines);
      $str = key($lines);
      break;

    }

    $max = Font_Metrics::get_text_width($str, $font, $size, $word_spacing, $char_spacing);
    
    $delta = $style->length_in_pt(array($style->margin_left,
                                        $style->border_left_width,
                                        $style->padding_left,
                                        $style->padding_right,
                                        $style->border_right_width,
                                        $style->margin_right), $line_width);
    $min += $delta;
    $max += $delta;

    return array($min, $max, "min" => $min, "max" => $max);

  }

}
