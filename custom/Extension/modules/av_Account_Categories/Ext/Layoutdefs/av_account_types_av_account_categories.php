<?php
// created: 2012-12-13 23:48:54
$layout_defs["av_Account_Categories"]["subpanel_setup"]["av_account_types_av_account_categories"] = array (
	'order' => 100,
	'module' => 'av_Account_Types',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_ACCOUNT_TYPES',
	'get_subpanel_data' => 'av_account_types_av_account_categories',
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

