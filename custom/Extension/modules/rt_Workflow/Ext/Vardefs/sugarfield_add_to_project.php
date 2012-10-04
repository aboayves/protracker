<?php
$dictionary["rt_Workflow"]["fields"]["add_to_project"] = array (
		'name' => 'add_to_project',
		'rname' => 'name',
		'id_name' => 'add_to_project_id',
		'vname' => 'LBL_ADD_TO_PROJECT',
		'type' => 'relate',
		'table' => 'project',
		'module' => 'Project',
		'len' => '36',
		'source' => 'non-db',
		'link' => 'project',
		'comments' => '',
		'studio' => 'visible',
		);
$dictionary["rt_Workflow"]["fields"]["add_to_project_id"] = array (
		'name' => 'add_to_project_id',
		'vname' => 'LBL_ADD_TO_PROJECT_ID',
		'type' => 'id',
		'required' => false,
		'reportable' => false,
		'source' => 'non-db',
		'audited' => true,
		);
?>
