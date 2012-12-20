<?php
// created: 2012-12-17 22:02:23
$layout_defs["av_Offices"]["subpanel_setup"]["account_av_offices"] = array (
	'order' => 100,
	'module' => 'Accounts',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_ACCOUNT',
	'get_subpanel_data' => 'account_av_offices',
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

