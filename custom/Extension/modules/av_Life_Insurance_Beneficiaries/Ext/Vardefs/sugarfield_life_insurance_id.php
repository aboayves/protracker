<?php
// created: 2013-04-10 15:30:45
$dictionary["av_Life_Insurance_Beneficiaries"]["fields"]["life_insurance_id"] = array (
	'name' => 'life_insurance_id',
	'rname' => 'id',
	'vname' => 'LBL_LIFE_INSURANCE_ID',
	'type' => 'id',
	'table' => 'av_life_insurance',
	'isnull' => 'true',
	'module' => 'av_Life_Insurance',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Life_Insurance_Beneficiaries"]["fields"]["life_insurance_id_type"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'life_insurance_id_type',
	'vname' => 'LBL_LIFE_INSURANCE_ID_TYPE',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'life_insurance_id',
	'join_name' => 'av_life_insurance',
	'link' => 'life_insurance_id_av_life_insurance',
	'table' => 'av_life_insurance',
	'isnull' => 'true',
	'module' => 'av_Life_Insurance',
);
$dictionary["av_Life_Insurance_Beneficiaries"]["fields"]["av_life_insurance_life_insurance_id"] = array (
	'name' => 'av_life_insurance_life_insurance_id',
	'type' => 'link',
	'relationship' => 'life_insurance_id_av_life_insurance',
	'module' => 'av_Life_Insurance',
	'bean_name' => 'av_Life_Insurance',
	'source' => 'non-db',
	'vname' => 'LBL_AV_LIFE_INSURANCE',
);
$dictionary["av_Life_Insurance_Beneficiaries"]["relationships"]["life_insurance_id_av_life_insurance"] = array (
	'lhs_module' => 'av_Life_Insurance_Beneficiaries',
	'lhs_table' => 'av_life_insurance_beneficiaries',
	'lhs_key' => 'life_insurance_id',
	'rhs_module' => 'av_Life_Insurance',
	'rhs_table' => 'av_life_insurance',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
