<?php
// created: 2013-04-04 21:12:41
$layout_defs["av_Companies"]["subpanel_setup"]["lead_av_companies"] = array (
	'order' => 100,
	'module' => 'Leads',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_LEAD',
	'get_subpanel_data' => 'lead_av_companies',
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

