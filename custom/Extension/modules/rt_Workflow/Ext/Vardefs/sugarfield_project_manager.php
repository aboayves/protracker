<?php
$dictionary["rt_Workflow"]["fields"]["project_manager"] = array (
		'name' => 'project_manager',
		'rname' => 'name',
		'id_name' => 'project_manager_id',
		'vname' => 'LBL_PROJECT_MANAGER',
		'type' => 'relate',
		'table' => 'users',
		'module' => 'Users',
		'len' => '36',
		'audited'=>false,
		'required'=>false,
		'source' => 'non-db',
		'link' => 'users',
		'comments' => '',
		'studio' => 'visible',
		);
$dictionary["rt_Workflow"]["fields"]["project_manager_id"] = array (
		'name' => 'project_manager',
		'vname' => 'LBL_PROJECT_MANAGER_ID',
		'type' => 'id',
		'required' => false,
		'reportable' => false,
		'source' => 'non-db',
		'audited' => true,
		);
?>
