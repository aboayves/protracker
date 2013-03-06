<?php





class Table_Cell_Positioner extends Positioner {

  function __construct(Frame_Decorator $frame) { parent::__construct($frame); }
  
  

  function position() {

    $table = Table_Frame_Decorator::find_parent_table($this->_frame);
    $cellmap = $table->get_cellmap();
    $this->_frame->set_position($cellmap->get_frame_position($this->_frame));

  }
}
