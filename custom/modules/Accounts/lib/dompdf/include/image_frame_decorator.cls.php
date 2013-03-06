<?php





class Image_Frame_Decorator extends Frame_Decorator {

  
  protected $_image_url;

  
  protected $_image_ext;

  
  function __construct(Frame $frame, DOMPDF $dompdf) {
    global $_dompdf_warnings;
    
    parent::__construct($frame, $dompdf);
    $url = $frame->get_node()->getAttribute("src");
      
    
    if (DEBUGPNG) print '[__construct '.$url.']';

    list($this->_image_url, $this->_image_ext) = Image_Cache::resolve_url($url,
                                                                          $dompdf->get_protocol(),
                                                                          $dompdf->get_host(),
                                                                          $dompdf->get_base_path());

    if ( strrpos( $this->_image_url, DOMPDF_LIB_DIR . "/res/broken_image.png", 0) !== false &&
         $alt = $frame->get_node()->getAttribute("alt") ) {
      $style = $frame->get_style();
      $style->width  = (4/3)*Font_Metrics::get_text_width($alt, $style->font_family, $style->font_size, $style->word_spacing);
      $style->height = Font_Metrics::get_font_height($style->font_family, $style->font_size);
    }
  }

  
  function get_image_url() {
    return $this->_image_url;
  }

  
  function get_image_ext() {
    return $this->_image_ext;
  }
  
}
