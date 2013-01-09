<?php
// created: 2012-12-19 13:38:17
$dictionary["av_Beneficiaries"]["fields"]["beneficiary_id"] = array (
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
$dictionary["av_Beneficiaries"]["fields"]["Contacts_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'Contacts_name',
	'vname' => 'LBL_CONTACTS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'beneficiary_id',
	'join_name' => 'contacts',
	'link' => 'contacts',
	'table' => 'contacts',
	'isnull' => 'true',
	'module' => 'Contacts',
);
$dictionary["av_Beneficiaries"]["fields"]["contacts"] = array (
	'name' => 'contacts',
	'type' => 'link',
	'relationship' => 'av_beneficiaries_contacts',
	'module' => 'Contacts',
	'bean_name' => 'Contacts',
	'source' => 'non-db',
	'vname' => 'LBL_CONTACTS',
);
$dictionary["av_Beneficiaries"]["relationships"]["av_beneficiaries_contacts"] = array (
	'lhs_module' => 'av_Beneficiaries',
	'lhs_table' => 'av_beneficiaries',
	'lhs_key' => 'beneficiary_id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
