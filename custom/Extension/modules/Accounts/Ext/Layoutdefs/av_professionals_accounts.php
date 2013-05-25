<?php
// created: 2012-12-19 13:38:18
$layout_defs["Accounts"]["subpanel_setup"]["av_professionals_accounts"] = array (
	'order' => 100,
	'module' => 'av_Professionals',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_PROFESSIONALS',
	'get_subpanel_data' => 'account_av_professionals',
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

