<?php
// created: 2012-12-17 22:36:45
$dictionary["Account"]["fields"]["client_type_id"] = array (
	'name' => 'client_type_id',
	'rname' => 'id',
	'vname' => 'LBL_CLIENT_TYPE_ID',
	'type' => 'id',
	'table' => 'av_client_types',
	'isnull' => 'true',
	'module' => 'av_Client_Types',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["Account"]["fields"]["av_client_types_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_client_types_name',
	'vname' => 'LBL_AV_CLIENT_TYPES_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'client_type_id',
	'join_name' => 'av_client_types',
	'link' => 'av_client_types',
	'table' => 'av_client_types',
	'isnull' => 'true',
	'module' => 'av_Client_Types',
);
$dictionary["Account"]["fields"]["av_client_types"] = array (
	'name' => 'av_client_types',
	'type' => 'link',
	'relationship' => 'account_av_client_types',
	'module' => 'av_Client_Types',
	'bean_name' => 'av_Client_Types',
	'source' => 'non-db',
	'vname' => 'LBL_AV_CLIENT_TYPES',
);
$dictionary["Account"]["relationships"]["account_av_client_types"] = array (
	'lhs_module' => 'Accounts',
	'lhs_table' => 'accounts',
	'lhs_key' => 'client_type_id',
	'rhs_module' => 'av_Client_Types',
	'rhs_table' => 'av_client_types',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
