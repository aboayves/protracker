<?php
$layout_defs["Accounts"]["subpanel_setup"]['accounts_rt_group_membership'] = array (
  'order' => 100,
  'module' => 'rt_Group_Membership',
  'subpanel_name' => 'forGroup',
  //'sort_order' => 'asc',
  //'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_RT_GROUP_MEMBERSHIP_SUBPANEL_TITLE',
  'get_subpanel_data' => 'accounts_rt_group_membership_link',
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
