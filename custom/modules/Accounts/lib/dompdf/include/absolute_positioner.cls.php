<?php





class Absolute_Positioner extends Positioner {

  function __construct(Frame_Decorator $frame) { parent::__construct($frame); }

  function position() {

    $frame = $this->_frame;
    $style = $frame->get_style();
    $cb = $frame->get_containing_block();

    $top =    $style->length_in_pt($style->top,    $cb["h"]);
    $right =  $style->length_in_pt($style->right,  $cb["w"]);
    $bottom = $style->length_in_pt($style->bottom, $cb["h"]);
    $left =   $style->length_in_pt($style->left,   $cb["w"]);
    
    $p = $frame->find_positionned_parent();

    if ( $p ) {
      
      list($x, $y, $w, $h) = $p->get_padding_box();
    } else {
      $x = $cb["x"];
      $y = $cb["y"];
    }

    if ( $top !== "auto" ) {
      $y += $top;
    } else if ( $bottom !== "auto" ) {
      
    }

    if ( $left !== "auto" ) {
      $x += $left;
    } else if ( $right !== "auto" ) {
      
    }

    $frame->set_position($x, $y);

  }
}