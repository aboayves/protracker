<?php
// created: 2012-12-19 16:15:19

$dictionary["Account"]["fields"]["primary_contact_name"] = array (
	'name' => 'primary_contact_name',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_PRIMARY_CONTACT_NAME',
	'save' => true,
	'id_name' => 'primary_contact_id',
	'link' => 'primary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'name'
);

$dictionary["Account"]["fields"]["primary_contact_birthdate"] = array (
	'name' => 'primary_contact_birthdate',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_PRIMARY_CONTACT_DOB',
	'save' => true,
	'id_name' => 'primary_contact_id',
	'link' => 'primary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'birthdate',
	'studio' => 'visible',
);
$dictionary["Account"]["fields"]["primary_contact_id"] = array (
	'name' => 'primary_contact_id',
	'type' => 'id',
	'link' => 'primary_contact',
	'relationship' => 'accounts_contacts_primary',
	'source' => 'non-db',
	'reportable' => false,
	'side' => 'right',
	'vname' => 'LBL_PRIMARY_CONTACT_ID'
);


$dictionary["Account"]["fields"]["primary_contact"] = array (
	'name' => 'primary_contact',
	'type' => 'link',
	'relationship' => 'accounts_contacts_primary',
	'source' => 'non-db',
	'vname' => 'LBL_PRIMARY_CONTACT_NAME',
	'id_name' => 'primary_contact_id'
);

$dictionary["Account"]["fields"] ['primary_contact_image'] = array (
    'required' => false,
    'name' => 'primary_contact_image',
    'vname' => 'LBL_PRIMARY_CONTACT_IMAGE',
    'type' => 'image',
    'source' => 'non-db',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
	"border"=>"3",
	"height"=>"132",
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  );
?>