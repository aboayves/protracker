<?php
// created: 2012-12-19 13:38:18
$dictionary["av_Professionals"]["fields"]["professional_id"] = array (
	'name' => 'professional_id',
	'rname' => 'id',
	'vname' => 'LBL_PROFESSIONAL_ID',
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
$dictionary["av_Professionals"]["fields"]["Contacts_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'Contacts_name',
	'vname' => 'LBL_CONTACTS_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'professional_id',
	'join_name' => 'contacts',
	'link' => 'contacts',
	'table' => 'contacts',
	'isnull' => 'true',
	'module' => 'Contacts',
);
$dictionary["av_Professionals"]["fields"]["contacts"] = array (
	'name' => 'contacts',
	'type' => 'link',
	'relationship' => 'av_professionals_contacts',
	'module' => 'Contacts',
	'bean_name' => 'Contacts',
	'source' => 'non-db',
	'vname' => 'LBL_CONTACTS',
);
$dictionary["av_Professionals"]["relationships"]["av_professionals_contacts"] = array (
	'lhs_module' => 'av_Professionals',
	'lhs_table' => 'av_professionals',
	'lhs_key' => 'professional_id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
