<?php
$dictionary["av_Workflow"]["fields"]["related_to"] = array (
   'required' => true,
    'source' => 'non-db',
    'name' => 'related_to',
    'vname' => 'LBL_RELATED_TO',
    'type' => 'parent',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 25,
    'size' => '20',
    'options' => 'assign_workflow_parent_type',
    'studio' => 'visible',
    'type_name' => 'parent_type',
    'id_name' => 'parent_id',
    'parent_type' => 'assign_workflow_parent_type',
	);	
$dictionary["av_Workflow"]["fields"]["parent_type"] = array (
	'name' => 'parent_type',
	'vname' => 'LBL_RELATED_TO',
	'type' => 'parent_type',
	'len' => '255',
    'options' => 'assign_workflow_parent_type',
	'audited'=>false,
	'required'=>false,
	'source' => 'non-db',
	'comments' => '',
	'studio' => 'visible',
	);	
$dictionary["av_Workflow"]["fields"]["parent_id"] = array (
	'name' => 'parent_id',
    'type' => 'id',
    'reportable' => false,
	'source' => 'non-db',
	);

?>
