<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/json_config.php');
$json_config = new json_config();

// global $app_list_strings;
// global $current_user;
// global $beanList, $beanFiles;
// global $sugar_version, $sugar_config, $db;

$xtpl = new XTemplate('modules/PreciseFP/Step1.html');
$xtpl->assign("STEP", "2");

// $admin = new Administration();
// $admin->retrieveSettings();
// $user_merge = $current_user->getPreference('precisefp_on');
// if ($user_merge != 'on' || !isset($admin->settings['system_precisefp_on']) || !$admin->settings['system_precisefp_on']){
	// $xtpl->assign("ADDIN_NOTICE", $mod_strings['LBL_ADDIN_NOTICE']);
	// $xtpl->assign("DISABLE_NEXT_BUTTON", "disabled");
// }

$xtpl->parse("main");
$xtpl->out("main");


?>
