<?php





class DOMPDF {

  
  protected $_xml;

  
  protected $_tree;

  
  protected $_css;

  
  protected $_pdf;

  
  protected $_paper_size;

  
  protected $_paper_orientation;

  
  protected $_callbacks;

  
  private $_cache_id;

  
  protected $_base_host;

  
  protected $_base_path;

  
  protected $_protocol;
  
  
  private $_start_time = null;
  
  
  private $_system_locale = null;
  
  
  private $_locale_standard = false;

  
  function __construct() {
    $this->_locale_standard = sprintf('%.1f', 1.0) == '1.0';
    
    $this->save_locale();
    
    $this->_messages = array();
    $this->_xml = new DOMDocument();
    $this->_xml->preserveWhiteSpace = true;
    $this->_tree = new Frame_Tree($this->_xml);
    $this->_css = new Stylesheet();
    $this->_pdf = null;
    $this->_paper_size = "letter";
    $this->_paper_orientation = "portrait";
    $this->_base_protocol = "";
    $this->_base_host = "";
    $this->_base_path = "";
    $this->_callbacks = array();
    $this->_cache_id = null;
    
    $this->restore_locale();
  }
  
  
  function __destruct() {
    clear_object($this);
  }
  
  
  private function save_locale() {
    if ( $this->_locale_standard ) return;
    
    $this->_system_locale = setlocale(LC_NUMERIC, "C");
  }
  
  
  private function restore_locale() {
    if ( $this->_locale_standard ) return;
    
    setlocale(LC_NUMERIC, $this->_system_locale);
  }

  
  function get_tree() { return $this->_tree; }

  
  function set_protocol($proto) { $this->_protocol = $proto; }

  
  function set_host($host) { $this->_base_host = $host; }

  
  function set_base_path($path) { $this->_base_path = $path; }

  
  function get_protocol() { return $this->_protocol; }

  
  function get_host() { return $this->_base_host; }

  
  function get_base_path() { return $this->_base_path; }

  
  function get_canvas() { return $this->_pdf; }

  
  function get_callbacks() { return $this->_callbacks; }

  
  function load_html_file($file) {
    $this->save_locale();
    
    
    
    
    if ( !$this->_protocol && !$this->_base_host && !$this->_base_path )
      list($this->_protocol, $this->_base_host, $this->_base_path) = explode_url($file);

    if ( !DOMPDF_ENABLE_REMOTE &&
         ($this->_protocol != "" && $this->_protocol !== "file://" ) )
      throw new DOMPDF_Exception("Remote file requested, but DOMPDF_ENABLE_REMOTE is false.");

    if ($this->_protocol == "" || $this->_protocol === "file://") {

      $realfile = realpath($file);
      if ( !$file )
        throw new DOMPDF_Exception("File '$file' not found.");

      if ( strpos($realfile, DOMPDF_CHROOT) !== 0 )
        throw new DOMPDF_Exception("Permission denied on $file.");

      
      if ( substr(basename($realfile),0,1) === "." )
        throw new DOMPDF_Exception("Permission denied on $file.");

      $file = $realfile;
    }

    $contents = file_get_contents($file);
    $encoding = null;

    
    if ( isset($http_response_header) ) {
      foreach($http_response_header as $_header) {
        if ( preg_match("@Content-Type:\s*[\w/]+;\s*?charset=([^\s]+)@i", $_header, $matches) ) {
          $encoding = strtoupper($matches[1]);
          break;
        }
      }
    }
    
    $this->restore_locale();
    
    $this->load_html($contents, $encoding);
  }

  
  function load_html($str, $encoding = null) {
    $this->save_locale();
    
    
    
    mb_detect_order('auto');
    
    if (mb_detect_encoding($str) !== 'UTF-8') {
      $metatags = array(
        '@<meta\s+http-equiv="Content-Type"\s+content="(?:[\w/]+)(?:;\s*?charset=([^\s"]+))?@i',
        '@<meta\s+content="(?:[\w/]+)(?:;\s*?charset=([^\s"]+))"?\s+http-equiv="Content-Type"@i',
      );
      
      foreach($metatags as $metatag) {
        if (preg_match($metatag, $str, $matches)) break;
      }
        
      if (mb_detect_encoding($str) == '') {
        if (isset($matches[1])) {
          $encoding = strtoupper($matches[1]);
        } else {
          $encoding = 'UTF-8';
        }
      } else {
        if (isset($matches[1])) {
          $encoding = strtoupper($matches[1]);
        } else {
          $encoding = 'auto';
        }
      }
      
      if ($encoding !== 'UTF-8') { 
        $str = mb_convert_encoding($str, 'UTF-8', $encoding); 
      }
      
      if (isset($matches[1])) {
        $str = preg_replace('/charset=([^\s"]+)/i','charset=UTF-8', $str);
      } else {
        $str = str_replace('<head>', '<head><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">', $str);
      }
    }

    
    if ( DOMPDF_ENABLE_PHP ) {
      ob_start();
      eval("?" . ">$str");
      $str = ob_get_clean();
    }
    
    
    
    
    if ( $encoding === 'UTF-8' ) {
      $str = preg_replace("/<meta([^>]+)>/", "", $str);
    }
    
    
    set_error_handler("record_warnings");
    $this->_xml->loadHTML($str);
    restore_error_handler();
    
    
    
    $this->restore_locale();
  }

  
  protected function _process_html() {
    $this->save_locale();
    
    $this->_tree->build_tree();

    $this->_css->load_css_file(Stylesheet::DEFAULT_STYLESHEET);

    $acceptedmedia = Stylesheet::$ACCEPTED_GENERIC_MEDIA_TYPES;
    if ( defined("DOMPDF_DEFAULT_MEDIA_TYPE") ) {
      $acceptedmedia[] = DOMPDF_DEFAULT_MEDIA_TYPE;
    } else {
      $acceptedmedia[] = Stylesheet::$ACCEPTED_DEFAULT_MEDIA_TYPE;
    }
          
    
    $links = $this->_xml->getElementsByTagName("link");
    foreach ($links as $link) {
      if ( mb_strtolower($link->getAttribute("rel")) === "stylesheet" ||
           mb_strtolower($link->getAttribute("type")) === "text/css" ) {
        
        
        $formedialist = preg_split("/[\s\n,]/", $link->getAttribute("media"),-1, PREG_SPLIT_NO_EMPTY);
        if ( count($formedialist) > 0 ) {
          $accept = false;
          foreach ( $formedialist as $type ) {
            if ( in_array(mb_strtolower(trim($type)), $acceptedmedia) ) {
              $accept = true;
              break;
            }
          }
          if (!$accept) {
            
            
            continue;
          }
        }
           
        $url = $link->getAttribute("href");
        $url = build_url($this->_protocol, $this->_base_host, $this->_base_path, $url);

        $this->_css->load_css_file($url);
      }

    }

    
    $styles = $this->_xml->getElementsByTagName("style");
    foreach ($styles as $style) {

      
      
      
      
      if ( $style->hasAttributes() &&
           ($media = $style->getAttribute("media")) &&
           !in_array($media, $acceptedmedia) )
        continue;

      $css = "";
      if ( $style->hasChildNodes() ) {

        $child = $style->firstChild;
        while ( $child ) {
          $css .= $child->nodeValue; 
          $child = $child->nextSibling;
        }

      } else
        $css = $style->nodeValue;
      
      
      $this->_css->set_protocol($this->_protocol);
      $this->_css->set_host($this->_base_host);
      $this->_css->set_base_path($this->_base_path);

      $this->_css->load_css($css);
    }
    
    $this->restore_locale();
  }

  
  function set_paper($size, $orientation = "portrait") {
    $this->_paper_size = $size;
    $this->_paper_orientation = $orientation;
  }

  
  function enable_caching($cache_id) {
    $this->_cache_id = $cache_id;
  }

  
  function set_callbacks($callbacks) {
    if (is_array($callbacks)) {
      $this->_callbacks = array();
      foreach ($callbacks as $c) {
        if (is_array($c) && isset($c['event']) && isset($c['f'])) {
          $event = $c['event'];
          $f = $c['f'];
          if (is_callable($f) && is_string($event)) {
            $this->_callbacks[$event][] = $f;
          }
        }
      }
    }
  }

  
  function render() {
    $this->save_locale();
    
    if ( DOMPDF_LOG_OUTPUT_FILE ) {
      if ( !file_exists(DOMPDF_LOG_OUTPUT_FILE) && is_writable(dirname(DOMPDF_LOG_OUTPUT_FILE)) ) {
        touch(DOMPDF_LOG_OUTPUT_FILE);
      }
      
      $this->_start_time = microtime(true);
      ob_start();
    }

    

    $this->_process_html();
    
    $this->_css->apply_styles($this->_tree);
    
    $root = null;

    foreach ($this->_tree->get_frames() as $frame) {
      

      if ( is_null($root) ) {
        $root = Frame_Factory::decorate_root( $this->_tree->get_root(), $this );
        continue;
      }

      
      $deco = Frame_Factory::decorate_frame($frame, $this);
      $deco->set_root($root);

      
      if ( $frame->get_style()->display === "list-item" ) {

        
        $node = $this->_xml->createElement("bullet"); 
        $b_f = new Frame($node);

        $parent_node = $frame->get_parent()->get_node();

        if ( !$parent_node->hasAttribute("dompdf-children-count") ) {
          $count = 0;
          foreach ($parent_node->childNodes as $_node) {
            if ( $_node instanceof DOMElement )
              $count++;
          }
          $parent_node->setAttribute("dompdf-children-count", $count);
        }

        $index = 0;
        if ( !$parent_node->hasAttribute("dompdf-counter") ) {
          $index = 1;
          $parent_node->setAttribute("dompdf-counter", 1);
        }
        else {
          $index = $parent_node->getAttribute("dompdf-counter");
          $index++;
          $parent_node->setAttribute("dompdf-counter", $index);
        }
        
        $node->setAttribute("dompdf-counter", $index);
        $style = $this->_css->create_style();
        $style->display = "-dompdf-list-bullet";
        $style->inherit($frame->get_style());
        $b_f->set_style($style);

        $deco->prepend_child( Frame_Factory::decorate_frame($b_f, $this) );
      }

    }
    
    $page_style = $this->_css->get_page_style();
    
    if ( $page_style && is_array($page_style->size) ) {
      $this->set_paper(array(0, 0, $page_style->size[0], $page_style->size[1]));
    }
    
    $this->_pdf = Canvas_Factory::get_instance($this->_paper_size, $this->_paper_orientation);

    
    $title = $this->_xml->getElementsByTagName("title");
    if ( $title->length ) {
      $this->_pdf->add_info("Title", trim($title->item(0)->nodeValue));
    }
    
    $metas = $this->_xml->getElementsByTagName("meta");
    $labels = array(
      "author" => "Author",
      "keywords" => "Keywords",
      "description" => "Subject",
    );
    foreach($metas as $meta) {
      $name = mb_strtolower($meta->getAttribute("name"));
      if ( isset($labels[$name]) ) {
        $this->_pdf->add_info($labels[$name], trim($meta->getAttribute("content")));
      }
    }
    
    $root->set_containing_block(0, 0, $this->_pdf->get_width(), $this->_pdf->get_height());
    $root->set_renderer(new Renderer($this));

    
    $root->reflow();

    
    Image_Cache::clear();
    
    global $_dompdf_warnings, $_dompdf_show_warnings;
    if ( $_dompdf_show_warnings ) {
      echo '<b>DOMPDF Warnings</b><br><pre>';
      foreach ($_dompdf_warnings as $msg)
        echo $msg . "\n";
      echo $this->get_canvas()->get_cpdf()->messages;
      echo '</pre>';
      flush();
    }
    
    $this->restore_locale();
  }

  
  function add_info($label, $value) {
    if (!is_null($this->_pdf))
      $this->_pdf->add_info($label, $value);
  }

  
  private function write_log() {
    if ( !DOMPDF_LOG_OUTPUT_FILE || !is_writable(DOMPDF_LOG_OUTPUT_FILE) ) return;
    
    $memory = DOMPDF_memory_usage();
    $memory = number_format($memory/1024);
    $time = number_format((microtime(true) - $this->_start_time) * 1000, 4);
    
    $out = "<span style='color: #900'>$memory KB</span>    ".
    "<span style='color: #090'>$time ms</span><br />";
    
    $out .= ob_get_clean();
    file_put_contents(DOMPDF_LOG_OUTPUT_FILE, $out);
  }

  
  function stream($filename, $options = null) {
    $this->save_locale();
    
    $this->write_log();
    
    if (!is_null($this->_pdf))
      $this->_pdf->stream($filename, $options);
      
    $this->restore_locale();
  }

  
  function output($options = null) {
    $this->save_locale();
    
    $this->write_log();

    if ( is_null($this->_pdf) )
      return null;

    $output = $this->_pdf->output( $options );
    
    $this->restore_locale();
    
    return $output;
  }

  
  function output_html() {
    return $this->_xml->saveHTML();
  }
}
