<?php
 // created: 2012-11-09 21:12:23
$layout_defs["Contacts"]["subpanel_setup"]['contacts_av_other_comms_1'] = array (
  'order' => 100,
  'module' => 'av_Other_Comms',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_AV_OTHER_COMMS_1_FROM_AV_OTHER_COMMS_TITLE',
  'get_subpanel_data' => 'contacts_av_other_comms_1',
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
