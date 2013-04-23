<?php
// created: 2013-04-19 15:14:05
$dictionary["av_Other_Addresses"]["fields"]["contact_id"] = array (
	'name' => 'contact_id',
	'rname' => 'id',
	'vname' => 'LBL_CONTACT_ID',
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
$dictionary["av_Other_Addresses"]["fields"]["contact_id_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'contact_id_name',
	'vname' => 'LBL_CONTACT_ID_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'contact_id',
	'join_name' => 'contacts',
	'link' => 'contact_id_contacts',
	'table' => 'contacts',
	'isnull' => 'true',
	'module' => 'Contacts',
);
$dictionary["av_Other_Addresses"]["fields"]["contacts_contact_id"] = array (
	'name' => 'contacts_contact_id',
	'type' => 'link',
	'relationship' => 'contact_id_contacts',
	'module' => 'Contacts',
	'bean_name' => 'Contacts',
	'source' => 'non-db',
	'vname' => 'LBL_CONTACTS',
);
$dictionary["av_Other_Addresses"]["relationships"]["contact_id_contacts"] = array (
	'lhs_module' => 'av_Other_Addresses',
	'lhs_table' => 'av_other_addresses',
	'lhs_key' => 'contact_id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
