<?php
// created: 2013-01-31 15:53:26
$dictionary["av_Life_Insurance"]["fields"]["owner_id"] = array (
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
$dictionary["av_Life_Insurance"]["fields"]["contacts_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'contacts_name',
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
$dictionary["av_Life_Insurance"]["fields"]["contacts"] = array (
	'name' => 'contacts',
	'type' => 'link',
	'relationship' => 'av_life_insurance_contacts',
	'module' => 'Contacts',
	'bean_name' => 'Contacts',
	'source' => 'non-db',
	'vname' => 'LBL_CONTACTS',
);
$dictionary["av_Life_Insurance"]["relationships"]["av_life_insurance_contacts"] = array (
	'lhs_module' => 'av_Life_Insurance',
	'lhs_table' => 'av_life_insurance',
	'lhs_key' => 'owner_id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
