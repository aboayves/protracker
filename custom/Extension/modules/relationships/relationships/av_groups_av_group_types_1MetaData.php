<?php
// created: 2012-11-16 01:44:38
$dictionary["av_groups_av_group_types_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'av_groups_av_group_types_1' => 
    array (
      'lhs_module' => 'av_Groups',
      'lhs_table' => 'av_groups',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Group_Types',
      'rhs_table' => 'av_group_types',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_groups_av_group_types_1_c',
      'join_key_lhs' => 'av_groups_av_group_types_1av_groups_ida',
      'join_key_rhs' => 'av_groups_av_group_types_1av_group_types_idb',
    ),
  ),
  'table' => 'av_groups_av_group_types_1_c',
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
      'name' => 'av_groups_av_group_types_1av_groups_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_groups_av_group_types_1av_group_types_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_groups_av_group_types_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_groups_av_group_types_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_groups_av_group_types_1av_groups_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'av_groups_av_group_types_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_groups_av_group_types_1av_group_types_idb',
      ),
    ),
  ),
);