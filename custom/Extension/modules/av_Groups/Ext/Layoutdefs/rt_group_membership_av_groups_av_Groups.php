<?php
 // created: 2012-08-09 15:46:02
$layout_defs["av_Groups"]["subpanel_setup"]['rt_group_membership_av_groups'] = array (
  'order' => 100,
  'module' => 'rt_Group_Membership',
  'subpanel_name' => 'forGroup',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RT_GROUP_MEMBERSHIP_AV_GROUPS_FROM_RT_GROUP_MEMBERSHIP_TITLE',
  'get_subpanel_data' => 'rt_group_membership_av_groups',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
	1 =>
	array(
	 'widget_class' => 'SubPanelTopCstmSelectButton',
	 'mode' => 'MultiSelect',
	 'override_module' => 'Contacts',
	 'form_value' => 'Select from Contacts',
	),
	2 =>
	array(
	 'widget_class' => 'SubPanelTopCstmSelectButton',
	 'mode' => 'MultiSelect',
	 'override_module' => 'Accounts',
	 'form_value' => 'Select from Clients',
	),

  ),
);
