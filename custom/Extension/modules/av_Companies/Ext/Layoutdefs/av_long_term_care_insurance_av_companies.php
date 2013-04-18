<?php
// created: 2012-12-18 22:21:20
$layout_defs["av_Companies"]["subpanel_setup"]["av_long_term_care_insurance_av_companies"] = array (
	'order' => 100,
	'module' => 'av_Long_Term_Care_Insurance',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_LONG_TERM_CARE_INSURANCE',
	'get_subpanel_data' => 'av_long_term_care_insurance_av_companies',
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

