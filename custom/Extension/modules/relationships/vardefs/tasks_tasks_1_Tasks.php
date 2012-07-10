<?php
// created: 2012-07-07 08:04:53
$dictionary["Task"]["fields"]["tasks_tasks_1"] = array (
  'name' => 'tasks_tasks_1',
  'type' => 'link',
  'relationship' => 'tasks_tasks_1',
  'source' => 'non-db',
  'vname' => 'LBL_TASKS_TASKS_1_FROM_TASKS_L_TITLE',
  'id_name' => 'tasks_tasks_1tasks_ida',
);
$dictionary["Task"]["fields"]["tasks_tasks_1_name"] = array (
  'name' => 'tasks_tasks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TASKS_TASKS_1_FROM_TASKS_L_TITLE',
  'save' => true,
  'id_name' => 'tasks_tasks_1tasks_ida',
  'link' => 'tasks_tasks_1',
  'table' => 'tasks',
  'module' => 'Tasks',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["tasks_tasks_1tasks_ida"] = array (
  'name' => 'tasks_tasks_1tasks_ida',
  'type' => 'link',
  'relationship' => 'tasks_tasks_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TASKS_TASKS_1_FROM_TASKS_R_TITLE',
);
