<?php
// created: 2012-12-18 23:57:55
$layout_defs["Accounts"]["subpanel_setup"]["av_gifting_accounts"] = array (
	'order' => 100,
	'module' => 'av_Gifting',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_GIFTING',
	'get_subpanel_data' => 'av_gifting_accounts',
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

