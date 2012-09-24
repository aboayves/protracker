<?php
$dictionary["rt_Workflow"]["fields"]["user_2"] = array (
		'name' => 'user_2',
		'rname' => 'name',
		'id_name' => 'user_2_id',
		'vname' => 'LBL_USER_2',
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
$dictionary["rt_Workflow"]["fields"]["user_2_id"] = array (
		'name' => 'user_2_id',
		'vname' => 'LBL_USER_2_ID',
		'type' => 'id',
		'required' => false,
		'reportable' => false,
		'source' => 'non-db',
		'audited' => true,
		);
?>
