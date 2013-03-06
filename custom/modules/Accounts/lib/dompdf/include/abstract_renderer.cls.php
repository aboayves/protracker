<?php





abstract class Abstract_Renderer {

  
  protected $_canvas;

  
  protected $_dompdf;
  
  
  function __construct(DOMPDF $dompdf) {
    $this->_dompdf = $dompdf;
    $this->_canvas = $dompdf->get_canvas();
  }
  
  
  abstract function render(Frame $frame);

  

  
  protected function _background_image($url, $x, $y, $width, $height, $style) {
    $sheet = $style->get_stylesheet();

    
    if ( $width == 0 || $height == 0 )
      return;

    
    if (DEBUGPNG) print '[_background_image '.$url.']';

    list($img, $ext) = Image_Cache::resolve_url($url,
                                                $sheet->get_protocol(),
                                                $sheet->get_host(),
                                                $sheet->get_base_path());

    
    if ( $img === DOMPDF_LIB_DIR . "/res/broken_image.png" )
      return;

    
    
    
    
    

    list($img_w, $img_h) = dompdf_getimagesize($img);
    if (!isset($img_w) || $img_w == 0 || !isset($img_h) || $img_h == 0) {
      return;
    }

    $repeat = $style->background_repeat;
    $bg_color = $style->background_color;

    
    
    $bg_width = round((float)($width * DOMPDF_DPI) / 72);
    $bg_height = round((float)($height * DOMPDF_DPI) / 72);

    

    list($bg_x, $bg_y) = $style->background_position;

    if ( is_percent($bg_x) ) {
      
      
      $p = ((float)$bg_x)/100.0;
      $x1 = $p * $img_w;
      $x2 = $p * $bg_width;

      $bg_x = round($x2 - $x1);
    } else {
      $bg_x = round((float)($style->length_in_pt($bg_x)*DOMPDF_DPI) / 72);
    }

    if ( is_percent($bg_y) ) {
      
      
      $p = ((float)$bg_y)/100.0;
      $y1 = $p * $img_h;
      $y2 = $p * $bg_height;

      $bg_y = round($y2 - $y1);
    } else {
      $bg_y = round((float)($style->length_in_pt($bg_y)*DOMPDF_DPI) / 72);
    }

    
    
    
    

    if ( $repeat !== "repeat" && $repeat !== "repeat-x" ) {
      
      if ($bg_x < 0) {
        $bg_width = $img_w + $bg_x;
      } else {
        $x += ($bg_x * 72)/DOMPDF_DPI;
        $bg_width = $bg_width - $bg_x;
        if ($bg_width > $img_w) {
          $bg_width = $img_w;
        }
        $bg_x = 0;
      }
      if ($bg_width <= 0) {
          return;
      }
      $width = (float)($bg_width * 72)/DOMPDF_DPI;
    } else {
      
      if ($bg_x < 0) {
        $bg_x = - ((-$bg_x) % $img_w);
      } else {
        $bg_x = $bg_x % $img_w;
        if ($bg_x > 0) {
          $bg_x -= $img_w;
        }
      }
    }

    if ( $repeat !== "repeat" && $repeat !== "repeat-y" ) {
      
      if ($bg_y < 0) {
        $bg_height = $img_h + $bg_y;
      } else {
        $y += ($bg_y * 72)/DOMPDF_DPI;
        $bg_height = $bg_height - $bg_y;
        if ($bg_height > $img_h) {
          $bg_height = $img_h;
        }
        $bg_y = 0;
      }
      if ($bg_height <= 0) {
          return;
      }
      $height = (float)($bg_height * 72)/DOMPDF_DPI;
    } else {
      
      if ($bg_y < 0) {
        $bg_y = - ((-$bg_y) % $img_h);
      } else {
        $bg_y = $bg_y % $img_h;
        if ($bg_y > 0) {
          $bg_y -= $img_h;
        }
      }
    }

    
    if ( $repeat === "repeat" && $bg_y <= 0 && $img_h+$bg_y >= $bg_height ) {
      $repeat = "repeat-x";
    }
    if ( $repeat === "repeat" && $bg_x <= 0 && $img_w+$bg_x >= $bg_width ) {
      $repeat = "repeat-y";
    }
    if ( ($repeat === "repeat-x" && $bg_x <= 0 && $img_w+$bg_x >= $bg_width) ||
         ($repeat === "repeat-y" && $bg_y <= 0 && $img_h+$bg_y >= $bg_height) ) {
      $repeat = "no-repeat";
    }

    
    
    
    

    $filedummy = $img;

    
    
    $filedummy .= '_'.$bg_width.'_'.$bg_height.'_'.$bg_x.'_'.$bg_y.'_'.$repeat;
    
    

    
    
    
    if ( method_exists( $this->_canvas, "get_cpdf" ) &&
         method_exists( $this->_canvas->get_cpdf(), "addImagePng" ) &&
         method_exists( $this->_canvas->get_cpdf(), "image_iscached" ) &&
         $this->_canvas->get_cpdf()->image_iscached($filedummy) ) {
       $bg = null;

      
      
    } 
    
    else {

    
    $bg = imagecreatetruecolor($bg_width, $bg_height);
    
    
    

    switch (strtolower($ext)) {
      case "png":
        $src = imagecreatefrompng($img);
        break;
  
      case "jpg":
      case "jpeg":
        $src = imagecreatefromjpeg($img);
        break;
  
      case "gif":
        $src = imagecreatefromgif($img);
        break;
        
      case "bmp":
        $src = imagecreatefrombmp($img);
        break;
  
      default: return; 
    }

    if ($src == null) {
      return;
    }

    
    
    
    
    
    $ti = imagecolortransparent($src);
    
    if ($ti >= 0) {
      $tc = imagecolorsforindex($src,$ti);
      $ti = imagecolorallocate($bg,$tc['red'],$tc['green'],$tc['blue']);
      imagefill($bg,0,0,$ti);
      imagecolortransparent($bg, $ti);
    }

    
    
    if ( $bg_x < 0 ) {
      $dst_x = 0;
      $src_x = -$bg_x;
    } else {
      $src_x = 0;
      $dst_x = $bg_x;
    }

    if ( $bg_y < 0 ) {
      $dst_y = 0;
      $src_y = -$bg_y;
    } else {
      $src_y = 0;
      $dst_y = $bg_y;
    }

    
    
    $start_x = $bg_x;
    $start_y = $bg_y;

    
    if ( $repeat === "no-repeat" ) {

      
      imagecopy($bg, $src, $dst_x, $dst_y, $src_x, $src_y, $img_w, $img_h);

    } else if ( $repeat === "repeat-x" ) {

      for ( $bg_x = $start_x; $bg_x < $bg_width; $bg_x += $img_w ) {
        if ( $bg_x < 0 ) {
          $dst_x = 0;
          $src_x = -$bg_x;
          $w = $img_w + $bg_x;
        } else {
          $dst_x = $bg_x;
          $src_x = 0;
          $w = $img_w;
        }
        imagecopy($bg, $src, $dst_x, $dst_y, $src_x, $src_y, $w, $img_h);
      }

    } else if ( $repeat === "repeat-y" ) {

      for ( $bg_y = $start_y; $bg_y < $bg_height; $bg_y += $img_h ) {
        if ( $bg_y < 0 ) {
          $dst_y = 0;
          $src_y = -$bg_y;
          $h = $img_h + $bg_y;
        } else {
          $dst_y = $bg_y;
          $src_y = 0;
          $h = $img_h;
        }
        imagecopy($bg, $src, $dst_x, $dst_y, $src_x, $src_y, $img_w, $h);

      }

    } else if ( $repeat === "repeat" ) {

      for ( $bg_y = $start_y; $bg_y < $bg_height; $bg_y += $img_h ) {
        for ( $bg_x = $start_x; $bg_x < $bg_width; $bg_x += $img_w ) {

          if ( $bg_x < 0 ) {
            $dst_x = 0;
            $src_x = -$bg_x;
            $w = $img_w + $bg_x;
          } else {
            $dst_x = $bg_x;
            $src_x = 0;
            $w = $img_w;
          }

          if ( $bg_y < 0 ) {
            $dst_y = 0;
            $src_y = -$bg_y;
            $h = $img_h + $bg_y;
          } else {
            $dst_y = $bg_y;
            $src_y = 0;
            $h = $img_h;
          }
          imagecopy($bg, $src, $dst_x, $dst_y, $src_x, $src_y, $w, $h);
        }
      }
    }
    
    else {
      print 'Unknown repeat!';
    }
    
    imagedestroy($src);

    } 

    
    
    
    
    
    
    
    
    
    
    
    if ( method_exists( $this->_canvas, "get_cpdf" ) && 
         method_exists( $this->_canvas->get_cpdf(), "addImagePng" ) ) {
      
      $this->_canvas->get_cpdf()->addImagePng($filedummy, $x, $this->_canvas->get_height() - $y - $height, $width, $height, $bg);
    } 
    
    else {
      $tmp_file = tempnam(DOMPDF_TEMP_DIR, "bg_dompdf_img_").'.png';
      
      if (DEBUGPNG) print '[_background_image '.$tmp_file.']';

      imagepng($bg, $tmp_file);
      $this->_canvas->image($tmp_file, "png", $x, $y, $width, $height);
      imagedestroy($bg);

      
      if (DEBUGPNG) print '[_background_image unlink '.$tmp_file.']';

      if (!DEBUGKEEPTEMP)
        unlink($tmp_file);
    }
  }
  
