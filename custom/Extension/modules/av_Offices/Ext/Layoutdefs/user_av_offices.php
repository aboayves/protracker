<?php
// created: 2013-04-24 10:15:29
$layout_defs["av_Offices"]["subpanel_setup"]["user_av_offices"] = array (
	'order' => 100,
	'module' => 'User',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_USER',
	'get_subpanel_data' => 'av_offices_office_id',
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

