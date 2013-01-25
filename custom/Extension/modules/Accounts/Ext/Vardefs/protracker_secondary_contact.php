<?php
// created: 2012-12-19 16:15:19
$dictionary["Account"]["fields"]["secondary_contact_name"] = array (
	'name' => 'secondary_contact_name',
	'type' => 'relate',
	'source' => 'non-db',
	'vname' => 'LBL_SECONDARY_CONTACT_NAME',
	'save' => true,
	'id_name' => 'secondary_contact_id',
	'link' => 'secondary_contact',
	'table' => 'contacts',
	'module' => 'Contacts',
	'rname' => 'name'
);

$dictionary["Account"]["fields"]["secondary_contact_id"] = array (
	'name' => 'secondary_contact_id',
	'type' => 'id',
	'link' => 'secondary_contact',
	'relationship' => 'accounts_contacts_secondary',
	'source' => 'non-db',
	'reportable' => false,
	'side' => 'right',
	'vname' => 'LBL_SECONDARY_CONTACT_ID'
);

$dictionary["Account"]["fields"]["secondary_contact"] = array (
	'name' => 'secondary_contact',
	'type' => 'link',
	'relationship' => 'accounts_contacts_secondary',
	'source' => 'non-db',
	'vname' => 'LBL_SECONDARY_CONTACT_NAME',
	'id_name' => 'secondary_contact_id'
);
$dictionary["Account"]["fields"] ['secondary_contact_image'] = array (
    'required' => false,
    'name' => 'secondary_contact_image',
    'vname' => 'LBL_SECONDARY_CONTACT_IMAGE',
    'type' => 'image',
    'source' => 'non-db',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
	"border"=>"3",
	"width"=>"130",
	"height"=>"130",
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