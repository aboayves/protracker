<?php
$dictionary["Account"]["fields"]["secondary_contact_employer"] = array (
	'name' => 'secondary_contact_employer',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_CO_CLIENT_CONTACT_EMPLOYER',
	'save' => true,
	'id_name' => 'secondary_contact_id',
	'link' => 'secondary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'employer',
	'studio' => 'visible',
);

?>