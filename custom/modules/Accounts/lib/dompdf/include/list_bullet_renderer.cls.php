<?php





class List_Bullet_Renderer extends Abstract_Renderer {

  
  private function make_counter($n, $type, $pad = null){
    $n = intval($n);
    $text = "";
    $uppercase = false;
    
    switch ($type) {
      case "decimal-leading-zero":
      case "decimal":
      case "1":
        if ($pad) 
          $text = str_pad($n, $pad, "0", STR_PAD_LEFT);
        else 
          $text = $n;
        break;
      
      case "upper-alpha":
      case "upper-latin":
      case "A":
        $uppercase = true;
      case "lower-alpha":
      case "lower-latin":
      case "a":
        $text = chr( ($n % 26) + ord('a') - 1);
        break;
        
      case "upper-roman":
      case "I":
        $uppercase = true;
      case "lower-roman":
      case "i":
        $text = dec2roman($n);
        break;
      
      case "lower-greek":
        $text = unichr($n + 944);
        break;
    }
    
    if ($uppercase) 
      $text = strtoupper($text);
      
    return $text.".";
  }
  
  function render(Frame $frame) {

    $style = $frame->get_style();
    $font_size = $style->get_font_size();
    $line_height = $style->length_in_pt($style->line_height, $frame->get_containing_block("w"));

    $this->_set_opacity( $frame->get_opacity( $style->opacity ) );
    
    
    
    if ( $style->list_style_image !== "none" &&
         strcmp($img = $frame->get_image_url(), DOMPDF_LIB_DIR . "/res/broken_image.png") != 0) {

      list($x,$y) = $frame->get_position();
      
      
      
      
      
      
      
      list($width, $height) = dompdf_getimagesize($img);
      $w = (((float)rtrim($width, "px")) * 72) / DOMPDF_DPI;
      $h = (((float)rtrim($height, "px")) * 72) / DOMPDF_DPI;
      
      $x -= $w;
      $y -= ($line_height - $font_size)/2; 

      $this->_canvas->image( $img, $frame->get_image_ext(), $x, $y, $w, $h);

    } else {

      $bullet_style = $style->list_style_type;

      $fill = false;

      switch ($bullet_style) {

      default:
      case "disc":
        $fill = true;

      case "circle":
        list($x,$y) = $frame->get_position();
        $r = ($font_size*(List_Bullet_Frame_Decorator::BULLET_SIZE  ))/2;
        $x -= $font_size*(List_Bullet_Frame_Decorator::BULLET_SIZE/2);
        $y += ($font_size*(1-List_Bullet_Frame_Decorator::BULLET_DESCENT))/2;
        $o = $font_size*List_Bullet_Frame_Decorator::BULLET_THICKNESS;
        $this->_canvas->circle($x, $y, $r, $style->color, $o, null, $fill);
        break;

      case "square":
        list($x, $y) = $frame->get_position();
        $w = $font_size*List_Bullet_Frame_Decorator::BULLET_SIZE;
        $x -= $w;
        $y += ($font_size*(1-List_Bullet_Frame_Decorator::BULLET_DESCENT-List_Bullet_Frame_Decorator::BULLET_SIZE))/2;
        $this->_canvas->filled_rectangle($x, $y, $w, $w, $style->color);
        break;
		
      case "decimal-leading-zero":
      case "decimal":
      case "lower-alpha":
      case "lower-latin":
      case "lower-roman":
      case "lower-greek":
      case "upper-alpha":
      case "upper-latin":
      case "upper-roman":
      case "1": 
      case "a":
      case "i":
      case "A":
      case "I":
        list($x,$y) = $frame->get_position();
        
        $pad = null;
        if ( $bullet_style === "decimal-leading-zero" ) {
          $pad = strlen($frame->get_parent()->get_parent()->get_node()->getAttribute("dompdf-children-count"));
        }
        
        $index = $frame->get_node()->getAttribute("dompdf-counter");
        $text = $this->make_counter($index, $bullet_style, $pad);
        $font_family = $style->font_family;
        $spacing = 0; 
        
        if ( trim($text) == "" )
          return;

        $x -= Font_Metrics::get_text_width($text, $font_family, $font_size, $spacing);
        
        $this->_canvas->text($x, $y, $text,
                             $font_family, $font_size,
                             $style->color, $spacing);
      
      case "none":
        break;
      }
    }
  }
}
