<?php
 // created: 2012-10-18 01:29:00
$layout_defs["Contacts"]["subpanel_setup"]['contacts_av_trustees_2'] = array (
  'order' => 100,
  'module' => 'av_Trustees',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_AV_TRUSTEES_2_FROM_AV_TRUSTEES_TITLE',
  'get_subpanel_data' => 'contacts_av_trustees_2',
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
