<?php

$dictionary["Account"]["fields"]["primary_contact_employer"] = array (
	'name' => 'primary_contact_employer',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_PRIMARY_CONTACT_EMPLOYER',
	'save' => true,
	'id_name' => 'primary_contact_id',
	'link' => 'primary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'employer',
	'studio' => 'visible',
);
?>