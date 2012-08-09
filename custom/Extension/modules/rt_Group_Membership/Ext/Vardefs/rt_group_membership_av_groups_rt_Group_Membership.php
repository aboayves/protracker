<?php
// created: 2012-08-09 15:46:03
$dictionary["rt_Group_Membership"]["fields"]["rt_group_membership_av_groups"] = array (
  'name' => 'rt_group_membership_av_groups',
  'type' => 'link',
  'relationship' => 'rt_group_membership_av_groups',
  'source' => 'non-db',
  'vname' => 'LBL_RT_GROUP_MEMBERSHIP_AV_GROUPS_FROM_AV_GROUPS_TITLE',
  'id_name' => 'rt_group_membership_av_groupsav_groups_ida',
);
$dictionary["rt_Group_Membership"]["fields"]["rt_group_membership_av_groups_name"] = array (
  'name' => 'rt_group_membership_av_groups_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT_GROUP_MEMBERSHIP_AV_GROUPS_FROM_AV_GROUPS_TITLE',
  'save' => true,
  'id_name' => 'rt_group_membership_av_groupsav_groups_ida',
  'link' => 'rt_group_membership_av_groups',
  'table' => 'av_groups',
  'module' => 'av_Groups',
  'rname' => 'name',
);
$dictionary["rt_Group_Membership"]["fields"]["rt_group_membership_av_groupsav_groups_ida"] = array (
  'name' => 'rt_group_membership_av_groupsav_groups_ida',
  'type' => 'link',
  'relationship' => 'rt_group_membership_av_groups',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RT_GROUP_MEMBERSHIP_AV_GROUPS_FROM_RT_GROUP_MEMBERSHIP_TITLE',
);
