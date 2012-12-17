<?php
// created: 2012-12-17 16:58:58
$layout_defs["av_Contact_Types"]["subpanel_setup"]["contact_av_contact_types"] = array (
	'order' => 100,
	'module' => 'Contacts',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_CONTACT',
	'get_subpanel_data' => 'contact_av_contact_types',
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

