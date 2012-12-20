<?php
// created: 2012-12-19 15:09:50
$dictionary["av_Pensions"]["fields"]["account_id"] = array (
	'name' => 'account_id',
	'rname' => 'id',
	'vname' => 'LBL_ACCOUNT_ID',
	'type' => 'id',
	'table' => 'accounts',
	'isnull' => 'true',
	'module' => 'Acounts',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Pensions"]["fields"]["Acounts_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'Acounts_name',
	'vname' => 'LBL_ACOUNTS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'account_id',
	'join_name' => 'accounts',
	'link' => 'accounts',
	'table' => 'accounts',
	'isnull' => 'true',
	'module' => 'Acounts',
);
$dictionary["av_Pensions"]["fields"]["acounts"] = array (
	'name' => 'acounts',
	'type' => 'link',
	'relationship' => 'av_pensions_acounts',
	'module' => 'Acounts',
	'bean_name' => 'Acounts',
	'source' => 'non-db',
	'vname' => 'LBL_ACCOUNTS',
);
$dictionary["av_Pensions"]["relationships"]["av_pensions_acounts"] = array (
	'lhs_module' => 'av_Pensions',
	'lhs_table' => 'av_pensions',
	'lhs_key' => 'account_id',
	'rhs_module' => 'Acounts',
	'rhs_table' => 'acounts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
