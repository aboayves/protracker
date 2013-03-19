<?php
 // created: 2012-04-25 15:09:16
$layout_defs["Contacts"]["subpanel_setup"]['av_groups_contacts'] = array (
  'order' => 100,
  'module' => 'av_Groups',
  'subpanel_name' => 'forContacts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_GROUPS_CONTACTS_FROM_AV_GROUPS_TITLE',
  'get_subpanel_data' => 'av_groups_contacts',
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
