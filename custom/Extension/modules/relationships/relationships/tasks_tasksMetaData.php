<?php
// created: 2012-04-30 16:26:21
$dictionary["tasks_tasks"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'tasks_tasks' => 
    array (
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tasks_tasks_c',
      'join_key_lhs' => 'tasks_taskstasks_ida',
      'join_key_rhs' => 'tasks_taskstasks_idb',
    ),
  ),
  'table' => 'tasks_tasks_c',
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
      'name' => 'tasks_taskstasks_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tasks_taskstasks_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tasks_tasksspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tasks_tasks_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tasks_taskstasks_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tasks_tasks_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tasks_taskstasks_idb',
      ),
    ),
  ),
);