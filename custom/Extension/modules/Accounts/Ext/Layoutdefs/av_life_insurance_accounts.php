<?php
// created: 2013-01-31 23:34:30
$layout_defs["Accounts"]["subpanel_setup"]["av_life_insurance_accounts"] = array (
	'order' => 100,
	'module' => 'av_Life_Insurance',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_LIFE_INSURANCE',
	'get_subpanel_data' => 'account_av_life_insurance',
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

