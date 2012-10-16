<?php
 // created: 2012-10-14 18:44:30
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_service_team_1'] = array (
  'order' => 100,
  'module' => 'av_Service_Team',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_SERVICE_TEAM_1_FROM_AV_SERVICE_TEAM_TITLE',
  'get_subpanel_data' => 'accounts_av_service_team_1',
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
