<?php
// created: 2012-12-19 15:09:50
$layout_defs["Accounts"]["subpanel_setup"]["av_suitability_accounts"] = array (
	'order' => 100,
	'module' => 'av_Suitability',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_SUITABILITY',
	'get_subpanel_data' => 'account_av_suitability',
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

