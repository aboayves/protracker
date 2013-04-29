<?php
// created: 2013-04-19 15:14:05
$layout_defs["Contacts"]["subpanel_setup"]["contacts_contact_id"] = array (
	'order' => 100,
	'module' => 'av_Other_Addresses',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_OTHER_ADDRESSES',
	'get_subpanel_data' => 'contacts_contact_id',
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

