<?php

$dictionary["Account"]["fields"]["secondary_contact_salutation"] = array (
	'name' => 'secondary_contact_salutation',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_CO_CLIENT_CONTACT_SALUTATION',
	'save' => true,
	'id_name' => 'secondary_contact_id',
	'link' => 'secondary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'salutation'
);
?>
