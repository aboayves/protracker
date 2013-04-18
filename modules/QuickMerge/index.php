<?php
// http://192.168.1.59/protracker/index.php?entryPoint=QuickMerge&module=Contacts&id=t_contact_8894&template=contact_report.docx
// this is a registered entry point
// access via index.php?entryPoint=QuickMerge&module=MODULE_NAME&id=ID
// it changes context from /include to root /

// merge inputs
$module_name = $_GET['module'];
$id = $_GET['id'];
$template = $_GET['template'];

// validate inputs
if (strlen($template)==0) {
	die('parameter missing: template');
}

// get bean
require_once('data/BeanFactory.php');
$bean = BeanFactory::getBean($module_name, $id);

// report on bean contents for debugging
//echo print_r($bean->field_name_map);
// echo "<TABLE border='1'";
// echo "<TR><TH>name</TH><TH>vname</TH><TH>type</TH><TH>label</TH><TH>value</TH></TR>";
// foreach($bean->field_name_map as $field) {
	// switch ($field['type']) {
		// case 'link':
			// break;
		// default:
			////translate($field['vname'],$bean->name) does not return expected label values, it is incomplete, reference mod-strings instead  
			// echo "<TR><TD>".$field['name']."</TD><TD>".$field['vname']."</TD><TD>".$field['type']."</TD><TD>".trim($GLOBALS['mod_strings'][$field['vname']],':')."</TD><TD>".$bean->$field['name']."</TD></TR>";
	// }
// }
// echo "</TABLE>";
// exit;

// load PHP Word library
require_once('include/PHPWord.php');
$PHPWord = new PHPWord();

// select template
$template_path = "include/PHPWord/Templates/";
$document = $PHPWord->loadTemplate($template_path.$template);
//echo $template_path."</BR>";

foreach($bean->field_name_map as $field) {
	switch ($field['type']) {
		case 'link':
			break;
		case 'id':
			break;
		default:
			
			$lbl = trim($GLOBALS['mod_strings'][$field['vname']],':');
			$fld_name = $field['name'];
			$fld_value = $bean->$field['name'];
			
			//echo $field['name']." === ".$bean->$field['name']."</BR>";
			// db field replace
			$document->setValue($fld_name, $fld_value);
			
			// label field replace
			$document->setValue($lbl, $fld_value);
			$document->setValue(strtoupper($lbl), $fld_value);
			$document->setValue(strtolower($lbl), $fld_value);
	}
}

// output file
$file_name = trim(com_create_guid(), '{}');
$file_name = $file_name.".docx";
$output_path = "include/PHPWord/Temp/".$file_name;

// output merged doc    
$document->save($output_path);
header('Location: '.$output_path);    
     
?>