  protected function _get_dash_pattern($style, $width) {
    $pattern = array();
    
    switch ($style) {
      default:
      
      case "none": break;
      
      case "dotted": 
        if ( $width < 2 )
          $pattern = array($width, 2);
        else
          $pattern = array($width);
      break;
      
      case "dashed": 
        $pattern = array(3 * $width);
      break;
    }
    
    return $pattern;
  }

  protected function _border_none($x, $y, $length, $color, $widths, $side, $corner_style = "bevel") {
    return;
  }
  
  
  protected function _border_dotted($x, $y, $length, $color, $widths, $side, $corner_style = "bevel") {
    list($top, $right, $bottom, $left) = $widths;

    $pattern = $this->_get_dash_pattern("dotted", $$side);
    
    switch ($side) {

    case "top":
      $delta = $top / 2;
    case "bottom":
      $delta = isset($delta) ? $delta : -$bottom / 2;
      $this->_canvas->line($x, $y + $delta, $x + $length, $y + $delta, $color, $$side, $pattern);
      break;

    case "left":
      $delta = $left / 2;
    case "right":
      $delta = isset($delta) ? $delta : - $right / 2;
      $this->_canvas->line($x + $delta, $y, $x + $delta, $y + $length, $color, $$side, $pattern);
      break;

    default:
      return;

    }
  }

  
  protected function _border_dashed($x, $y, $length, $color, $widths, $side, $corner_style = "bevel") {
    list($top, $right, $bottom, $left) = $widths;

    $pattern = $this->_get_dash_pattern("dashed", $$side);
    
    switch ($side) {

    case "top":
      $delta = $top / 2;
    case "bottom":
      $delta = isset($delta) ? $delta : -$bottom / 2;
      $this->_canvas->line($x, $y + $delta, $x + $length, $y + $delta, $color, $$side, $pattern);
      break;

    case "left":
      $delta = $left / 2;
    case "right":
      $delta = isset($delta) ? $delta : - $right / 2;
      $this->_canvas->line($x + $delta, $y, $x + $delta, $y + $length, $color, $$side, $pattern);
      break;

    default:
      return;
    }
    
  }

  
  protected function _border_solid($x, $y, $length, $color, $widths, $side, $corner_style = "bevel") {
    list($top, $right, $bottom, $left) = $widths;

    
    switch ($side) {

    case "top":
      if ( $corner_style === "bevel" ) {
        
        $points = array($x, $y,
                        $x + $length, $y,
                        $x + $length - $right, $y + $top,
                        $x + $left, $y + $top);
        $this->_canvas->polygon($points, $color, null, null, true);
      } else
        $this->_canvas->filled_rectangle($x, $y, $length, $top, $color);
      
      break;
      
    case "bottom":
      if ( $corner_style === "bevel" ) {
        $points = array($x, $y,
                        $x + $length, $y,
                        $x + $length - $right, $y - $bottom,
                        $x + $left, $y - $bottom);
        $this->_canvas->polygon($points, $color, null, null, true);
      } else
        $this->_canvas->filled_rectangle($x, $y - $bottom, $length, $bottom, $color);
      
      break;
      
    case "left":
      if ( $corner_style === "bevel" ) {
        $points = array($x, $y,
                        $x, $y + $length,
                        $x + $left, $y + $length - $bottom,
                        $x + $left, $y + $top);
        $this->_canvas->polygon($points, $color, null, null, true);
      } else
        $this->_canvas->filled_rectangle($x, $y, $left, $length, $color);
      
      break;
      
    case "right":
      if ( $corner_style === "bevel" ) {
        $points = array($x, $y,
                        $x, $y + $length,
                        $x - $right, $y + $length - $bottom,
                        $x - $right, $y + $top);
        $this->_canvas->polygon($points, $color, null, null, true);
      } else
        $this->_canvas->filled_rectangle($x - $right, $y, $right, $length, $color);

      break;

    default:
      return;

    }
        
  }


