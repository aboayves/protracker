<?php
$dictionary["av_Groups"]["fields"]["av_groups_accounts"] = array (
  'name' => 'av_groups_accounts',
  'type' => 'link',
  'relationship' => 'av_groups_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_AV_GROUPS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);

$dictionary["av_Groups"]["fields"]["av_groups_contacts"] = array (
  'name' => 'av_groups_contacts',
  'type' => 'link',
  'relationship' => 'av_groups_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_AV_GROUPS_CONTACTS_FROM_CONTACTS_TITLE',
);

$dictionary["av_Groups"]['fields']['accounts_fields'] = array(
	'name' => "av_groups_fields",
	'rname' => 'id',
	'relationship_fields'=>array(
	  'id' => 'membership_id',
	  'envelope' => 'envelope',
	  'include' => 'include',
	  'opted_out' => 'opted_out',
	  'expiration_date' => 'expiration_date',
	  'delivery_method' => 'delivery_method_av_group',
	  'comments' => 'comments',
	),
	'vname' => 'LBL_JOIN_FIELD',
	'type' => 'relate',
	'link' => "av_groups_accounts",
	'link_type' => 'relationship_info',
	'source' => 'non-db',
	'Importable' => false,
	'duplicate_merge'=> 'disabled',
);

$dictionary["av_Groups"]['fields']['contacts_fields'] = array(
	'name' => "av_groups_fields",
	'rname' => 'id',
	'relationship_fields'=>array(
	  'id' => 'membership_id',
	  'envelope' => 'envelope',
	  'include' => 'include',
	  'opted_out' => 'opted_out',
	  'expiration_date' => 'expiration_date',
	  'delivery_method' => 'delivery_method_av_group',
	  'comments' => 'comments',
	),
	'vname' => 'LBL_JOIN_FIELD',
	'type' => 'relate',
	'link' => "av_groups_contacts",
	'link_type' => 'relationship_info',
	'source' => 'non-db',
	'Importable' => false,
	'duplicate_merge'=> 'disabled',
);

$dictionary["av_Groups"]['fields']['membership_id'] = array (
	'name' => 'membership_id',
	'vname' => 'LBL_ID',
	'type' => 'id',
	'source' => 'non-db'
);

$dictionary["av_Groups"]['fields']['envelope'] = array(
	'name' => 'envelope',
	'vname' => 'LBL_ENVELOPE',
	'type' => 'text',
	'source' => 'non-db',
);

$dictionary["av_Groups"]['fields']['include'] = array(
	'name' => 'include',
	'vname' => 'LBL_INCLUDE',
	'type' => 'bool',
	'default' => true,
	'source' => 'non-db',
);

$dictionary["av_Groups"]['fields']['opted_out'] = array(
	'name' => 'opted_out',
	'vname' => 'LBL_OPTED_OUT',
	'type' => 'bool',
	'source' => 'non-db',
);

$dictionary["av_Groups"]['fields']['expiration_date'] = array(
	'name' => 'expiration_date',
	'vname' => 'LBL_EXPIRATION_DATE',
	'type' => 'date',
	'source' => 'non-db',
);

$dictionary["av_Groups"]['fields']['delivery_method'] = array(
	'name' => 'delivery_method',
	'vname' => 'LBL_DELIVERY_METHOD',
	'type' => 'enum',
	'source' => 'non-db',
	'options' => 'grp_delivery_method_list',
);

$dictionary["av_Groups"]['fields']['comments'] = array(
	'name' => 'comments',
	'vname' => 'LBL_COMMENTS',
	'type' => 'text',
	'source' => 'non-db',
);