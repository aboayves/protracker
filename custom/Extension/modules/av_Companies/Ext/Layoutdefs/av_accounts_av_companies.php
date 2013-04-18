<?php
// created: 2013-04-04 11:08:53
$layout_defs["av_Companies"]["subpanel_setup"]["av_accounts_av_companies"] = array (
	'order' => 100,
	'module' => 'av_Accounts',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_ACCOUNTS',
	'get_subpanel_data' => 'av_accounts_av_companies',
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

