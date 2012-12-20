<?php
// created: 2012-12-18 22:21:14
$layout_defs["Accounts"]["subpanel_setup"]["av_health_insurance_accounts"] = array (
	'order' => 100,
	'module' => 'av_Health_Insurance',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_HEALTH_INSURANCE',
	'get_subpanel_data' => 'av_health_insurance_accounts',
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

