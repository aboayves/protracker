<?php
 // created: 2012-10-17 18:14:18
$layout_defs["av_Activity_Types"]["subpanel_setup"]['av_activity_types_meetings_1'] = array (
  'order' => 100,
  'module' => 'Meetings',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_ACTIVITY_TYPES_MEETINGS_1_FROM_MEETINGS_TITLE',
  'get_subpanel_data' => 'av_activity_types_meetings_1',
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
