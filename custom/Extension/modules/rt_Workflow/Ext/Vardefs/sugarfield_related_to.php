<?php
$dictionary["rt_Workflow"]["fields"]["related_to"] = array (
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
    'options' => 'parent_type_display',
    'studio' => 'visible',
    'type_name' => 'parent_type',
    'id_name' => 'parent_id',
    'parent_type' => 'parent_type_display',
	);	
$dictionary["rt_Workflow"]["fields"]["parent_type"] = array (
	'name' => 'parent_type',
	'vname' => 'LBL_RELATED_TO',
	'type' => 'parent_type',
	'len' => '255',
    'options' => 'parent_type_display',
	'audited'=>false,
	'required'=>false,
	'source' => 'non-db',
	'comments' => '',
	'studio' => 'visible',
	);	
$dictionary["rt_Workflow"]["fields"]["parent_id"] = array (
	'name' => 'parent_id',
    'type' => 'id',
    'reportable' => false,
    'vname' => 'LBL_PARENT_ID',
	'source' => 'non-db',
	);

?>
