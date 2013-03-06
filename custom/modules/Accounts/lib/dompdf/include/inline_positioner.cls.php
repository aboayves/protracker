<?php




class Inline_Positioner extends Positioner {

  function __construct(Frame_Decorator $frame) { parent::__construct($frame); }

  

  function position() {
    
    $p = $this->_frame->find_block_parent();

    





    

    if ( !$p )
      throw new DOMPDF_Exception("No block-level parent found.  Not good.");

    $f = $this->_frame;
    
    $cb = $f->get_containing_block();
    $style = $f->get_style();
    $line = $p->get_current_line();

    
    $is_fixed = false;
    while($f = $f->get_parent()) {
      if($f->get_style()->position === "fixed") {
        $is_fixed = true;
        break;
      }
    }

    $f = $this->_frame;

    if ( !$is_fixed && $f->get_parent() &&
         $f->get_parent() instanceof Inline_Frame_Decorator &&
         $f->get_node()->nodeName === "#text" ) {
      
      $min_max = $f->get_reflower()->get_min_max_width();
      $initialcb = $f->get_root()->get_containing_block();
      $height = $style->length_in_pt($style->height, $initialcb["h"]);
      
      
      if ( $min_max["min"] > ($cb["w"]-$line["left"]-$line["w"]-$line["right"]) ) {
        $p->add_line();
      }
    }

    $this->_frame->set_position($cb["x"] + $line["w"], $line["y"]);

  }
}
