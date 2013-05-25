<?php
// created: 2012-12-18 23:57:56
$layout_defs["Accounts"]["subpanel_setup"]["av_gift_tax_credits_accounts"] = array (
	'order' => 100,
	'module' => 'av_Gift_Tax_Credits',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_GIFT_TAX_CREDITS',
	'get_subpanel_data' => 'account_av_gift_tax_credits',
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

