<?php
// created: 2012-12-19 10:33:00
$dictionary["av_Medicare"]["fields"]["contact_id"] = array (
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
$dictionary["av_Medicare"]["fields"]["Contacts_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'Contacts_name',
	'vname' => 'LBL_CONTACTS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'contact_id',
	'join_name' => 'contacts',
	'link' => 'contacts',
	'table' => 'contacts',
	'isnull' => 'true',
	'module' => 'Contacts',
);
$dictionary["av_Medicare"]["fields"]["contacts"] = array (
	'name' => 'contacts',
	'type' => 'link',
	'relationship' => 'av_medicare_contacts',
	'module' => 'Contacts',
	'bean_name' => 'Contacts',
	'source' => 'non-db',
	'vname' => 'LBL_CONTACTS',
);
$dictionary["av_Medicare"]["relationships"]["av_medicare_contacts"] = array (
	'lhs_module' => 'av_Medicare',
	'lhs_table' => 'av_medicare',
	'lhs_key' => 'contact_id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
