<?php
// created: 2012-12-19 16:15:19
$dictionary["Account"]["fields"]["coclient_id"] = array (
	'name' => 'coclient_id',
	'rname' => 'id',
	'vname' => 'LBL_COCLIENT_ID',
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
$dictionary["Account"]["fields"]["CoClient_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'CoClient_name',
	'vname' => 'LBL_COCLIENT_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'coclient_id',
	'join_name' => 'coclients',
	'link' => 'coclients',
	'table' => 'contacts',
	'isnull' => 'true',
	'module' => 'Contacts',
);
$dictionary["Account"]["fields"]["coclients"] = array (
	'name' => 'coclients',
	'type' => 'link',
	'relationship' => 'account_contacts_coclient',
	'module' => 'Contacts',
	'bean_name' => 'Contacts',
	'source' => 'non-db',
	'vname' => 'LBL_CONTACTS',
);
$dictionary["Account"]["relationships"]["account_contacts_coclient"] = array (
	'lhs_module' => 'Accounts',
	'lhs_table' => 'accounts',
	'lhs_key' => 'coclient_id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
