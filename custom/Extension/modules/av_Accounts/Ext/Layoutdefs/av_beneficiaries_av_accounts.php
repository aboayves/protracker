<?php
// created: 2012-12-19 13:38:17
$layout_defs["av_Accounts"]["subpanel_setup"]["av_beneficiaries_av_accounts"] = array (
	'order' => 100,
	'module' => 'av_Beneficiaries',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_BENEFICIARIES',
	'get_subpanel_data' => 'av_beneficiaries_av_accounts',
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

