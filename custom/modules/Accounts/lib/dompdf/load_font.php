#!/usr/bin/php
<?php
require_once("dompdf_config.inc.php");
define("_TTF2AFM", escapeshellarg(TTF2AFM) . " -a -GAef -OW ");
if ( !file_exists(TTF2AFM) ) {
  die("Unable to locate the ttf2afm / ttf2pt1 executable (checked " . TTF2AFM . ").\n");
}
function usage() {
  echo <<<EOD
Usage: {$_SERVER["argv"][0]} font_family [n_file [b_file] [i_file] [bi_file]]
font_family:      the name of the font, e.g. Verdana, 'Times New Roman',
                  monospace, sans-serif. If it equals to "system_fonts", 
                  all the system fonts will be installed.
n_file:           the .pfb or .ttf file for the normal, non-bold, non-italic
                  face of the font.
{b|i|bi}_file:    the files for each of the respective (bold, italic,
                  bold-italic) faces.
If the optional b|i|bi files are not specified, load_font.php will search
the directory containing normal font file (n_file) for additional files that
it thinks might be the correct ones (e.g. that end in _Bold or b or B).  If
it finds the files they will also be processed.  All files will be
automatically copied to the DOMPDF font directory, and afm files will be
generated using ttf2afm.
Examples:
./load_font.php silkscreen /usr/share/fonts/truetype/slkscr.ttf
./load_font.php 'Times New Roman' /mnt/c_drive/WINDOWS/Fonts/times.ttf
EOD;
}
if ( $_SERVER["argc"] < 3 && $_SERVER["argv"][1] != "system_fonts" ) {
  usage();
  die();
}
function install_font_family($fontname, $normal, $bold = null, $italic = null, $bold_italic = null) {
  
  if ( !is_readable($normal) )
    throw new DOMPDF_Exception("Unable to read '$normal'.");
  $dir = dirname($normal);
  $basename = basename($normal);
  $last_dot = strrpos($basename, '.');
  if ($last_dot !== false) {
    $file = substr($basename, 0, $last_dot);
    $ext = strtolower(substr($basename, $last_dot));
  } else {
    $file = $basename;
    $ext = '';
  }
  
  $path = "$dir/$file";
  
  $patterns = array(
    "bold"        => array("_Bold", "b", "B", "bd", "BD"),
    "italic"      => array("_Italic", "i", "I"),
    "bold_italic" => array("_Bold_Italic", "bi", "BI", "ib", "IB"),
  );
  
  foreach ($patterns as $type => $_patterns) {
    if ( !isset($$type) || !is_readable($$type) ) {
      foreach($_patterns as $_pattern) {
        if ( is_readable("$path$_pattern$ext") ) {
          $$type = "$path$_pattern$ext";
          break;
        }
      }
      if ( is_null($$type) )
        echo ("Unable to find $type face file.\n");
    }
  }
  $fonts = compact("normal", "bold", "italic", "bold_italic");
  $entry = array();
  if ( $ext === ".pfb" || $ext === ".ttf" || $ext === ".otf" ) {
    
    foreach ($fonts as $var => $src) {
      if ( is_null($src) ) {
        $entry[$var] = DOMPDF_FONT_DIR . basename($normal);
        continue;
      }
      
      if ( !is_readable($src) )
        throw new DOMPDF_Exception("Requested font '$pathname' is not readable");
      $dest = DOMPDF_FONT_DIR . basename($src);
      if ( !is_writeable(dirname($dest)) )
        throw new DOMPDF_Exception("Unable to write to destination '$dest'.");
      echo "Copying $src to $dest...\n";
      if ( !copy($src, $dest) )
        throw new DOMPDF_Exception("Unable to copy '$src' to '" . DOMPDF_FONT_DIR . "$dest'.");
      $entry[$var] = $dest;
    }
  } else
    throw new DOMPDF_Exception("Unable to process fonts of type '$ext'.");
  
  if ( $ext === ".ttf" || $ext === ".otf" ) {
    foreach ($fonts as $var => $font) {
      if ( is_null($font) ) {
        $entry[$var] = DOMPDF_FONT_DIR . mb_substr(basename($normal), 0, -4);
        continue;
      }
      
      $dest = DOMPDF_FONT_DIR . mb_substr(basename($font), 0 , -4);
      $stdout = ( ( strpos(PHP_OS, "WIN") === false ) ? " >/dev/null" : " 2>&1" );
      $command = _TTF2AFM . " " . escapeshellarg($font) . " " . escapeshellarg($dest) . $stdout;
      echo "Generating .afm for $font...\n";
      
      exec( $command, $output, $ret );
      $entry[$var] = $dest;
    }
  }
  
  
  Font_Metrics::set_font_family($fontname, $entry);
  
  Font_Metrics::save_font_families();
}
if ( $_SERVER["argv"][1] === "system_fonts" ) {
  $fonts = Font_Metrics::get_system_fonts();
  var_dump($fonts);
  foreach ( $fonts as $family => $files ) {
    echo " >> Installing '$family'... \n";
    
    if ( !isset($files["normal"]) ) {
      echo "No 'normal' style font file\n";
    }
    else {
      install_font_family( $family, @$files["normal"], @$files["bold"], @$files["italic"], @$files["bold_italic"]);
      echo "Done !\n";
    }
    
    echo "\n";
  }
}
else {
  call_user_func_array("install_font_family", array_slice($_SERVER["argv"], 1));
}