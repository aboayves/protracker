<?php
// created: 2012-12-17 16:09:32
$layout_defs["av_Activity_Types"]["subpanel_setup"]["note_av_activity_types"] = array (
	'order' => 100,
	'module' => 'Notes',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_NOTE',
	'get_subpanel_data' => 'note_av_activity_types',
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

