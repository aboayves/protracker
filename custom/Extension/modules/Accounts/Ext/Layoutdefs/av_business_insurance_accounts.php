<?php
// created: 2012-12-18 22:21:12
$layout_defs["Accounts"]["subpanel_setup"]["av_business_insurance_accounts"] = array (
	'order' => 100,
	'module' => 'av_Business_Insurance',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_BUSINESS_INSURANCE',
	'get_subpanel_data' => 'av_business_insurance_accounts',
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

