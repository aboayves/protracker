<?php
// created: 2013-03-02 23:38:03
$layout_defs["av_Activity_Types"]["subpanel_setup"]["call_av_activity_types"] = array (
	'order' => 100,
	'module' => 'Calls',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_CALL',
	'get_subpanel_data' => 'call_av_activity_types',
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