  protected function _border_double($x, $y, $length, $color, $widths, $side, $corner_style = "bevel") {
    list($top, $right, $bottom, $left) = $widths;
    
    $line_width = $$side / 4;
    
    
    
    
    switch ($side) {

    case "top":
      if ( $corner_style === "bevel" ) {
        $left_line_width = $left / 4;
        $right_line_width = $right / 4;
        
        $points = array($x, $y,
                        $x + $length, $y,
                        $x + $length - $right_line_width, $y + $line_width,
                        $x + $left_line_width, $y + $line_width,);
        $this->_canvas->polygon($points, $color, null, null, true);
        
        $points = array($x + $left - $left_line_width, $y + $top - $line_width,
                        $x + $length - $right + $right_line_width, $y + $top - $line_width,
                        $x + $length - $right, $y + $top,
                        $x + $left, $y + $top);
        $this->_canvas->polygon($points, $color, null, null, true);

      } else {
        $this->_canvas->filled_rectangle($x, $y, $length, $line_width, $color);
        $this->_canvas->filled_rectangle($x, $y + $top - $line_width, $length, $line_width, $color);

      }
      break;
      
    case "bottom":
      if ( $corner_style === "bevel" ) {
        $left_line_width = $left / 4;
        $right_line_width = $right / 4;
        
        $points = array($x, $y,
                        $x + $length, $y,
                        $x + $length - $right_line_width, $y - $line_width,
                        $x + $left_line_width, $y - $line_width);
        $this->_canvas->polygon($points, $color, null, null, true);
        
        $points = array($x + $left - $left_line_width, $y - $bottom + $line_width,
                        $x + $length - $right + $right_line_width, $y - $bottom + $line_width,
                        $x + $length - $right, $y - $bottom,
                        $x + $left, $y - $bottom);
        $this->_canvas->polygon($points, $color, null, null, true);

      } else {
        $this->_canvas->filled_rectangle($x, $y - $line_width, $length, $line_width, $color);
        $this->_canvas->filled_rectangle($x, $y - $bottom, $length, $line_width, $color);
      }
          
      break;

    case "left":
      if ( $corner_style === "bevel" ) {
        $top_line_width = $top / 4;
        $bottom_line_width = $bottom / 4;
        
        $points = array($x, $y,
                        $x, $y + $length,
                        $x + $line_width, $y + $length - $bottom_line_width,
                        $x + $line_width, $y + $top_line_width);
        $this->_canvas->polygon($points, $color, null, null, true);

        $points = array($x + $left - $line_width, $y + $top - $top_line_width,
                        $x + $left - $line_width, $y + $length - $bottom + $bottom_line_width,
                        $x + $left, $y + $length - $bottom,
                        $x + $left, $y + $top);
        $this->_canvas->polygon($points, $color, null, null, true);

      } else {
        $this->_canvas->filled_rectangle($x, $y, $line_width, $length, $color);
        $this->_canvas->filled_rectangle($x + $left - $line_width, $y, $line_width, $length, $color);
      }
      
      break;
                      
    case "right":
      if ( $corner_style === "bevel" ) {
        $top_line_width = $top / 4;
        $bottom_line_width = $bottom / 4;
        
      
        $points = array($x, $y,
                      $x, $y + $length,
                        $x - $line_width, $y + $length - $bottom_line_width,
                        $x - $line_width, $y + $top_line_width);
        $this->_canvas->polygon($points, $color, null, null, true);
        
        $points = array($x - $right + $line_width, $y + $top - $top_line_width,
                        $x - $right + $line_width, $y + $length - $bottom + $bottom_line_width,
                        $x - $right, $y + $length - $bottom,
                        $x - $right, $y + $top);
        $this->_canvas->polygon($points, $color, null, null, true);

      } else {
        $this->_canvas->filled_rectangle($x - $line_width, $y, $line_width, $length, $color);
        $this->_canvas->filled_rectangle($x - $right, $y, $line_width, $length, $color);
      }
      
      break;

    default:
      return;

    }
        
  }

