<?php
// created: 2012-12-19 10:33:00
$layout_defs["Accounts"]["subpanel_setup"]["av_medicare_accounts"] = array (
	'order' => 100,
	'module' => 'av_Medicare',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_MEDICARE',
	'get_subpanel_data' => 'account_av_medicare',
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

