<?php
// created: 2013-03-06 14:37:00
$layout_defs["Accounts"]["subpanel_setup"]["av_services_accounts"] = array (
	'order' => 100,
	'module' => 'av_Services',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_SERVICES',
	'get_subpanel_data' => 'av_services_accounts',
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

