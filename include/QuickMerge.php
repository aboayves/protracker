<?php
require_once('../config.php');

// build query for each supported module type
switch ($_GET['module']) {
  case 'Contacts':
    $sql = "SELECT * FROM contacts where id='".$_GET['id']."'";
    break;
  case 'Accounts':
    $sql = "SELECT * FROM accounts where id='".$_GET['id']."'";
    break;
  default:
    exit;
}

// connect to sugar db
$cn = mysql_connect($sugar_config['dbconfig']['db_host_name'], 
                    $sugar_config['dbconfig']['db_user_name'], 
                    $sugar_config['dbconfig']['db_password']);
$db = mysql_select_db($sugar_config['dbconfig']['db_name'],$cn);
$result = mysql_query($sql, $cn);

// output file
$file_name = trim(com_create_guid(), '{}');
$file_name = $file_name.".docx";
$output_path = "../temp/".$file_name;

// load PHP Word library
require_once('PHPWord.php');
$PHPWord = new PHPWord();

// select template
$template_path = "PHPWord/Templates/RonEnvelopeTemplate.docx";
$document = $PHPWord->loadTemplate($template_path);

// populate template
while ($row = mysql_fetch_assoc($result)) {
  foreach($row as $key => $value) {
      //echo"$key = $value <br />";
      $document->setValue($key, $value);
   }
}
    
// output merged doc    
$document->save($output_path);
header('Location: '.$output_path);    
     
?>