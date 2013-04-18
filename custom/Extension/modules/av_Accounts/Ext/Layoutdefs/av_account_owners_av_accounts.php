<?php
// created: 2012-12-17 11:48:55
$layout_defs["av_Accounts"]["subpanel_setup"]["av_account_owners_av_accounts"] = array (
	'order' => 100,
	'module' => 'av_Account_Owners',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_ACCOUNT_OWNERS',
	'get_subpanel_data' => 'av_account_owners_av_accounts',
	'top_buttons' => 
	array (
		0 => 
		array (
			'widget_class' => 'SubPanelTopButtonQuickCreate',
		),
		1 => 
		array (
			'widget_class' => 'SubPanelTopSelectButton',
			'mode' => 'MultiSelect',
		),
	),
);

