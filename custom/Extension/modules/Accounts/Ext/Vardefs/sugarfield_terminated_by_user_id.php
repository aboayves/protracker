<?php
// created: 2013-01-16 14:29:00
$dictionary["Account"]["fields"]["terminated_by_user_id"] = array (
	'name' => 'terminated_by_user_id',
	'rname' => 'id',
	'vname' => 'LBL_TERMINATED_BY_USER_ID',
	'type' => 'id',
	'table' => 'users',
	'isnull' => 'true',
	'module' => 'Users',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["Account"]["fields"]["users_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'users_name',
	'vname' => 'LBL_USERS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'terminated_by_user_id',
	'join_name' => 'users',
	'link' => 'users',
	'table' => 'users',
	'isnull' => 'true',
	'module' => 'Users',
);
$dictionary["Account"]["fields"]["users"] = array (
	'name' => 'users',
	'type' => 'link',
	'relationship' => 'account_users',
	'module' => 'Users',
	'bean_name' => 'Users',
	'source' => 'non-db',
	'vname' => 'LBL_USERS',
);
$dictionary["Account"]["relationships"]["account_users"] = array (
	'lhs_module' => 'Accounts',
	'lhs_table' => 'accounts',
	'lhs_key' => 'terminated_by_user_id',
	'rhs_module' => 'Users',
	'rhs_table' => 'users',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
