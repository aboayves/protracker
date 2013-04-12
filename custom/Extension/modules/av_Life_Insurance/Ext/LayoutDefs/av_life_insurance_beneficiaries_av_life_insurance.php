<?php
// created: 2013-04-10 15:30:45
$layout_defs["av_Life_Insurance"]["subpanel_setup"]["av_life_insurance_beneficiaries_av_life_insurance"] = array (
	'order' => 100,
	'module' => 'av_Life_Insurance_Beneficiaries',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_LIFE_INSURANCE_BENEFICIARIES',
	'get_subpanel_data' => 'av_life_insurance_beneficiaries_av_life_insurance',
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

