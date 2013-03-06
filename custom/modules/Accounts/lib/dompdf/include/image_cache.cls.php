<?php





class Image_Cache {

  
  static protected $_cache = array();


  
  static function resolve_url($url, $proto, $host, $base_path) {
    global $_dompdf_warnings;

    $parsed_url = explode_url($url);

    $DEBUGPNG=DEBUGPNG; 
    $full_url_dbg = '';
    
    
    if ($DEBUGPNG) print 'resolve_url('.$url.','.$proto.','.$host.','.$base_path.')('.$parsed_url['protocol'].')';

    $remote = ($proto != "" && $proto !== "file://");
    $remote = $remote || ($parsed_url['protocol'] != "");
    
    $datauri = strpos($parsed_url['protocol'], "data:") === 0;

    if ( !DOMPDF_ENABLE_REMOTE && $remote && !$datauri ) {
      $resolved_url = DOMPDF_LIB_DIR . "/res/broken_image.png";
      $ext = "png";

      
      if ($DEBUGPNG) $full_url_dbg = '(blockedremote)';

    } 
    else if ( DOMPDF_ENABLE_REMOTE && $remote || $datauri ) {
      
      $full_url = build_url($proto, $host, $base_path, $url);

      if ( isset(self::$_cache[$full_url]) ) {
        list($resolved_url,$ext) = self::$_cache[$full_url];

        
        if ($DEBUGPNG) $full_url_dbg = $full_url.'(cache)';

      } else {

        $resolved_url = tempnam(DOMPDF_TEMP_DIR, "ca_dompdf_img_");
        
        if ($DEBUGPNG) echo $resolved_url . "\n";

        if ($datauri) {
          if ($parsed_data_uri = parse_data_uri($url)) {
            $image = $parsed_data_uri['data'];
            list(, $ext) = explode('/', $parsed_data_uri['mime'], 2); 
          }
        }
        else {
          $old_err = set_error_handler("record_warnings");
          $image = file_get_contents($full_url);
          restore_error_handler();
        }

        if ( strlen($image) == 0 ) {
          
          $resolved_url = DOMPDF_LIB_DIR . "/res/broken_image.png";
          $ext = "png";

          
          if ($DEBUGPNG) $full_url_dbg = $full_url.'(missing)';

        } else {

        file_put_contents($resolved_url, $image);

		
		
		
		
        
        

        $imagedim = dompdf_getimagesize($resolved_url);
        
        if( $imagedim[0] && $imagedim[1] && 
            in_array($imagedim[2], array(IMAGETYPE_GIF, IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_BMP)) ) {
        

        $imagetypes = array('','gif','jpeg','png','swf','psd','bmp');
        $ext = $imagetypes[$imagedim[2]];
        if ( rename($resolved_url,$resolved_url.'.'.$ext) ) {
          $resolved_url .= '.'.$ext;
        }
 
 		
 		
        self::$_cache[$full_url] = array($resolved_url,$ext);

        } else {
          
          unlink($resolved_url);
          
          $resolved_url = DOMPDF_LIB_DIR . "/res/broken_image.png";
          $ext = "png";
        }
        }

      }

    } else {

      $resolved_url = build_url($proto, $host, $base_path, $url);
      if ($DEBUGPNG) print 'build_url('.$proto.','.$host.','.$base_path.','.$url.')('.$resolved_url.')';

      if ( !preg_match("/.*\.(\w+)/",$url,$match) ) {
        
        if ($DEBUGPNG) print '[resolve_url exception '.$url.']';
          throw new DOMPDF_Exception("Unknown image type: $url.");
        }

        $ext = $match[1];

        
        if ($DEBUGPNG) $full_url_dbg = '(local)';

    }

    if ( !is_readable($resolved_url) || !filesize($resolved_url) ) {

      
      if ($DEBUGPNG) $full_url_dbg .= '(nocache'.$resolved_url.')';

      $_dompdf_warnings[] = "File " .$resolved_url . " is not readable or is an empty file.\n";
      $resolved_url = DOMPDF_LIB_DIR . "/res/broken_image.png";
      $ext = "png";
    }

    
    if ($DEBUGPNG) print '[resolve_url '.$url.'|'.$full_url_dbg.'|'.$resolved_url.'|'.$ext.']';

    return array($resolved_url, $ext);
  }

  
  static function clear() {
    if ( count(self::$_cache) ) {
      while ($entry = array_shift(self::$_cache)) {
        list($file, $ext) = $entry;
        
        if (DEBUGPNG) print '[clear unlink '.$file.']';
        if (!DEBUGKEEPTEMP)
          
          unlink($file);
      }
    }
  }

}
