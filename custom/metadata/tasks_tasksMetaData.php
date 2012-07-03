<?php
// created: 2012-04-30 16:26:21
$dictionary["tasks_tasks"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'parent_tasks' => 
    array (
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_tasks_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
);
