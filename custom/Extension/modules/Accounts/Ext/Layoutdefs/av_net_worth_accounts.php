<?php
// created: 2012-12-19 20:39:48
$layout_defs["Accounts"]["subpanel_setup"]["av_net_worth_accounts"] = array (
	'order' => 100,
	'module' => 'av_Net_Worth',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_NET_WORTH',
	'get_subpanel_data' => 'av_net_worth_accounts',
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

