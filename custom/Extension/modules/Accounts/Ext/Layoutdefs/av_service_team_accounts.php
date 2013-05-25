<?php
// created: 2012-12-19 13:38:20
$layout_defs["Accounts"]["subpanel_setup"]["av_service_team_accounts"] = array (
	'order' => 100,
	'module' => 'av_Service_Team',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_SERVICE_TEAM',
	'get_subpanel_data' => 'account_av_service_team',
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

