<?php
// created: 2012-12-19 21:08:45
$layout_defs["Accounts"]["subpanel_setup"]["av_ips_accounts"] = array (
	'order' => 100,
	'module' => 'av_IPS',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_IPS',
	'get_subpanel_data' => 'account_av_ips',
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

