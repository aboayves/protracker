<?php
// created: 2013-05-02 13:59:41
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

