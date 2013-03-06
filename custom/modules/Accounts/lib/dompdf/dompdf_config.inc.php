<?php
define("DOMPDF_DIR", str_replace(DIRECTORY_SEPARATOR, '/', realpath(dirname(__FILE__))));
define("DOMPDF_INC_DIR", DOMPDF_DIR . "/include");
define("DOMPDF_LIB_DIR", DOMPDF_DIR . "/lib");
if( !isset($_SERVER['DOCUMENT_ROOT']) ) {
  $path = "";
  
  if ( isset($_SERVER['SCRIPT_FILENAME']) )
    $path = $_SERVER['SCRIPT_FILENAME'];
  elseif ( isset($_SERVER['PATH_TRANSLATED']) )
    $path = str_replace('\\\\', '\\', $_SERVER['PATH_TRANSLATED']);
    
  $_SERVER['DOCUMENT_ROOT'] = str_replace( '\\', '/', substr($path, 0, 0-strlen($_SERVER['PHP_SELF'])));
}
if ( file_exists(DOMPDF_DIR . "/dompdf_config.custom.inc.php") ){
  require_once(DOMPDF_DIR . "/dompdf_config.custom.inc.php");
}
require_once(DOMPDF_INC_DIR . "/functions.inc.php");
def("DOMPDF_FONT_DIR", DOMPDF_DIR . "/lib/fonts/");
def("DOMPDF_FONT_CACHE", DOMPDF_FONT_DIR);
def("DOMPDF_TEMP_DIR", sys_get_temp_dir());
def("DOMPDF_CHROOT", realpath(DOMPDF_DIR));
def("DOMPDF_UNICODE_ENABLED", true);
if ( strpos(PHP_OS, "WIN") === false )
  def("TTF2AFM", DOMPDF_LIB_DIR ."/ttf2ufm/ttf2ufm-src/ttf2pt1");
else 
  def("TTF2AFM", "C:\\Program Files\\GnuWin32\\bin\\ttf2pt1.exe");
def("DOMPDF_PDF_BACKEND", "CPDF");
def("DOMPDF_DEFAULT_MEDIA_TYPE", "screen");
def("DOMPDF_DEFAULT_PAPER_SIZE", "letter");
def("DOMPDF_DEFAULT_FONT", "serif");
def("DOMPDF_DPI", 96);
def("DOMPDF_ENABLE_PHP", false);
def("DOMPDF_ENABLE_JAVASCRIPT", true);
def("DOMPDF_ENABLE_REMOTE", false);
def("DOMPDF_LOG_OUTPUT_FILE", DOMPDF_FONT_DIR."log.htm");
def("DOMPDF_FONT_HEIGHT_RATIO", 1.1);
def("DOMPDF_ENABLE_CSS_FLOAT", false);
function DOMPDF_autoload($class) {
  $filename = DOMPDF_INC_DIR . "/" . mb_strtolower($class) . ".cls.php";
  if ( is_file($filename) )
    require_once($filename);
}
if ( function_exists("spl_autoload_register") ) {
  $autoload = "DOMPDF_autoload";
  $funcs = spl_autoload_functions();
  if ( $funcs === false ) { 
    spl_autoload_register($autoload); 
  }
  else if ( version_compare(PHP_VERSION, '5.3', '>=') ) {
    spl_autoload_register($autoload, true, true); 
  }
  else {
    $compat = version_compare(PHP_VERSION, '5.1.2', '<=') && 
              version_compare(PHP_VERSION, '5.1.0', '>=');

    foreach ($funcs as $func) { 
      if (is_array($func)) { 
        $reflector = new ReflectionMethod($func[0], $func[1]); 
        if (!$reflector->isStatic()) { 
          throw new Exception('This function is not compatible with non-static object methods due to PHP Bug #44144.'); 
        }
        if ($compat) $func = implode('::', $func); 
      }
      
      spl_autoload_unregister($func); 
    } 
    
    
    spl_autoload_register($autoload); 
    
    
    foreach ($funcs as $func) { 
      spl_autoload_register($func); 
    }
    
    
    if ( function_exists("__autoload") ) {
      spl_autoload_register("__autoload");
    }
  }
}
else if ( !function_exists("__autoload") ) {
  
  function __autoload($class) {
    DOMPDF_autoload($class);
  }
}
mb_internal_encoding('UTF-8');
global $_dompdf_warnings;
$_dompdf_warnings = array();
global $_dompdf_show_warnings;
$_dompdf_show_warnings = false;
global $_dompdf_debug;
$_dompdf_debug = false;
global $_DOMPDF_DEBUG_TYPES;
$_DOMPDF_DEBUG_TYPES = array(); 
def('DEBUGPNG', false);
def('DEBUGKEEPTEMP', false);
def('DEBUGCSS', false);
def('DEBUG_LAYOUT', false);
def('DEBUG_LAYOUT_LINES', true);
def('DEBUG_LAYOUT_BLOCKS', true);
def('DEBUG_LAYOUT_INLINE', true);
def('DEBUG_LAYOUT_PADDINGBOX', true);
