<?php

unset($global_control_links['training']);

$global_control_links['help'] = array(
	'linkinfo' => array($app_list_strings['moduleList']['KBDocuments'] =>'index.php?module=KBDocuments&action=index'),
	'submenu' => ''
);

$global_control_links['about'] = array(
	'linkinfo' => array($app_strings['LNK_ABOUT'] => 'http://www.protracker.com'),
	'submenu' => ''
);
?>
