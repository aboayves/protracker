<?php
// created: 2012-12-18 22:21:13
$layout_defs["Accounts"]["subpanel_setup"]["av_disability_insurance_accounts"] = array (
	'order' => 100,
	'module' => 'av_Disability_Insurance',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_DISABILITY_INSURANCE',
	'get_subpanel_data' => 'av_disability_insurance_accounts',
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

