<?php
// created: 2013-04-19 12:25:22
$layout_defs["av_Trusts"]["subpanel_setup"]["av_trust_amendments_av_trusts"] = array (
	'order' => 100,
	'module' => 'av_Trust_Amendments',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_TRUST_AMENDMENTS',
	'get_subpanel_data' => 'av_trust_amendments_av_trusts',
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

