<?php
// created: 2012-12-19 14:50:46
$layout_defs["av_Group_Types"]["subpanel_setup"]["av_groups_av_group_types"] = array (
	'order' => 100,
	'module' => 'av_Groups',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_GROUPS',
	'get_subpanel_data' => 'av_groups_av_group_types',
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

