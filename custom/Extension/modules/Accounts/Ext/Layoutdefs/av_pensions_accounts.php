<?php
// created: 2012-12-19 15:09:50
$layout_defs["Acounts"]["subpanel_setup"]["av_pensions_acounts"] = array (
	'order' => 100,
	'module' => 'av_Pensions',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_PENSIONS',
	'get_subpanel_data' => 'av_pensions_acounts',
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

