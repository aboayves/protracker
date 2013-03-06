<?php





class List_Bullet_Positioner extends Positioner {

  function __construct(Frame_Decorator $frame) { parent::__construct($frame); }
  
  

  function position() {
    
    
    
    $cb = $this->_frame->get_containing_block();
    $style = $this->_frame->get_style();
    
    
    
    $x = $cb["x"] - $this->_frame->get_width();

    $p = $this->_frame->find_block_parent();

    $y = $p->get_current_line("y");

    
    $n = $this->_frame->get_next_sibling();
    if ( $n ) {
      $style = $n->get_style();
      $y += $style->length_in_pt( array($style->margin_top, $style->padding_top),
                                  $n->get_containing_block("w") );
    }

	
	
	
	
	
	
	
	
	
    
    
    
    
    
    

	
	

    $style = $p->get_style();
    $font_size = $style->get_font_size();
    $line_height = $style->length_in_pt($style->line_height, $font_size);
    $y += ($line_height - $font_size) / 2;  	
	 
    
    $this->_frame->set_position($x, $y);
    
  }
}
