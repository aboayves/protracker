<?php

$dictionary["Account"]["fields"]["secondary_contact_nickname"] = array (
	'name' => 'secondary_contact_nickname',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_SECONDARY_CONTACT_NICK_NAME',
	'save' => true,
	'id_name' => 'secondary_contact_id',
	'link' => 'secondary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'nickname'
);
?>
