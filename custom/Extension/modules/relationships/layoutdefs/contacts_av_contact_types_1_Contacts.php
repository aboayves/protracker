<?php
 // created: 2012-11-16 01:39:40
$layout_defs["Contacts"]["subpanel_setup"]['contacts_av_contact_types_1'] = array (
  'order' => 100,
  'module' => 'av_Contact_Types',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_AV_CONTACT_TYPES_1_FROM_AV_CONTACT_TYPES_TITLE',
  'get_subpanel_data' => 'contacts_av_contact_types_1',
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
