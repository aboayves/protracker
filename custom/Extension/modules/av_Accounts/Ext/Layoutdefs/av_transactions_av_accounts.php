<?php
// created: 2012-12-17 14:41:32
$layout_defs["av_Accounts"]["subpanel_setup"]["av_transactions_av_accounts"] = array (
	'order' => 100,
	'module' => 'av_Transactions',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_TRANSACTIONS',
	'get_subpanel_data' => 'av_transactions_av_accounts',
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

