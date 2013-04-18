<?php

$dictionary["Account"]["fields"]["primary_contact_salutation"] = array (
	'name' => 'primary_contact_salutation',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_PRIMARY_CONTACT_SALUTATION',
	'save' => true,
	'id_name' => 'primary_contact_id',
	'link' => 'primary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'report_salutation',
	'studio' => 'visible',
);
?>