<?php
// created: 2012-12-19 12:53:47
$layout_defs["Accounts"]["subpanel_setup"]["av_reviews_accounts"] = array (
	'order' => 100,
	'module' => 'av_Reviews',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_REVIEWS',
	'get_subpanel_data' => 'av_reviews_accounts',
	'top_buttons' => 
	array (
		0 => 
		array (
			'widget_class' => 'SubPanelTopButtonQuickCreateCustom',
		),
		1 => 
		array (
			'widget_class' => 'SubPanelTopSelectButton',
			'mode' => 'MultiSelect',
		),
	),
);

