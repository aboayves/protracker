<?php

$dictionary["Account"]["fields"]["primary_contact_title"] = array (
	'name' => 'primary_contact_title',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_PRIMARY_CONTACT_TITLE',
	'save' => true,
	'id_name' => 'primary_contact_id',
	'link' => 'primary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'salutation',
	'studio' => 'visible',
);
?>