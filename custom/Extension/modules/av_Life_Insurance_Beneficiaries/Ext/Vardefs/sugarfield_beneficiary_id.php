<?php
// created: 2013-04-10 15:30:45
$dictionary["av_Life_Insurance_Beneficiaries"]["fields"]["beneficiary_id"] = array (
	'name' => 'beneficiary_id',
	'rname' => 'id',
	'vname' => 'LBL_BENEFICIARY_ID',
	'type' => 'id',
	'table' => 'contacts',
	'isnull' => 'true',
	'module' => 'Contacts',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Life_Insurance_Beneficiaries"]["fields"]["beneficiary_id_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'beneficiary_id_name',
	'vname' => 'LBL_BENEFICIARY_ID_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'beneficiary_id',
	'join_name' => 'contacts',
	'link' => 'beneficiary_id_contacts',
	'table' => 'contacts',
	'isnull' => 'true',
	'module' => 'Contacts',
);
$dictionary["av_Life_Insurance_Beneficiaries"]["fields"]["contacts_beneficiary_id"] = array (
	'name' => 'contacts_beneficiary_id',
	'type' => 'link',
	'relationship' => 'beneficiary_id_contacts',
	'module' => 'Contacts',
	'bean_name' => 'Contacts',
	'source' => 'non-db',
	'vname' => 'LBL_CONTACTS',
);
$dictionary["av_Life_Insurance_Beneficiaries"]["relationships"]["beneficiary_id_contacts"] = array (
	'lhs_module' => 'av_Life_Insurance_Beneficiaries',
	'lhs_table' => 'av_life_insurance_beneficiaries',
	'lhs_key' => 'beneficiary_id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
