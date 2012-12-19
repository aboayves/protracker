<?php
// created: 2012-12-19 14:41:36
$layout_defs["av_Offices"]["subpanel_setup"]["av_groups_av_offices"] = array (
	'order' => 100,
	'module' => 'av_Groups',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_GROUPS',
	'get_subpanel_data' => 'av_groups_av_offices',
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

