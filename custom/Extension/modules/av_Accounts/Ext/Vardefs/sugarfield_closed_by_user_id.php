<?php
// created: 2012-12-16 22:47:15
$dictionary["av_Accounts"]["fields"]["closed_by_user_id"] = array (
	'name' => 'closed_by_user_id',
	'rname' => 'id',
	'vname' => 'LBL_CLOSED_BY_USER_ID',
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
$dictionary["av_Accounts"]["fields"]["Users_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'Users_name',
	'vname' => 'LBL_USERS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'closed_by_user_id',
	'join_name' => 'users',
	'link' => 'users',
	'table' => 'users',
	'isnull' => 'true',
	'module' => 'Users',
);
$dictionary["av_Accounts"]["fields"]["users"] = array (
	'name' => 'users',
	'type' => 'link',
	'relationship' => 'av_accounts_users',
	'module' => 'Users',
	'bean_name' => 'Users',
	'source' => 'non-db',
	'vname' => 'LBL_USERS',
);
$dictionary["av_Accounts"]["relationships"]["av_accounts_users"] = array (
	'lhs_module' => 'av_Accounts',
	'lhs_table' => 'av_accounts',
	'lhs_key' => 'closed_by_user_id',
	'rhs_module' => 'Users',
	'rhs_table' => 'users',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
