<?php
// created: 2012-12-19 10:57:59
$layout_defs["Accounts"]["subpanel_setup"]["accounts_av_cashflow"] = array (
	'order' => 100,
	'module' => 'av_Cashflow',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_CASHFLOW',
	'get_subpanel_data' => 'accounts_av_cashflow',
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

