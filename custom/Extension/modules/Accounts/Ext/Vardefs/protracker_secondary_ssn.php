<?php
$dictionary["Account"]["fields"]["secondary_contact_ssn"] = array (
	'name' => 'secondary_contact_ssn',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_CO_CLIENT_CONTACT_SSN',
	'save' => true,
	'id_name' => 'secondary_contact_id',
	'link' => 'secondary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'ssn',
	'studio' => 'visible',
);

?>