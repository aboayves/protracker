<?php
// created: 2012-09-03 07:22:23
$dictionary["av_groups_reports"] = array (
  'relationships' => 
  array (
    'av_groups_reports' => 
    array (
      'lhs_module' => 'av_Groups',
      'lhs_table' => 'av_groups',
      'lhs_key' => 'id',
      'rhs_module' => 'Reports',
      'rhs_table' => 'saved_reports',
      'rhs_key' => 'id',
      'relationship_type' => 'one-to-many',
      'join_table' => 'av_groups_reports',
      'join_key_lhs' => 'av_groups_id',
      'join_key_rhs' => 'reports_id',
    ),
  ),
  'table' => 'av_groups_reports',
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
      'name' => 'av_groups_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'reports_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_groups_reportsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_groups_reports_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_groups_id',
        1 => 'reports_id',
      ),
    ),
  ),
);
?>