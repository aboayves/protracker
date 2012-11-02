<?php
 // created: 2012-10-18 19:15:46
$layout_defs["av_Tax_Returns"]["subpanel_setup"]['av_tax_returns_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_TAX_RETURNS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'av_tax_returns_contacts_1',
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
