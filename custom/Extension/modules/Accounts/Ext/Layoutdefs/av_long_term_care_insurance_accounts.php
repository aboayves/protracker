<?php
// created: 2012-12-18 22:21:20
$layout_defs["Accounts"]["subpanel_setup"]["av_long_term_care_insurance_accounts"] = array (
	'order' => 100,
	'module' => 'av_Long_Term_Care_Insurance',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_LONG_TERM_CARE_INSURANCE',
	'get_subpanel_data' => 'account_av_long_term_care_insurance',
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

