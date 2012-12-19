<?php
// created: 2012-12-19 12:53:47
$dictionary["av_Reviews"]["fields"]["account_id"] = array (
	'name' => 'account_id',
	'rname' => 'id',
	'vname' => 'LBL_ACCOUNT_ID',
	'type' => 'id',
	'table' => 'accounts',
	'isnull' => 'true',
	'module' => 'Accounts',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Reviews"]["fields"]["Accounts_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'Accounts_name',
	'vname' => 'LBL_ACCOUNTS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'account_id',
	'join_name' => 'accounts',
	'link' => 'accounts',
	'table' => 'accounts',
	'isnull' => 'true',
	'module' => 'Accounts',
);
$dictionary["av_Reviews"]["fields"]["accounts"] = array (
	'name' => 'accounts',
	'type' => 'link',
	'relationship' => 'av_reviews_accounts',
	'module' => 'Accounts',
	'bean_name' => 'Accounts',
	'source' => 'non-db',
	'vname' => 'LBL_ACCOUNTS',
);
$dictionary["av_Reviews"]["relationships"]["av_reviews_accounts"] = array (
	'lhs_module' => 'av_Reviews',
	'lhs_table' => 'av_reviews',
	'lhs_key' => 'account_id',
	'rhs_module' => 'Accounts',
	'rhs_table' => 'accounts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
