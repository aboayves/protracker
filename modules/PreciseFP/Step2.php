 <?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

//require_once('include/utils.php');
require_once('include/json_config.php');
$json_config = new json_config();

// global $app_strings;
// global $app_list_strings;
// global $mod_strings;
// global $current_user;
// global $theme;
// global $sugar_version, $sugar_config;

global  $sugar_config, $db;

$xtpl = new XTemplate('modules/PreciseFP/Step2.html');


$step_txt = "Step 2: ";


require_once('include/upload_file.php');

echo "hello<br/>";

// handle uploaded file
$uploadFile = new UploadFile('userfile');
if (isset($_FILES['userfile']))
{
	$uploadFile->final_move('IMPORT_PreciseFP_'.$current_user->id);
	$uploadFileName = $uploadFile->get_upload_path('IMPORT_PreciseFP_'.$current_user->id);
	$_SESSION['PRECISEFP_FILE'] = $uploadFileName;
}
else
{
	echo "UPLOAD ERROR";
	$_SESSION['PRECISEFP_FILE'] = "";
	return;
}

$precisefp_url = $uploadFile->get_url('IMPORT_PreciseFP_'.$current_user->id,'').'IMPORT_PreciseFP_'.$current_user->id."<br/>";

$pfp = simplexml_load_file($uploadFileName);

//lookup
$query="SELECT id FROM contacts WHERE id='t_contact_2747'";
$result = $db->query($query,true,"Error running query");


foreach ($pfp as $dataset):
	print_r($dataset)."<br/>";
	echo $dataset['id']."<br/>";
	echo $dataset->getName()."<br/>";
	//foreach ($contact as $dataset):
	//	echo $contact->id."<br/>";
	//endforeach;
endforeach;

	
	
	

$xtpl->assign("PRECISEFP_FILE", $_SESSION['PRECISEFP_FILE']); 
$xtpl->assign("STEP", "3");	
$xtpl->parse("main");
$xtpl->out("main");

?>
