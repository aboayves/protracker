<?php
// created: 2012-12-16 22:47:15
$layout_defs["Account"]["subpanel_setup"]["av_accounts_account"] = array (
	'order' => 100,
	'module' => 'av_Accounts',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_ACCOUNTS',
	'get_subpanel_data' => 'av_accounts_account',
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