  protected function _border_groove($x, $y, $length, $color, $widths, $side, $corner_style = "bevel") {
    list($top, $right, $bottom, $left) = $widths;
      
    $half_widths = array($top / 2, $right / 2, $bottom / 2, $left / 2);
    
    $this->_border_inset($x, $y, $length, $color, $half_widths, $side);

    switch ($side) {

    case "top":
      $x += $left / 2;
      $y += $top / 2;
      $length -= $left / 2 + $right / 2;
      break;

    case "bottom":
      $x += $left / 2;
      $y -= $bottom / 2;
      $length -= $left / 2 + $right / 2;
      break;

    case "left":
      $x += $left / 2;
      $y += $top / 2;
      $length -= $top / 2 + $bottom / 2;
      break;

    case "right":
      $x -= $right / 2;
      $y += $top / 2;
      $length -= $top / 2 + $bottom / 2;
      break;

    default:
      return;

    }

    $this->_border_outset($x, $y, $length, $color, $half_widths, $side);
    
  }
  
  protected function _border_ridge($x, $y, $length, $color, $widths, $side, $corner_style = "bevel") {
    list($top, $right, $bottom, $left) = $widths;
     
    $half_widths = array($top / 2, $right / 2, $bottom / 2, $left / 2);
    
    $this->_border_outset($x, $y, $length, $color, $half_widths, $side);

    switch ($side) {

    case "top":
      $x += $left / 2;
      $y += $top / 2;
      $length -= $left / 2 + $right / 2;
      break;

    case "bottom":
      $x += $left / 2;
      $y -= $bottom / 2;
      $length -= $left / 2 + $right / 2;
      break;

    case "left":
      $x += $left / 2;
      $y += $top / 2;
      $length -= $top / 2 + $bottom / 2;
      break;

    case "right":
      $x -= $right / 2;
      $y += $top / 2;
      $length -= $top / 2 + $bottom / 2;
      break;

    default:
      return;

    }

    $this->_border_inset($x, $y, $length, $color, $half_widths, $side);

  }

