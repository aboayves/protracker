<?php
$dictionary['Project']['relationships']['projects_tasks'] = null;

$dictionary['Project']['fields']['tasks'] = array (
    'name' => 'tasks',
    'type' => 'link',
    'relationship' => 'project_tasks', //relationship definition is below
	'module'=>'Project',
	'source'=>'non-db',
);
	 
$dictionary['Project']['relationships']['project_tasks'] = array(
	'lhs_module'=> 'Project',
	'lhs_table'=> 'project',
	'lhs_key' => 'id',
	'rhs_module'=> 'Tasks',
	'rhs_table'=> 'tasks',
	'rhs_key' => 'project_id',
	'relationship_type'=>'one-to-many'
);