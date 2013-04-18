<?php
// created: 2012-12-18 23:57:56
$dictionary["av_IRD"]["fields"]["contact_id"] = array (
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
$dictionary["av_IRD"]["fields"]["contacts_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'contacts_name',
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
$dictionary["av_IRD"]["fields"]["contacts"] = array (
	'name' => 'contacts',
	'type' => 'link',
	'relationship' => 'av_ird_contacts',
	'module' => 'Contacts',
	'bean_name' => 'Contacts',
	'source' => 'non-db',
	'vname' => 'LBL_CONTACTS',
);
$dictionary["av_IRD"]["relationships"]["av_ird_contacts"] = array (
	'lhs_module' => 'av_IRD',
	'lhs_table' => 'av_ird',
	'lhs_key' => 'contact_id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
