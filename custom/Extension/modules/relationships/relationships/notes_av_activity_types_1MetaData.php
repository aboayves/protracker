<?php
// created: 2012-10-15 02:06:07
$dictionary["notes_av_activity_types_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'notes_av_activity_types_1' => 
    array (
      'lhs_module' => 'Notes',
      'lhs_table' => 'notes',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Activity_Types',
      'rhs_table' => 'av_activity_types',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'notes_av_activity_types_1_c',
      'join_key_lhs' => 'notes_av_activity_types_1notes_ida',
      'join_key_rhs' => 'notes_av_activity_types_1av_activity_types_idb',
    ),
  ),
  'table' => 'notes_av_activity_types_1_c',
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
      'name' => 'notes_av_activity_types_1notes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'notes_av_activity_types_1av_activity_types_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'notes_av_activity_types_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'notes_av_activity_types_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'notes_av_activity_types_1notes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'notes_av_activity_types_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'notes_av_activity_types_1av_activity_types_idb',
      ),
    ),
  ),
);