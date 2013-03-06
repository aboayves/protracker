<?php





class Block_Positioner extends Positioner {


  function __construct(Frame_Decorator $frame) { parent::__construct($frame); }
  
  

  function position() {
    $frame = $this->_frame;
    $style = $frame->get_style();
    $cb = $frame->get_containing_block();
    $p = $frame->find_block_parent();
    
    if ( $p ) {
      $float = $style->float;
      if ( !DOMPDF_ENABLE_CSS_FLOAT || !$float || $float === "none" ) {
        $p->add_line();
      }
      $y = $p->get_current_line("y");
      
    } else
      $y = $cb["y"];

    $x = $cb["x"];

    
    if ( $style->position === "relative" ) {
      $top =    $style->length_in_pt($style->top,    $cb["h"]);
      
      
      $left =   $style->length_in_pt($style->left,   $cb["w"]);
      
      $x += $left;
      $y += $top;
    }
    
    $frame->set_position($x, $y);
  }
}
