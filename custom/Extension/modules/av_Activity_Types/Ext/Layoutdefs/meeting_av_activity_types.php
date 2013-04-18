<?php
// created: 2012-12-17 15:53:10
$layout_defs["av_Activity_Types"]["subpanel_setup"]["meeting_av_activity_types"] = array (
	'order' => 100,
	'module' => 'Meetings',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_MEETING',
	'get_subpanel_data' => 'meeting_av_activity_types',
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