  protected function _tint($c) {
    if ( !is_numeric($c) )
      return $c;
    
    return min(1, $c + 0.16);
  }

  protected function _shade($c) {
    if ( !is_numeric($c) )
      return $c;
    
    return max(0, $c - 0.33);
  }

  protected function _border_inset($x, $y, $length, $color, $widths, $side, $corner_style = "bevel") {
    list($top, $right, $bottom, $left) = $widths;
    
    switch ($side) {

    case "top":
    case "left":
      $shade = array_map(array($this, "_shade"), $color);
      $this->_border_solid($x, $y, $length, $shade, $widths, $side);
      break;

    case "bottom":
    case "right":
      $tint = array_map(array($this, "_tint"), $color);
      $this->_border_solid($x, $y, $length, $tint, $widths, $side);
      break;

    default:
      return;
    }
  }
  
  protected function _border_outset($x, $y, $length, $color, $widths, $side, $corner_style = "bevel") {
    list($top, $right, $bottom, $left) = $widths;
    
    switch ($side) {
    case "top":
    case "left":
      $tint = array_map(array($this, "_tint"), $color);
      $this->_border_solid($x, $y, $length, $tint, $widths, $side);
      break;

    case "bottom":
    case "right":
      $shade = array_map(array($this, "_shade"), $color);
      $this->_border_solid($x, $y, $length, $shade, $widths, $side);
      break;

    default:
      return;

    }
  }
  
  protected function _set_opacity($opacity) {
    if ( is_numeric($opacity) && $opacity <= 1.0 && $opacity >= 0.0 ) {
      $this->_canvas->set_opacity( $opacity );
    }
  }
  
  protected function _debug_layout($box, $color = "red", $style = array()) {
    $this->_canvas->rectangle($box[0], $box[1], $box[2], $box[3], CSS_Color::parse($color), 0.1, $style);
  }
  
}
