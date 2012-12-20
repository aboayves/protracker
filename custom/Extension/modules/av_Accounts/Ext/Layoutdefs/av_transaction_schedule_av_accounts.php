<?php
// created: 2012-12-17 14:41:33
$layout_defs["av_Accounts"]["subpanel_setup"]["av_transaction_schedule_av_accounts"] = array (
	'order' => 100,
	'module' => 'av_Transaction_Schedule',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_TRANSACTION_SCHEDULE',
	'get_subpanel_data' => 'av_transaction_schedule_av_accounts',
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

