<?php
 // created: 2012-10-16 21:03:33
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_scoring_1'] = array (
  'order' => 100,
  'module' => 'av_Scoring',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_SCORING_1_FROM_AV_SCORING_TITLE',
  'get_subpanel_data' => 'accounts_av_scoring_1',
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
