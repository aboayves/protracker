<?php





define('__DEFAULT_STYLESHEET', DOMPDF_LIB_DIR . DIRECTORY_SEPARATOR . "res" . DIRECTORY_SEPARATOR . "html.css");


class Stylesheet {
  
  
  const DEFAULT_STYLESHEET = __DEFAULT_STYLESHEET; 

  
  private $_styles;

  
  private $_protocol;

  
  private $_base_host;

  
  private $_base_path;

  
  private $_page_style;

  
  private $_loaded_files;

  
  static $ACCEPTED_DEFAULT_MEDIA_TYPE = "print";
  static $ACCEPTED_GENERIC_MEDIA_TYPES = array("all", "static", "visual", "bitmap", "paged", "dompdf");

  
  function __construct() {
    $this->_styles = array();
    $this->_loaded_files = array();
    list($this->_protocol, $this->_base_host, $this->_base_path) = explode_url($_SERVER["SCRIPT_FILENAME"]);
    $this->_page_style = null;
  }
  
  
  function __destruct() {
    clear_object($this);
  }

  
  function set_protocol($proto) { $this->_protocol = $proto; }

  
  function set_host($host) { $this->_base_host = $host; }

  
  function set_base_path($path) { $this->_base_path = $path; }

  
  function get_protocol() { return $this->_protocol; }

  
  function get_host() { return $this->_base_host; }

  
  function get_base_path() { return $this->_base_path; }
  
  
  function get_page_style() { return $this->_page_style; }

  
  function add_style($key, Style $style) {
    if (!is_string($key))
      throw new DOMPDF_Exception("CSS rule must be keyed by a string.");

    if ( isset($this->_styles[$key]) )
      $this->_styles[$key]->merge($style);
    else
      $this->_styles[$key] = clone $style;
  }

  
  function lookup($key) {
    if ( !isset($this->_styles[$key]) )
      return null;

    return $this->_styles[$key];
  }

  
  function create_style(Style $parent = null) {
    return new Style($this, $parent);
  }

  
  function load_css(&$css) { $this->_parse_css($css); }


  
  function load_css_file($file) {
    global $_dompdf_warnings;

    
    if ( isset($this->_loaded_files[$file]) )
      return;

    $this->_loaded_files[$file] = true;
    $parsed_url = explode_url($file);

    list($this->_protocol, $this->_base_host, $this->_base_path, $filename) = $parsed_url;

    if ( !DOMPDF_ENABLE_REMOTE &&
         ($this->_protocol != "" && $this->_protocol !== "file://") ) {
      record_warnings(E_USER_WARNING, "Remote CSS file '$file' requested, but DOMPDF_ENABLE_REMOTE is false.", __FILE__, __LINE__);
      return;
    }

    
    if ( $this->_protocol == "" )
      $file = $this->_base_path . $filename;
    else
      $file = build_url($this->_protocol, $this->_base_host, $this->_base_path, $filename);

    set_error_handler("record_warnings");
    $css = file_get_contents($file);
    restore_error_handler();

    if ( $css == "" ) {
      record_warnings(E_USER_WARNING, "Unable to load css file $file", __FILE__, __LINE__);;
      return;
    }

    $this->_parse_css($css);
  }

  
  private function _specificity($selector) {
    
    
    

    $a = ($selector === "!style attribute") ? 1 : 0;

    $b = min(mb_substr_count($selector, "#"), 255);

    $c = min(mb_substr_count($selector, ".") +
             mb_substr_count($selector, "["), 255);

    $d = min(mb_substr_count($selector, " ") + 
             mb_substr_count($selector, ">") +
             mb_substr_count($selector, "+"), 255);

    
    
    
    
    

    if ( !in_array($selector[0], array(" ", ">", ".", "#", "+", ":", "[")) ) {
    	$d++;
    }

    if (DEBUGCSS) {
      	print "<pre>\n";
      	printf("_specificity(): 0x%08x \"%s\"\n", ($a << 24) | ($b << 16) | ($c << 8) | ($d), $selector);
      	print "</pre>";
    }

    return ($a << 24) | ($b << 16) | ($c << 8) | ($d);
  }

  
  private function _css_selector_to_xpath($selector, $first_pass = false) {

    




    
    $query = "//";
    
    
    $pseudo_elements = array();

    
    

    $delimiters = array(" ", ">", ".", "#", "+", ":", "[");

    
    
    if ( $selector[0] === "[" )
      $selector = "*$selector";
      
    
    
    if ( !in_array($selector[0], $delimiters) )
      $selector = " $selector";

    $tok = "";
    $len = mb_strlen($selector);
    $i = 0;

    while ( $i < $len ) {

      $s = $selector[$i];
      $i++;

      
      $tok = "";
      $in_attr = false;
      
      while ($i < $len) {
        $c = $selector[$i];
        $c_prev = $selector[$i-1];
        
        if ( !$in_attr && in_array($c, $delimiters) )
          break;
          
        if ( $c_prev === "[" ) {
          $in_attr = true;
        }
        
        $tok .= $selector[$i++];
      }

      switch ($s) {

      case " ":
      case ">":
        
        
        $expr = $s === " " ? "descendant" : "child";

        if ( mb_substr($query, -1, 1) !== "/" )
          $query .= "/";

        if ( !$tok )
          $tok = "*";

        $query .= "$expr::$tok";
        $tok = "";
        break;

      case ".":
      case "#":
        
        

        $attr = $s === "." ? "class" : "id";

        
        if ( mb_substr($query, -1, 1) === "/" )
          $query .= "*";

        
        
        

        
        

        
        $query .= "[contains(concat(' ', @$attr, ' '), concat(' ', '$tok', ' '))]";
        $tok = "";
        break;

      case "+":
        
        if ( mb_substr($query, -1, 1) !== "/" )
          $query .= "/";

        $query .= "following-sibling::$tok";
        $tok = "";
        break;

      case ":":
        
        switch ($tok) {

        case "first-child":
          $query .= "[1]";
          $tok = "";
          break;

        case "last-child":
          $query .= "[not(following-sibling::*)]";
          $tok = "";
          break;

        case "link":
          $query .= "[@href]";
          $tok = "";
          break;
          
        case "first-line": 
        case "first-letter": 
        
        
        case "active":
        case "visited":
          $query .= "[@dummy]";
          $tok = "";
          break;

        
        case "before":
        case "after":
          if ( $first_pass )
            $pseudo_elements[$tok] = $tok;
          else
            $query .= "/*[@$tok]";
            
          $tok = "";
          break;

        case "empty":
          $query .= "[not(*) and not(normalize-space())]";
          $tok = "";
          break;
          
        case "disabled":
        case "checked":
          $query .= "[@$tok]";
          $tok = "";
          break;
          
        case "enabled":
          $query .= "[not(@disabled)]";
          $tok = "";
          break;
        }

        break;

      case "[":
        
        $attr_delimiters = array("=", "]", "~", "|", "$", "^", "*");
        $tok_len = mb_strlen($tok);
        $j = 0;

        $attr = "";
        $op = "";
        $value = "";

        while ( $j < $tok_len ) {
          if ( in_array($tok[$j], $attr_delimiters) )
            break;
          $attr .= $tok[$j++];
        }

        switch ( $tok[$j] ) {

        case "~":
        case "|":
        case "$":
        case "^":
        case "*":
          $op .= $tok[$j++];

          if ( $tok[$j] !== "=" )
            throw new DOMPDF_Exception("Invalid CSS selector syntax: invalid attribute selector: $selector");

          $op .= $tok[$j];
          break;

        case "=":
          $op = "=";
          break;

        }

        
        if ( $op != "" ) {
          $j++;
          while ( $j < $tok_len ) {
            if ( $tok[$j] === "]" )
              break;
            $value .= $tok[$j++];
          }
        }

        if ( $attr == "" )
          throw new DOMPDF_Exception("Invalid CSS selector syntax: missing attribute name");

        $value = trim($value, "\"'");
        
        switch ( $op ) {

        case "":
          $query .=  "[@$attr]";
          break;

        case "=":
          $query .= "[@$attr=\"$value\"]";
          break;

        case "~=":
          
          
          $values = explode(" ", $value);
          $query .=  "[";

          foreach ( $values as $val )
            $query .= "@$attr=\"$val\" or ";

          $query = rtrim($query, " or ") . "]";
          break;

        case "|=":
          $values = explode("-", $value);
          $query .= "[";

          foreach ( $values as $val )
            $query .= "starts-with(@$attr, \"$val\") or ";

          $query = rtrim($query, " or ") . "]";
          break;

        case "$=":
          $query .= "[substring(@$attr, string-length(@$attr)-".(strlen($value) - 1).")=\"$value\"]";
          break;
          
        case "^=":
          $query .= "[starts-with(@$attr,\"$value\")]";
          break;
          
        case "*=":
          $query .= "[contains(@$attr,\"$value\")]";
          break;
        }

        break;
      }
    }
    $i++;






















    
    if ( mb_strlen($query) > 2 )
      $query = rtrim($query, "/");

    return array("query" => $query, "pseudo_elements" => $pseudo_elements);
  }

  
  function apply_styles(Frame_Tree $tree) {

    
    
    
    
    

    
    
    

    

    $styles = array();
    $xp = new DOMXPath($tree->get_dom());
    
    
    foreach ($this->_styles as $selector => $style) {
      if (strpos($selector, ":before") === false && 
          strpos($selector, ":after") === false) continue;
      
      $query = $this->_css_selector_to_xpath($selector, true);
      
      
      $nodes = @$xp->query($query["query"]);
      if ($nodes == null) {
        record_warnings(E_USER_WARNING, "The CSS selector '$selector' is not valid", __FILE__, __LINE__);
        continue;
      }
      
      foreach ($nodes as $i => $node) {
        foreach ($query["pseudo_elements"] as $pos) {
          if (($src = $this->_image($style->content)) !== "none") {
            $new_node = $node->ownerDocument->createElement("img_generated");
            $new_node->setAttribute("src", $src);
          }
          else {
            $new_node = $node->ownerDocument->createElement("dompdf_generated");
          }
          $new_node->setAttribute($pos, $pos);
          
          $tree->insert_node($node, $new_node, $pos);
        }
      }
    }
    
    
    foreach ($this->_styles as $selector => $style) {
      $query = $this->_css_selector_to_xpath($selector);

      
      $nodes = @$xp->query($query["query"]);
      if ($nodes == null) {
        record_warnings(E_USER_WARNING, "The CSS selector '$selector' is not valid", __FILE__, __LINE__);
        continue;
      }

      foreach ($nodes as $node) {
        
        if ( $node->nodeType != XML_ELEMENT_NODE ) 
          continue;

        $id = $node->getAttribute("frame_id");

        
        $spec = $this->_specificity($selector);
        $styles[$id][$spec][] = $style;
      }
    }

    
    
    $root_flg = false;
    foreach ($tree->get_frames() as $frame) {
      
      if ( !$root_flg && $this->_page_style ) {
        $style = $this->_page_style;
        $root_flg = true;
      } else
        $style = $this->create_style();

      
      $p = $frame;
      while ( $p = $p->get_parent() )
        if ($p->get_node()->nodeType == XML_ELEMENT_NODE )
          break;

      
      
      if ( $frame->get_node()->nodeType != XML_ELEMENT_NODE ) {
        if ( $p )
          $style->inherit($p->get_style());
        $frame->set_style($style);
        continue;
      }

      $id = $frame->get_id();

      
      Attribute_Translator::translate_attributes($frame);

      
      if ( ($str = $frame->get_node()->getAttribute("style")) !== "" ) {
        
        $str = preg_replace("'/\*.*?\*/'si", "", $str);
        
        $spec = $this->_specificity("!style attribute");
        $styles[$id][$spec][] = $this->_parse_properties($str);
      }

      
      if ( isset($styles[$id]) ) {

        $applied_styles = $styles[ $frame->get_id() ];

        
        ksort($applied_styles);

        if (DEBUGCSS) {
          $debug_nodename = $frame->get_node()->nodeName;
          print "<pre>\n[$debug_nodename\n";
          foreach ($applied_styles as $spec => $arr) {
            printf("specificity: 0x%08x\n",$spec);
            foreach ($arr as $s) {
              print "[\n";
              $s->debug_print();
              print "]\n";
            }
          }
        }
        
        
        foreach ($applied_styles as $arr) {
          foreach ($arr as $s)
            $style->merge($s);
        }
      }

      
      if ( $p ) {

        if (DEBUGCSS) {
          print "inherit:\n";
          print "[\n";
          $p->get_style()->debug_print();
          print "]\n";
        }

        $style->inherit( $p->get_style() );
      }

      if (DEBUGCSS) {
        print "DomElementStyle:\n";
        print "[\n";
        $style->debug_print();
        print "]\n";
        print "/$debug_nodename]\n</pre>";
      }

      
      $frame->set_style($style);

    }

    
    
    foreach ( array_keys($this->_styles) as $key ) {
      $this->_styles[$key] = null;
      unset($this->_styles[$key]);
    }

  }


  
  private function _parse_css($str) {

    $str = trim($str);
    
    
    $css = preg_replace(array(
      "'/\*.*?\*/'si", 
      "/^<!--/",
      "/-->$/"
    ), "", $str);

    

    
    $re =
      "/\s*                                   # Skip leading whitespace                             \n".
      "( @([^\s]+)\s+([^{;]*) (?:;|({)) )?    # Match @rules followed by ';' or '{'                 \n".
      "(?(1)                                  # Only parse sub-sections if we're in an @rule...     \n".
      "  (?(4)                                # ...and if there was a leading '{'                   \n".
      "    \s*( (?:(?>[^{}]+) ({)?            # Parse rulesets and individual @page rules           \n".
      "            (?(6) (?>[^}]*) }) \s*)+?  \n".
      "       )                               \n".
      "   })                                  # Balancing '}'                                \n".
      "|                                      # Branch to match regular rules (not preceeded by '@')\n".
      "([^{]*{[^}]*}))                        # Parse normal rulesets\n".
      "/xs";

    if ( preg_match_all($re, $css, $matches, PREG_SET_ORDER) === false )
      
      throw new DOMPDF_Exception("Error parsing css file: preg_match_all() failed.");

    
    
    
    
    
    
    
    
    
    
    
    
    foreach ( $matches as $match ) {
      $match[2] = trim($match[2]);

      if ( $match[2] !== "" ) {
        
        switch ($match[2]) {

        case "import":
          $this->_parse_import($match[3]);
          break;

        case "media":
          $acceptedmedia = self::$ACCEPTED_GENERIC_MEDIA_TYPES;
          if ( defined("DOMPDF_DEFAULT_MEDIA_TYPE") ) {
            $acceptedmedia[] = DOMPDF_DEFAULT_MEDIA_TYPE;
          } else {
            $acceptedmedia[] = self::$ACCEPTED_DEFAULT_MEDIA_TYPE;
          }
          if ( in_array(mb_strtolower(trim($match[3])), $acceptedmedia ) ) {
            $this->_parse_sections($match[5]);
          }
          break;

        case "page":
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          

          
          if ($match[3] !== "")
            return;

          
          if ( is_null($this->_page_style) )
            $this->_page_style = $this->_parse_properties($match[5]);
          else
            $this->_page_style->merge($this->_parse_properties($match[5]));
          break;

        case "font-face":
          $this->_parse_font_face($match[5]);
          break;
          
        default:
          
          break;
        }

        continue;
      }

      if ( $match[7] !== "" )
        $this->_parse_sections($match[7]);

    }
  }

  
  protected function _image($val) {
    $DEBUGCSS=DEBUGCSS;
    
    if ( mb_strpos($val, "url") === false ) {
      $path = "none"; 
    }
    else {
      $val = preg_replace("/url\(['\"]?([^'\")]+)['\"]?\)/","\\1", trim($val));

      
      $parsed_url = explode_url($val);
      if ( $parsed_url["protocol"] == "" && $this->get_protocol() == "" ) {
        if ($parsed_url["path"][0] === '/' || $parsed_url["path"][0] === '\\' ) {
          $path = $_SERVER["DOCUMENT_ROOT"].'/';
        } else {
          $path = $this->get_base_path();
        }
        $path .= $parsed_url["path"] . $parsed_url["file"];
        $path = realpath($path);
        
        
        if (!$path) { $path = 'none'; }
      } else {
        $path = build_url($this->get_protocol(),
                          $this->get_host(),
                          $this->get_base_path(),
                          $val);
      }
    }
    if ($DEBUGCSS) {
      print "<pre>[_image\n";
      print_r($parsed_url);
      print $this->get_protocol()."\n".$this->get_base_path()."\n".$path."\n";
      print "_image]</pre>";;
    }
    return $path;
  }

  
  private function _parse_import($url) {
    $arr = preg_split("/[\s\n,]/", $url,-1, PREG_SPLIT_NO_EMPTY);
    $url = array_shift($arr);
    $accept = false;

    if ( count($arr) > 0 ) {

      $acceptedmedia = self::$ACCEPTED_GENERIC_MEDIA_TYPES;
      if ( defined("DOMPDF_DEFAULT_MEDIA_TYPE") ) {
        $acceptedmedia[] = DOMPDF_DEFAULT_MEDIA_TYPE;
      } else {
        $acceptedmedia[] = self::$ACCEPTED_DEFAULT_MEDIA_TYPE;
      }
              
      
      foreach ( $arr as $type ) {
        if ( in_array(mb_strtolower(trim($type)), $acceptedmedia) ) {
          $accept = true;
          break;
        }
      }

    } else {
      
      $accept = true;
    }

    if ( $accept ) {
      
      $protocol = $this->_protocol;
      $host = $this->_base_host;
      $path = $this->_base_path;
      
      
      
      
      
      
      
      $url = $this->_image($url);
      
      $this->load_css_file($url);

      
      $this->_protocol = $protocol;
      $this->_base_host = $host;
      $this->_base_path = $path;
    }

  }
  
  
  private function _parse_font_face($str) {
    $descriptors = $this->_parse_properties($str);
    
    preg_match_all("/(url|local)\s*\([\"\']?([^\"\'\)]+)[\"\']?\)\s*(format\s*\([\"\']?([^\"\'\)]+)[\"\']?\))?/i", $descriptors->src, $src);
    
    $sources = array();
    foreach($src[0] as $i => $value) {
      $sources[] = array(
        "local"  => strtolower($src[1][$i]) === "local",
        "uri"    => $src[2][$i],
        "format" => $src[4][$i],
      );
    }
    
    
  }

  
  private function _parse_properties($str) {
    $properties = preg_split("/;(?=(?:[^\(]*\([^\)]*\))*(?![^\)]*\)))/", $str);

    if (DEBUGCSS) print '[_parse_properties';

    
    $style = new Style($this);
    foreach ($properties as $prop) {
      
      
      
      
      
      
      
      
      
      
      

      
      if (DEBUGCSS) print '(';
 	  $important = false;
      $prop = trim($prop);
      if (substr($prop,-9) === 'important') {
      	$prop_tmp = rtrim(substr($prop,0,-9));
      	if (substr($prop_tmp,-1) === '!') {
      		$prop = rtrim(substr($prop_tmp,0,-1));
      		$important = true;
      	}
      }

      if ($prop == "") {
        if (DEBUGCSS) print 'empty)';
        continue;
      }

      $i = mb_strpos($prop, ":");
      if ( $i === false ) {
        if (DEBUGCSS) print 'novalue'.$prop.')';
        continue;
      }

      $prop_name = rtrim(mb_strtolower(mb_substr($prop, 0, $i)));
      $value = ltrim(mb_substr($prop, $i+1));
      if (DEBUGCSS) print $prop_name.':='.$value.($important?'!IMPORTANT':'').')';
      
      
      
      
      
      
      if ($important) {
        $style->important_set($prop_name);
      }
      
      $style->$prop_name = $value;
      
    }
    if (DEBUGCSS) print '_parse_properties]';

    return $style;
  }

  
  private function _parse_sections($str) {
    
    

    $patterns = array("/[\\s\n]+/", "/\\s+([>.:+#])\\s+/");
    $replacements = array(" ", "\\1");
    $str = preg_replace($patterns, $replacements, $str);

    $sections = explode("}", $str);
    if (DEBUGCSS) print '[_parse_sections';
    foreach ($sections as $sect) {
      $i = mb_strpos($sect, "{");

      $selectors = explode(",", mb_substr($sect, 0, $i));
      if (DEBUGCSS) print '[section';
      $style = $this->_parse_properties(trim(mb_substr($sect, $i+1)));
      
      
      foreach ($selectors as $selector) {
        $selector = trim($selector);

        if ($selector == "") {
          if (DEBUGCSS) print '#empty#';
          continue;
        }
        if (DEBUGCSS) print '#'.$selector.'#';
        

        $this->add_style($selector, $style);
      }
      if (DEBUGCSS) print 'section]';
    }
    if (DEBUGCSS) print '_parse_sections]';
  }

  
  function __toString() {
    $str = "";
    foreach ($this->_styles as $selector => $style)
      $str .= "$selector => " . $style->__toString() . "\n";

    return $str;
  }
}
