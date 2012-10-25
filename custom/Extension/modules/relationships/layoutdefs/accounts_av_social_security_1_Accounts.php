<?php
 // created: 2012-10-23 20:14:15
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_social_security_1'] = array (
  'order' => 100,
  'module' => 'av_Social_Security',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_SOCIAL_SECURITY_1_FROM_AV_SOCIAL_SECURITY_TITLE',
  'get_subpanel_data' => 'accounts_av_social_security_1',
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
