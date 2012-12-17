<?php
// created: 2012-12-17 15:14:44
$layout_defs["av_Activity_Types"]["subpanel_setup"]["task_av_activity_types"] = array (
	'order' => 100,
	'module' => 'Tasks',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_TASK',
	'get_subpanel_data' => 'task_av_activity_types',
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

