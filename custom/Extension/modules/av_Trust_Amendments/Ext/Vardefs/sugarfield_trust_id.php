<?php
// created: 2013-04-19 12:25:22
$dictionary["av_Trust_Amendments"]["fields"]["trust_id"] = array (
	'name' => 'trust_id',
	'rname' => 'id',
	'vname' => 'LBL_TRUST_ID',
	'type' => 'id',
	'table' => 'av_trusts',
	'isnull' => 'true',
	'module' => 'av_Trusts',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Trust_Amendments"]["fields"]["trust_id_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'trust_id_name',
	'vname' => 'LBL_TRUST_ID_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'trust_id',
	'join_name' => 'av_trusts',
	'link' => 'trust_id_av_trusts',
	'table' => 'av_trusts',
	'isnull' => 'true',
	'module' => 'av_Trusts',
);
$dictionary["av_Trust_Amendments"]["fields"]["av_trusts_trust_id"] = array (
	'name' => 'av_trusts_trust_id',
	'type' => 'link',
	'relationship' => 'trust_id_av_trusts',
	'module' => 'av_Trusts',
	'bean_name' => 'av_Trusts',
	'source' => 'non-db',
	'vname' => 'LBL_AV_TRUSTS',
);
$dictionary["av_Trust_Amendments"]["relationships"]["trust_id_av_trusts"] = array (
	'lhs_module' => 'av_Trust_Amendments',
	'lhs_table' => 'av_trust_amendments',
	'lhs_key' => 'trust_id',
	'rhs_module' => 'av_Trusts',
	'rhs_table' => 'av_trusts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
