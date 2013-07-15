<?php
// created: 2012-12-19 16:15:19
$dictionary["Contact"]["fields"]["primary_contact"] = array (
	'name' => 'primary_contact',
	'type' => 'link',
	'relationship' => 'accounts_contacts_primary',
	'source' => 'non-db',
	'side' => 'right',
	'vname' => 'LBL_PRIMARY_ACCOUNT',
);
$dictionary["Contact"]["fields"]["secondary_contact"] = array (
	'name' => 'secondary_contact',
	'type' => 'link',
	'relationship' => 'accounts_contacts_secondary',
	'source' => 'non-db',
	'side' => 'right',
	'vname' => 'LBL_SECONDARY_ACCOUNT',
);
?>
