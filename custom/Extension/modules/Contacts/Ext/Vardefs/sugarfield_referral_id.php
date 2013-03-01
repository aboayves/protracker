<?php
// created: 2013-02-20 22:57:40
$dictionary["Contact"]["fields"]["referral_id"] = array (
	'name' => 'referral_id',
	'rname' => 'id',
	'vname' => 'LBL_REFERRAL_ID',
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
$dictionary["Contact"]["fields"]["referral_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'referral_name',
	'vname' => 'LBL_REFERRAL_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'referral_id',
	'join_name' => 'contacts',
	'link' => 'contacts',
	'table' => 'contacts',
	'isnull' => 'true',
	'module' => 'Contacts',
);
$dictionary["Contact"]["fields"]["contacts"] = array (
	'name' => 'contacts',
	'type' => 'link',
	'relationship' => 'contact_referrals',
	'module' => 'Contacts',
	'bean_name' => 'Contacts',
	'source' => 'non-db',
	'vname' => 'LBL_CONTACTS',
);
$dictionary["Contact"]["relationships"]["contact_referrals"] = array (
	'lhs_module' => 'Contacts',
	'lhs_table' => 'contacts',
	'lhs_key' => 'referral_id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
