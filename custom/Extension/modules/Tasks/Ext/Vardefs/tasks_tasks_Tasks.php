<?php
// created: 2012-04-30 16:26:22
$dictionary["Task"]["fields"]["tasks_tasks"] = array (
  'name' => 'tasks_tasks',
  'type' => 'link',
  'relationship' => 'tasks_tasks',
  'source' => 'non-db',
  'vname' => 'LBL_TASKS_TASKS_FROM_TASKS_L_TITLE',
  'id_name' => 'tasks_taskstasks_ida',
);
$dictionary["Task"]["fields"]["tasks_tasks_name"] = array (
  'name' => 'tasks_tasks_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TASKS_TASKS_FROM_TASKS_L_TITLE',
  'save' => true,
  'id_name' => 'tasks_taskstasks_ida',
  'link' => 'tasks_tasks',
  'table' => 'tasks',
  'module' => 'Tasks',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["tasks_taskstasks_ida"] = array (
  'name' => 'tasks_taskstasks_ida',
  'type' => 'link',
  'relationship' => 'tasks_tasks',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TASKS_TASKS_FROM_TASKS_R_TITLE',
);
