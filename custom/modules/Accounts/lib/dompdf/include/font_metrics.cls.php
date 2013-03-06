<?php




require_once(DOMPDF_LIB_DIR . "/class.pdf.php");


if (!defined("__DOMPDF_FONT_CACHE_FILE")) {
  if (file_exists(DOMPDF_FONT_DIR . "dompdf_font_family_cache")) {
  	define('__DOMPDF_FONT_CACHE_FILE', DOMPDF_FONT_DIR . "dompdf_font_family_cache");
  } else {
  	define('__DOMPDF_FONT_CACHE_FILE', DOMPDF_FONT_DIR . "dompdf_font_family_cache.dist.php");
  }
}


class Font_Metrics {

  
  const CACHE_FILE = __DOMPDF_FONT_CACHE_FILE;
  
  
  static protected $_pdf = null;

  
  static protected $_font_lookup = array();
  
  
  
  static function init() {
    if (!self::$_pdf) {
      self::load_font_families();
      self::$_pdf = Canvas_Factory::get_instance();
    }
  }

  
  static function get_text_width($text, $font, $size, $word_spacing = 0, $char_spacing = 0) {
    return self::$_pdf->get_text_width($text, $font, $size, $word_spacing, $char_spacing);
  }

  
  static function get_font_height($font, $size) {
    return self::$_pdf->get_font_height($font, $size);
  }

  
  static function get_font($family, $subtype = "normal") {

    

    if ( $family ) {
      $family = str_replace( array("'", '"'), "", mb_strtolower($family));
      $subtype = mb_strtolower($subtype);

      if ( isset(self::$_font_lookup[$family][$subtype]) ) {
        return self::$_font_lookup[$family][$subtype];
      }
      return null;
    }

    $family = DOMPDF_DEFAULT_FONT;

    if ( isset(self::$_font_lookup[$family][$subtype]) ) {
      return self::$_font_lookup[$family][$subtype];
    }

    foreach ( self::$_font_lookup[$family] as $sub => $font ) {
      if (strpos($subtype, $sub) !== false) {
        return $font;
      }
    }

    if ($subtype !== "normal") {
      foreach ( self::$_font_lookup[$family] as $sub => $font ) {
        if ($sub !== "normal") {
          return $font;
        }
      }
    }

    $subtype = "normal";

    if ( isset(self::$_font_lookup[$family][$subtype]) ) {
      return self::$_font_lookup[$family][$subtype];
    }
    return null;
  }

  
  static function save_font_families() {
    
    $cache_data = var_export(self::$_font_lookup, true);
    $cache_data = str_replace('\''.DOMPDF_FONT_DIR , 'DOMPDF_FONT_DIR . \'' , $cache_data);
    $cache_data = "<"."?php return $cache_data ?".">";
    file_put_contents(self::CACHE_FILE, $cache_data);
  }

  
  static function load_font_families() {
    if ( !is_readable(self::CACHE_FILE) )
      return;

    self::$_font_lookup = require_once(self::CACHE_FILE);
    
    
    if ( self::$_font_lookup === 1 ) {
      $cache_data = file_get_contents(self::CACHE_FILE);
      file_put_contents(self::CACHE_FILE, "<"."?php return $cache_data ?".">");
      self::$_font_lookup = require_once(self::CACHE_FILE);
    }
  }
  
  static function get_system_fonts() {
    $files = glob("/usr/share/fonts/truetype/*.ttf") +
             glob("/usr/share/fonts/truetype/*/*.ttf") +
             glob("/usr/share/fonts/truetype/*/*/*.ttf") +
             glob("C:\\Windows\\fonts\\*.ttf") + 
             glob("C:\\WinNT\\fonts\\*.ttf") + 
             glob("/mnt/c_drive/WINDOWS/Fonts/");
    
    new TTF_Info;
    
    $names = array();
    
    foreach($files as $file) {
      $info = getFontInfo($file);
      $info["path"] = $file;
      $type = $info[2];
      
      if (preg_match("/regular|normal|medium|book/i", $type)) {
        $type = "normal";
      }
      elseif (preg_match("/bold/i", $type)) {
        if (preg_match("/italic|oblique/i", $type)) {
          $type = "bold_italic";
        }
        else {
          $type = "bold";
        }
      }
      elseif (preg_match("/italic|oblique/i", $type)) {
        $type = "italic";
      }
      
      $names[mb_strtolower($info[1])][$type] = $file;
    }
    
    $keys = array_keys($names);
    
    
    
    return $names;
  }

  
  static function get_font_families() {
    return self::$_font_lookup;
  }

  static function set_font_family($fontname, $entry) {
    self::$_font_lookup[mb_strtolower($fontname)] = $entry;
  }
}

Font_Metrics::init();
