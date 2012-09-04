<?php
$layout_defs["Contacts"]["subpanel_setup"]['contacts_rt_group_membership'] = array (
  'order' => 100,
  'module' => 'rt_Group_Membership',
  'subpanel_name' => 'default',
  //'sort_order' => 'asc',
  //'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_RT_GROUP_MEMBERSHIP_SUBPANEL_TITLE',
  'get_subpanel_data' => 'contacts_rt_group_membership',
  'top_buttons' => 
  array (
    0 => 
    array (
	  'widget_class' => 'SubPanelTopButtonQuickCreateFromContactsCstm',
    ),
  ),
);
