<?php
// created: 2012-12-19 16:15:19
$dictionary["Account"]["fields"]["secondary_contact_name"] = array (
	'name' => 'secondary_contact_name',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_SECONDARY_CONTACT_NAME',
	'save' => true,
	'id_name' => 'secondary_contact_id',
	'link' => 'secondary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'name'
);

$dictionary["Account"]["fields"]["secondary_contact_id"] = array (
	'name' => 'secondary_contact_id',
	'type' => 'link',
	'relationship' => 'accounts_contacts_secondary',
	'source' => 'non-db',
	'reportable' => false,
	'side' => 'right',
	'vname' => 'LBL_SECONDARY_CONTACT_ID'
);

$dictionary["Account"]["fields"]["secondary_contact"] = array (
	'name' => 'secondary_contact',
	'type' => 'link',
	'relationship' => 'accounts_contacts_secondary',
	'source' => 'non-db',
	'vname' => 'LBL_SECONDARY_CONTACT_NAME',
	'id_name' => 'secondary_contact_id'
);
?>