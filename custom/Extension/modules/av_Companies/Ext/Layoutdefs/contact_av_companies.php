<?php
// created: 2013-04-04 21:12:53
$layout_defs["av_Companies"]["subpanel_setup"]["contact_av_companies"] = array (
	'order' => 100,
	'module' => 'Contacts',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_CONTACT',
	'get_subpanel_data' => 'contact_av_companies',
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

