<?php
// created: 2012-12-19 13:38:19
$layout_defs["Accounts"]["subpanel_setup"]["av_relatives_accounts"] = array (
	'order' => 100,
	'module' => 'av_Relatives',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_RELATIVES',
	'get_subpanel_data' => 'av_relatives_accounts',
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

