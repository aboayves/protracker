<?php
// created: 2012-12-18 21:28:20
$layout_defs["Accounts"]["subpanel_setup"]["av_wills_accounts"] = array (
	'order' => 100,
	'module' => 'av_Wills',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_WILLS',
	'get_subpanel_data' => 'av_wills_accounts',
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

