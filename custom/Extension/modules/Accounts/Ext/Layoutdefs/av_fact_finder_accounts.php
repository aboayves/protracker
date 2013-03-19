<?php
// created: 2012-12-19 15:09:50
$layout_defs["Accounts"]["subpanel_setup"]["av_fact_finder_accounts"] = array (
	'order' => 100,
	'module' => 'av_Fact_Finder',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_FACT_FINDER',
	'get_subpanel_data' => 'av_fact_finder_accounts',
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

