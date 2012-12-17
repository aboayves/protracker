<?php
// created: 2012-12-17 16:58:58
$dictionary["Contact"]["fields"]["contact_type_id"] = array (
	'name' => 'contact_type_id',
	'rname' => 'id',
	'vname' => 'LBL_CONTACT_TYPE_ID',
	'type' => 'id',
	'table' => 'av_contact_types',
	'isnull' => 'true',
	'module' => 'av_Contact_Types',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["Contact"]["fields"]["av_Contact_Types_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_Contact_Types_name',
	'vname' => 'LBL_AV_CONTACT_TYPES_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'contact_type_id',
	'join_name' => 'av_contact_types',
	'link' => 'av_contact_types',
	'table' => 'av_contact_types',
	'isnull' => 'true',
	'module' => 'av_Contact_Types',
);
$dictionary["Contact"]["fields"]["av_contact_types"] = array (
	'name' => 'av_contact_types',
	'type' => 'link',
	'relationship' => 'contact_av_contact_types',
	'module' => 'av_Contact_Types',
	'bean_name' => 'av_Contact_Types',
	'source' => 'non-db',
	'vname' => 'LBL_AV_CONTACT_TYPES',
);
$dictionary["Contact"]["relationships"]["contact_av_contact_types"] = array (
	'lhs_module' => 'Contacts',
	'lhs_table' => 'contacts',
	'lhs_key' => 'contact_type_id',
	'rhs_module' => 'av_Contact_Types',
	'rhs_table' => 'av_contact_types',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
