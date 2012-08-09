<?php
// created: 2012-08-09 15:46:04
$dictionary["rt_offices_av_groups"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'rt_offices_av_groups' => 
    array (
      'lhs_module' => 'rt_Offices',
      'lhs_table' => 'rt_offices',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Groups',
      'rhs_table' => 'av_groups',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rt_offices_av_groups_c',
      'join_key_lhs' => 'rt_offices_av_groupsrt_offices_ida',
      'join_key_rhs' => 'rt_offices_av_groupsav_groups_idb',
    ),
  ),
  'table' => 'rt_offices_av_groups_c',
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
      'name' => 'rt_offices_av_groupsrt_offices_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rt_offices_av_groupsav_groups_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rt_offices_av_groupsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rt_offices_av_groups_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rt_offices_av_groupsrt_offices_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rt_offices_av_groups_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rt_offices_av_groupsav_groups_idb',
      ),
    ),
  ),
);