<?php
 // created: 2012-10-19 01:37:47
$layout_defs["Contacts"]["subpanel_setup"]['contacts_av_trusts_1'] = array (
  'order' => 100,
  'module' => 'av_Trusts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_AV_TRUSTS_1_FROM_AV_TRUSTS_TITLE',
  'get_subpanel_data' => 'contacts_av_trusts_1',
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
