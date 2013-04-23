<?php

//unset($global_control_links['training']);

$global_control_links['training'] = array(
	'linkinfo' => array('Support' =>'https://protracker.zendesk.com/anonymous_requests/new'),
	'submenu' => ''
);

$global_control_links['help'] = array(
	'linkinfo' => array($app_list_strings['moduleList']['KBDocuments'] =>'https://protracker.zendesk.com/categories/20101816'),
	'submenu' => ''
);

$global_control_links['about'] = array(
	'linkinfo' => array($app_strings['LNK_ABOUT'] => 'index.php?module=Home&action=about'),
	'submenu' => ''
);
?>
