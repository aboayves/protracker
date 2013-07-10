<?php
// created: 2013-02-20 22:57:40
$dictionary["Contact"]["fields"]["spouse_id"] = array (
	'name' => 'spouse_id',
	'rname' => 'id',
	'vname' => 'LBL_SPOUSE_ID',
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
$dictionary["Contact"]["fields"]["spouse_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'spouse_name',
	'vname' => 'LBL_SPOUSE_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'spouse_id',
	'join_name' => 'contacts',
	'link' => 'contacts',
	'table' => 'contacts',
	'isnull' => 'true',
	'module' => 'Contacts',
);
$dictionary["Contact"]["relationships"]["contact_spouses"] = array (
	'lhs_module' => 'Contacts',
	'lhs_table' => 'contacts',
	'lhs_key' => 'spouse_id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
