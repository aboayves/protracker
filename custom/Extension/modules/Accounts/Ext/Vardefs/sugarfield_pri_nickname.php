<?php


$dictionary["Account"]["fields"]["primary_contact_nickname"] = array (
	'name' => 'primary_contact_nickname',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_PRIMARY_CONTACT_NICK_NAME',
	'save' => true,
	'id_name' => 'primary_contact_id',
	'link' => 'primary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'nickname'
);
?>
