<?php
// created: 2012-12-18 21:28:22
$layout_defs["Accounts"]["subpanel_setup"]["av_estate_documents_accounts"] = array (
	'order' => 100,
	'module' => 'av_Estate_Documents',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_ESTATE_DOCUMENTS',
	'get_subpanel_data' => 'account_av_estate_documents',
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

