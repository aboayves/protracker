<?php
// created: 2013-04-04 11:08:53
$dictionary["av_Companies"]["fields"]["av_companies_custodian_id"] = array (
	'name' => 'av_companies_custodian_id',
	'type' => 'link',
	'relationship' => 'custodian_id_av_companies',
	'source' => 'non-db',
	'side' => 'right',
	'vname' => 'LBL_AV_ACCOUNTS',
);
$dictionary["av_Companies"]["relationships"]["custodian_id_av_companies"] = array (
	'lhs_module' => 'av_Companies',
	'lhs_table' => 'av_companies',
	'lhs_key' => 'id',
	'rhs_module' => 'av_Accounts',
	'rhs_table' => 'av_accounts',
	'rhs_key' => 'custodian_id',
	'relationship_type' => 'one-to-many',
);
?>
