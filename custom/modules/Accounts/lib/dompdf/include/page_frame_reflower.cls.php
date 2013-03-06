<?php





class Page_Frame_Reflower extends Frame_Reflower {

  
  private $_callbacks;
  
  
  private $_canvas;
  
  
  private $_floating_frames;
  
  
  private $_has_floating_frames;
  
  
  private $_stacking_context = array();

  function __construct(Page_Frame_Decorator $frame) { parent::__construct($frame); }
  
  
  function get_floating_frames() { return $this->_floating_frames; }

  
  function add_frame_to_stacking_context(Frame $frame, $z_index) {
    $this->_stacking_context[$z_index][] = $frame;
  }
  
  
  function add_floating_frame(Frame $frame) {
    $this->_floating_frames[] = $frame;
    $this->_has_floating_frames = true;
  }
  
  
  function has_floating_frames() {
    return $this->_has_floating_frames;
  }
  
  

  function reflow(Frame_Decorator $block = null) {
    $style = $this->_frame->get_style();
    
    
    

    
    $cb = $this->_frame->get_containing_block();
    $left   = $style->length_in_pt($style->margin_left,   $cb["w"]);
    $right  = $style->length_in_pt($style->margin_right,  $cb["w"]);
    $top    = $style->length_in_pt($style->margin_top,    $cb["h"]);
    $bottom = $style->length_in_pt($style->margin_bottom, $cb["h"]);
    
    $content_x = $cb["x"] + $left;
    $content_y = $cb["y"] + $top;
    $content_width = $cb["w"] - $left - $right;
    $content_height = $cb["h"] - $top - $bottom;
    
    $fixed_children = array();
    
    $prev_child = null;
    $child = $this->_frame->get_first_child();
    $current_page = 0;
		
    while ($child) {
      
      if ($current_page == 0) {
        $children = $child->get_children();
        foreach ($children as $onechild) {
          if ($onechild->get_style()->position === "fixed") {
            $fixed_children[] = $onechild->deep_copy();
          }
        }
        $fixed_children = array_reverse($fixed_children);
      }
      
      $child->set_containing_block($content_x, $content_y, $content_width, $content_height);
      
      
      $this->_check_callbacks("begin_page_reflow", $child);
    
      
      if ($current_page >= 1) {
        foreach ($fixed_children as $fixed_child) {
          $child->insert_child_before($fixed_child->deep_copy(), $child->get_first_child());
        }
      }
      
      $child->reflow();
      $next_child = $child->get_next_sibling();
      
      
      $this->_check_callbacks("begin_page_render", $child);
      
      $renderer = $this->_frame->get_renderer();

      
      $renderer->render($child);
      
      
      ksort($this->_stacking_context);
      
      foreach( $this->_stacking_context as $_z_index => $_frames ) {
        foreach ( $_frames as $_frame ) {
          $renderer->render($_frame);
        }
      }
      
      $this->_stacking_context = array();
      
      
      $this->_check_callbacks("end_page_render", $child);
      
      if ( $next_child ) {
        $this->_frame->next_page();
      }

      
      
      if ( $prev_child ) {
        $prev_child->dispose(true);
      }
      $prev_child = $child;
      $child = $next_child;
      $current_page++;
    }

    
    if ( $prev_child ) {
      $prev_child->dispose(true);
    }
  }  
  
  
  
  
  protected function _check_callbacks($event, $frame) {
    if (!isset($this->_callbacks)) {
      $dompdf = $this->_frame->get_dompdf();
      $this->_callbacks = $dompdf->get_callbacks();
      $this->_canvas = $dompdf->get_canvas();
    }
    
    if (is_array($this->_callbacks) && isset($this->_callbacks[$event])) {
      $info = array(0 => $this->_canvas, "canvas" => $this->_canvas,
                    1 => $frame, "frame" => $frame);
      $fs = $this->_callbacks[$event];
      foreach ($fs as $f) {
        if (is_callable($f)) {
          if (is_array($f)) {
            $f[0]->$f[1]($info);
          } else {
            $f($info);
          }
        }
      }
    }
  }  
}
