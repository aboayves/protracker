<?php
// created: 2012-12-17 16:49:23
$layout_defs["Contacts"]["subpanel_setup"]["contact_contacts"] = array (
	'order' => 100,
	'module' => 'Contacts',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_CONTACT',
	'get_subpanel_data' => 'contact_contacts',
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

