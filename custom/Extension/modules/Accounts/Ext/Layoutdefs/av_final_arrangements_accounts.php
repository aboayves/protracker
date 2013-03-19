<?php
// created: 2012-12-18 21:28:21
$layout_defs["Accounts"]["subpanel_setup"]["av_final_arrangements_accounts"] = array (
	'order' => 100,
	'module' => 'av_Final_Arrangements',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_FINAL_ARRANGEMENTS',
	'get_subpanel_data' => 'av_final_arrangements_accounts',
	'top_buttons' => 
	array (
		0 => 
		array (
			'widget_class' => 'SubPanelTopButtonQuickCreateCustom',
		),
		1 => 
		array (
			'widget_class' => 'SubPanelTopSelectButton',
			'mode' => 'MultiSelect',
		),
	),
);

