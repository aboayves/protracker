<?php
// created: 2012-04-25 15:09:16
$dictionary["Contact"]["fields"]["av_groups_contacts"] = array (
  'name' => 'av_groups_contacts',
  'type' => 'link',
  'relationship' => 'av_groups_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_AV_GROUPS_CONTACTS_FROM_AV_GROUPS_TITLE',
);

$dictionary["Contact"]['fields']['av_groups_fields'] = array(
	'name' => "av_groups_fields",
	'rname' => 'id',
	'relationship_fields'=>array(
	  'id' => 'membership_id',
	  'envelope' => 'envelope',
	  'include' => 'include',
	  'opted_out' => 'opted_out',
	  'expiration_date' => 'expiration_date',
	  'delivery_method' => 'delivery_method',
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

$dictionary["Contact"]['fields']['membership_id'] = array (
	'name' => 'membership_id',
	'vname' => 'LBL_ID',
	'type' => 'id',
	'source' => 'non-db'
);

$dictionary["Contact"]['fields']['envelope'] = array(
	'name' => 'envelope',
	'vname' => 'LBL_ENVELOPE',
	'type' => 'text',
	'source' => 'non-db',
);

$dictionary["Contact"]['fields']['include'] = array(
	'name' => 'include',
	'vname' => 'LBL_INCLUDE',
	'type' => 'bool',
	'default' => true,
	'source' => 'non-db',
);

$dictionary["Contact"]['fields']['opted_out'] = array(
	'name' => 'opted_out',
	'vname' => 'LBL_OPTED_OUT',
	'type' => 'bool',
	'source' => 'non-db',
);

$dictionary["Contact"]['fields']['expiration_date'] = array(
	'name' => 'expiration_date',
	'vname' => 'LBL_EXPIRATION_DATE',
	'type' => 'date',
	'source' => 'non-db',
);

$dictionary["Contact"]['fields']['delivery_method'] = array(
	'name' => 'delivery_method',
	'vname' => 'LBL_DELIVERY_METHOD',
	'type' => 'enum',
	'options' => 'grp_delivery_method_list',
	'source' => 'non-db',
);

$dictionary["Contact"]['fields']['comments'] = array(
	'name' => 'comments',
	'vname' => 'LBL_COMMENTS',
	'type' => 'text',
	'source' => 'non-db',
);