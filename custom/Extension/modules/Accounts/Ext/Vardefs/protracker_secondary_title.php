<?php
$dictionary["Account"]["fields"]["secondary_contact_title"] = array (
	'name' => 'secondary_contact_title',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_CO_CLIENT_CONTACT_TITLE',
	'save' => true,
	'id_name' => 'secondary_contact_id',
	'link' => 'secondary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'salutation',
	'studio' => 'visible',

);

?>