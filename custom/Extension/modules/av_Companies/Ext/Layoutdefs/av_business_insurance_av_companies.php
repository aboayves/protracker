<?php
// created: 2013-03-08 12:02:15
$layout_defs["av_Companies"]["subpanel_setup"]["av_business_insurance_av_companies"] = array (
	'order' => 100,
	'module' => 'av_Business_Insurance',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_BUSINESS_INSURANCE',
	'get_subpanel_data' => 'av_business_insurance_av_companies',
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

