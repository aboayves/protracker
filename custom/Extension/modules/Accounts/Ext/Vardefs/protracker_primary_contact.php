<?php
// created: 2012-12-19 16:15:19
$dictionary["Account"]["fields"]["primary_contact_name"] = array (
	'name' => 'primary_contact_name',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_PRIMARY_CONTACT_NAME',
	'save' => true,
	'id_name' => 'primary_contact_id',
	'link' => 'primary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'name'
);

$dictionary["Account"]["fields"]["primary_contact_id"] = array (
	'name' => 'primary_contact_id',
	'type' => 'id',
	'link' => 'primary_contact',
	'relationship' => 'accounts_contacts_primary',
	'source' => 'non-db',
	'reportable' => false,
	'side' => 'right',
	'vname' => 'LBL_PRIMARY_CONTACT_ID'
);

$dictionary["Account"]["fields"]["primary_contact"] = array (
	'name' => 'primary_contact',
	'type' => 'link',
	'relationship' => 'accounts_contacts_primary',
	'source' => 'non-db',
	'vname' => 'LBL_PRIMARY_CONTACT_NAME',
	'id_name' => 'primary_contact_id'
);
?>