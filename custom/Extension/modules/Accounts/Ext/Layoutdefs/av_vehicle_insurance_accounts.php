<?php
// created: 2012-12-18 22:21:23
$layout_defs["Accounts"]["subpanel_setup"]["av_vehicle_insurance_accounts"] = array (
	'order' => 100,
	'module' => 'av_Vehicle_Insurance',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_VEHICLE_INSURANCE',
	'get_subpanel_data' => 'av_vehicle_insurance_accounts',
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

