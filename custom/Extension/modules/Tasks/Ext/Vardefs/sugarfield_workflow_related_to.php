<?php
$dictionary['Task']['fields']['workflow_related_to'] = array(
	'name'=> 'workflow_related_to',
	'parent_type'=>'record_type_display' ,
	'type_name'=>'workflow_parent_type',
	'id_name'=>'workflow_parent_id',
    'vname'=>'LBL_WORKFLOW_RELATED_TO',
	'type'=>'parent',
	'group'=>'parent_name',
	'source'=>'non-db',
	'options'=> 'assign_workflow_parent_type',
  );
$dictionary['Task']['fields']['workflow_parent_type'] = array(
  	'name'=>'workflow_parent_type',
  	'vname'=>'LBL_WORKFLOW_PARENT_TYPE',
    'type' => 'parent_type',
    'dbType'=>'varchar',
  	'group'=>'parent_name',
    'options'=> 'assign_workflow_parent_type',
  	'required'=>false,
	'len'=>'255',
    'comment' => 'The Sugar object to which the call is related',
);
$dictionary['Task']['fields']['workflow_parent_id'] = array(
	'name' => 'workflow_parent_id',
	'type' => 'id',
	'group'=>'parent_name',
	'reportable'=>false,
	'vname'=>'LBL_WORKFLOW_PARENT_ID',
);
?>
