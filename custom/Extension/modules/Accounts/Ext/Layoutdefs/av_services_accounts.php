<?php
// created: 2013-01-31 23:34:51
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
			'widget_class' => 'SubPanelTopButtonQuickCreate',
		),
		1 => 
		array (
			'widget_class' => 'SubPanelTopSelectButton',
			'mode' => 'MultiSelect',
		),
	),
);

