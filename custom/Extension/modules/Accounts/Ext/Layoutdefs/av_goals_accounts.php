<?php
// created: 2012-12-19 10:57:59
$layout_defs["Accounts"]["subpanel_setup"]["av_goals_accounts"] = array (
	'order' => 100,
	'module' => 'av_Goals',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_GOALS',
	'get_subpanel_data' => 'account_av_goals',
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

