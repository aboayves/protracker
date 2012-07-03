<?php
// created: 2012-04-30 16:26:22
$dictionary["Task"]["fields"]["parent_tasks"] = array (
  'name' => 'parent_tasks',
  'type' => 'link',
  'relationship' => 'parent_tasks',
  'source' => 'non-db',
  'vname' => 'LBL_PARENT_TASKS',
  'module' => 'Tasks',
  'table' => 'tasks',
  'id_name' => 'parent_tasks_id',
);
$dictionary["Task"]["fields"]["parent_tasks_name"] = array (
  'name' => 'parent_tasks_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PARENT_TASKS',
  'save' => true,
  'id_name' => 'parent_tasks_id',
  'link' => 'parent_tasks',
  'table' => 'tasks',
  'module' => 'Tasks',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["parent_tasks_id"] = array (
  'name' => 'parent_tasks_id',
  'type' => 'id',
  'relationship' => 'parent_tasks',
  'reportable' => true,
  'side' => 'right',
  'module' => 'Tasks',
  'table' => 'tasks',
  'vname' => 'LBL_PARENT_TASKS_ID',
);
