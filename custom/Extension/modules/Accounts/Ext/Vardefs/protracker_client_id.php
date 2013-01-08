<?php
// created: 2012-12-19 16:15:19
$dictionary["Account"]["fields"]["primary_client_id"] = array (
	'name' => 'primary_client_id',
	'rname' => 'id',
	'vname' => 'LBL_CLIENT_ID',
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
$dictionary["Account"]["fields"]["Client_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'Client_name',
	'vname' => 'LBL_CLIENT_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'primary_client_id',
	'join_name' => 'clients',
	'link' => 'clients',
	'table' => 'contacts',
	'isnull' => 'true',
	'module' => 'Contacts',
);
$dictionary["Account"]["fields"]["clients"] = array (
	'name' => 'clients',
	'type' => 'link',
	'relationship' => 'account_contacts_client',
	'module' => 'Contacts',
	'bean_name' => 'Contacts',
	'source' => 'non-db',
	'vname' => 'LBL_CONTACTS',
);
$dictionary["Account"]["relationships"]["account_contacts_client"] = array (
	'lhs_module' => 'Accounts',
	'lhs_table' => 'accounts',
	'lhs_key' => 'primary_client_id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
