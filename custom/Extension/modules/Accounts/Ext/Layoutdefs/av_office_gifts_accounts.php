<?php
// created: 2012-12-19 13:59:36
$layout_defs["Accounts"]["subpanel_setup"]["av_office_gifts_accounts"] = array (
	'order' => 100,
	'module' => 'av_Office_Gifts',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_OFFICE_GIFTS',
	'get_subpanel_data' => 'av_office_gifts_accounts',
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

