<?php
// created: 2012-12-16 14:41:36
$dictionary["av_Account_Types"]["fields"]["account_category_id"] = array (
	'name' => 'account_category_id',
	'rname' => 'id',
	'vname' => 'LBL_ACCOUNT_CATEGORY_ID',
	'type' => 'id',
	'table' => 'av_account_categories',
	'isnull' => 'true',
	'module' => 'av_Account_Categories',
	'dbtype' => 'id',
	'massupdate' => 'false',
	'reportable' => 'false',
	'importable' => 'false',
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Account_Types"]["fields"]["av_account_categories_name"] = array (
	'required' => 'false',
	'source' => 'non-db',
	'name' => 'av_account_categories_name',
	'vname' => 'LBL_AV_ACCOUNT_CATEGORIES_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'account_category_id',
	'join_name' => 'av_account_categories',
	'link' => 'av_account_categories',
	'table' => 'av_account_categories',
	'isnull' => 'true',
	'module' => 'av_Account_Categories',
);
$dictionary["av_Account_Types"]["fields"]["av_account_categories"] = array (
	'name' => 'av_account_categories',
	'type' => 'link',
	'relationship' => 'av_account_types_av_account_categories',
	'module' => 'av_Account_Categories',
	'bean_name' => 'av_Account_Categories',
	'source' => 'non-db',
	'vname' => 'LBL_AV_ACCOUNT_CATEGORIES',
);
$dictionary["av_Account_Types"]["relationships"]["av_account_types_av_account_categories"] = array (
	'lhs_module' => 'av_Account_Types',
	'lhs_table' => 'av_account_types',
	'lhs_key' => 'account_category_id',
	'rhs_module' => 'av_Account_Categories',
	'rhs_table' => 'av_account_categories',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
