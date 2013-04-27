<?php

$dictionary["Task"]["fields"]["parent_tasks"] = array (
  'name' => 'parent_tasks',
  'type' => 'link',
  'relationship' => 'parent_tasks',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'source' => 'non-db',
  'vname' => 'LBL_PARENT_TASKS',
);

$dictionary["Task"]["fields"]["dependent_on"] = array (
  'name' => 'dependent_on',
  'type' => 'link',
  'relationship' => 'parent_tasks',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'link_type' => 'one',
  'source' => 'non-db',
  'vname' => 'LBL_PARENT_TASKS',
  'side' => 'right',
);

$dictionary["Task"]["fields"]["parent_tasks_name"] = array (
  'name' => 'parent_tasks_name',
  'rname' => 'name',
  'id_name' => 'parent_tasks_id',
  'vname' => 'LBL_PARENT_TASKS',
  'type' => 'relate',
  'isnull' => 'true',
  'table' => 'tasks',
  'module' => 'Tasks',
  'massupdate' => false,
  'source' => 'non-db',
  'len' => 36,
  'link' => 'dependent_on',
  'unified_search' => true,
  'importable' => 'true',
);

$dictionary["Task"]["fields"]["parent_tasks_id"] = array (
  'name' => 'parent_tasks_id',
  'vname' => 'LBL_PARENT_TASKS_ID',
  'type' => 'id',
  'required' => false,
  'reportable' => false,
  'audited' => true,
);
