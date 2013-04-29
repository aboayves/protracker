<?php
// created: 2013-04-19 12:48:16
$layout_defs["av_Wills"]["subpanel_setup"]["av_will_amendments_av_wills"] = array (
	'order' => 100,
	'module' => 'av_Will_Amendments',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_WILL_AMENDMENTS',
	'get_subpanel_data' => 'av_will_amendments_av_wills',
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

