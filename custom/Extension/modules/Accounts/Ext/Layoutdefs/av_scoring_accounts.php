<?php
// created: 2012-12-19 15:09:50
$layout_defs["Accounts"]["subpanel_setup"]["av_scoring_accounts"] = array (
	'order' => 100,
	'module' => 'av_Scoring',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_SCORING',
	'get_subpanel_data' => 'account_av_scoring',
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

