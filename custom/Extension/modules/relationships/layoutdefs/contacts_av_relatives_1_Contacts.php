<?php
 // created: 2012-10-29 16:14:41
$layout_defs["Contacts"]["subpanel_setup"]['contacts_av_relatives_1'] = array (
  'order' => 100,
  'module' => 'av_Relatives',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_AV_RELATIVES_1_FROM_AV_RELATIVES_TITLE',
  'get_subpanel_data' => 'contacts_av_relatives_1',
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
