<?php
$dictionary["Account"]["fields"]["primary_contact_ssn"] = array (
	'name' => 'primary_contact_ssn',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_PRIMARY_CONTACT_SSN',
	'save' => true,
	'id_name' => 'primary_contact_id',
	'link' => 'primary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'ssn',
	'studio' => 'visible',
);

?>