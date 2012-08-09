<?php
// created: 2012-08-09 15:46:02
$dictionary["rt_group_membership_av_groups"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'rt_group_membership_av_groups' => 
    array (
      'lhs_module' => 'av_Groups',
      'lhs_table' => 'av_groups',
      'lhs_key' => 'id',
      'rhs_module' => 'rt_Group_Membership',
      'rhs_table' => 'rt_group_membership',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rt_group_membership_av_groups_c',
      'join_key_lhs' => 'rt_group_membership_av_groupsav_groups_ida',
      'join_key_rhs' => 'rt_group_membership_av_groupsrt_group_membership_idb',
    ),
  ),
  'table' => 'rt_group_membership_av_groups_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'rt_group_membership_av_groupsav_groups_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rt_group_membership_av_groupsrt_group_membership_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rt_group_membership_av_groupsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rt_group_membership_av_groups_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rt_group_membership_av_groupsav_groups_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rt_group_membership_av_groups_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rt_group_membership_av_groupsrt_group_membership_idb',
      ),
    ),
  ),
);