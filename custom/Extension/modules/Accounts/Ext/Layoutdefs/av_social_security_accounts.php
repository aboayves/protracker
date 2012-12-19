<?php
// created: 2012-12-19 10:33:00
$layout_defs["Accounts"]["subpanel_setup"]["av_social_security_accounts"] = array (
	'order' => 100,
	'module' => 'av_Social_Security',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_SOCIAL_SECURITY',
	'get_subpanel_data' => 'av_social_security_accounts',
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

