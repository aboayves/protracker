<?php
// created: 2012-12-18 22:21:12
$dictionary["av_Business_Insurance"]["fields"]["company_id"] = array (
	'name' => 'company_id',
	'rname' => 'id',
	'vname' => 'LBL_COMPANY_ID',
	'type' => 'id',
	'table' => 'av_Companies',
	'isnull' => 'true',
	'module' => 'av_Companies',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Business_Insurance"]["fields"]["av_companies_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_companies_name',
	'vname' => 'LBL_AV_COMPANIES_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'company_id',
	'join_name' => 'av_Companies',
	'link' => 'av_Companies',
	'table' => 'av_Companies',
	'isnull' => 'true',
	'module' => 'av_Companies',
);
$dictionary["av_Business_Insurance"]["fields"]["av_companies"] = array (
	'name' => 'av_companies',
	'type' => 'link',
	'relationship' => 'av_business_insurance_av_companies',
	'module' => 'av_Companies',
	'bean_name' => 'av_Companies',
	'source' => 'non-db',
	'vname' => 'LBL_AV_COMPANIES',
);
$dictionary["av_Business_Insurance"]["relationships"]["av_business_insurance_av_companies"] = array (
	'lhs_module' => 'av_Business_Insurance',
	'lhs_table' => 'av_business_insurance',
	'lhs_key' => 'company_id',
	'rhs_module' => 'av_Companies',
	'rhs_table' => 'av_companies',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
