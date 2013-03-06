<?php





abstract class Positioner {
  
  
  protected $_frame;
  
  

  function __construct(Frame_Decorator $frame) {
    $this->_frame = $frame;
  }
  
  
  function __destruct() {
  	clear_object($this);
  }
  

  abstract function position();
  
}
