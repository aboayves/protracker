<?php
// created: 2012-12-16 22:47:15
$layout_defs["av_Account_Types"]["subpanel_setup"]["av_accounts_av_account_types"] = array (
	'order' => 100,
	'module' => 'av_Accounts',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_ACCOUNTS',
	'get_subpanel_data' => 'av_accounts_av_account_types',
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

