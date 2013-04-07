<?php
// created: 2013-04-04 21:12:41
$dictionary["Lead"]["fields"]["employer_id"] = array (
	'name' => 'employer_id',
	'rname' => 'id',
	'vname' => 'LBL_EMPLOYER_ID',
	'type' => 'id',
	'table' => 'av_companies',
	'isnull' => 'true',
	'module' => 'av_Companies',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["Lead"]["fields"]["av_companies_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_companies_name',
	'vname' => 'LBL_AV_COMPANIES_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'employer_id',
	'join_name' => 'av_companies',
	'link' => 'av_companies',
	'table' => 'av_companies',
	'isnull' => 'true',
	'module' => 'av_Companies',
);
$dictionary["Lead"]["fields"]["av_companies"] = array (
	'name' => 'av_companies',
	'type' => 'link',
	'relationship' => 'leads_av_companies',
	'module' => 'av_Companies',
	'bean_name' => 'av_Companies',
	'source' => 'non-db',
	'vname' => 'LBL_AV_COMPANIES',
);
$dictionary["Lead"]["relationships"]["leads_av_companies"] = array (
	'lhs_module' => 'Leads',
	'lhs_table' => 'leads',
	'lhs_key' => 'employer_id',
	'rhs_module' => 'av_Companies',
	'rhs_table' => 'av_companies',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
