<?php
$dictionary["av_Workflow"]["fields"]["workflow"] = array (
	'name' => 'workflow',
	'rname' => 'name',
	'id_name' => 'workflow_id',
	'vname' => 'LBL_MODULE_NAME',
	'type' => 'relate',
	'table' => 'av_workflow',
	'module' => 'av_Workflow',
	'len' => '36',
	'audited' => false,
	'required' => true,
	'source' => 'non-db',
	'comments' => '',
	'studio' => 'visible',
);

$dictionary["av_Workflow"]["fields"]["workflow_id"] = array (
	'name' => 'workflow_id',
	'type' => 'id',
	'required' => false,
	'reportable' => false,
	'source' => 'non-db',
	'audited' => true,
);
?>
