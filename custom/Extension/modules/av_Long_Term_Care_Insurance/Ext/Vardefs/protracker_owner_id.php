<?php
// created: 2012-12-18 22:21:20
$dictionary["av_Long_Term_Care_Insurance"]["fields"]["owner_id"] = array (
	'name' => 'owner_id',
	'rname' => 'id',
	'vname' => 'LBL_OWNER_ID',
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
$dictionary["av_Long_Term_Care_Insurance"]["fields"]["Contacts_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'Contacts_name',
	'vname' => 'LBL_CONTACTS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'owner_id',
	'join_name' => 'contacts',
	'link' => 'contacts',
	'table' => 'contacts',
	'isnull' => 'true',
	'module' => 'Contacts',
);
$dictionary["av_Long_Term_Care_Insurance"]["fields"]["contacts"] = array (
	'name' => 'contacts',
	'type' => 'link',
	'relationship' => 'av_long_term_care_insurance_contacts',
	'module' => 'Contacts',
	'bean_name' => 'Contacts',
	'source' => 'non-db',
	'vname' => 'LBL_CONTACTS',
);
$dictionary["av_Long_Term_Care_Insurance"]["relationships"]["av_long_term_care_insurance_contacts"] = array (
	'lhs_module' => 'av_Long_Term_Care_Insurance',
	'lhs_table' => 'av_long_term_care_insurance',
	'lhs_key' => 'owner_id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
