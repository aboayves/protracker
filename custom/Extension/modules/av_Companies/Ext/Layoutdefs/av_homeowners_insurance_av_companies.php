<?php
// created: 2012-12-18 22:21:16
$layout_defs["av_Companies"]["subpanel_setup"]["av_homeowners_insurance_av_companies"] = array (
	'order' => 100,
	'module' => 'av_Homeowners_Insurance',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_HOMEOWNERS_INSURANCE',
	'get_subpanel_data' => 'av_homeowners_insurance_av_companies',
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

