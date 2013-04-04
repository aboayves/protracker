<?php
// created: 2013-04-04 11:56:41
$layout_defs["av_Companies"]["subpanel_setup"]["account_av_companies"] = array (
	'order' => 100,
	'module' => 'Accounts',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_ACCOUNT',
	'get_subpanel_data' => 'account_av_companies',
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

