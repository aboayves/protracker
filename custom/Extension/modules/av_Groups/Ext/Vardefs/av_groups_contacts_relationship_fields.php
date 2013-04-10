<?php
$dictionary["av_Groups"]["fields"]['av_groups_contacts_fields'] = array(
	'name' => "av_groups_contacts_fields",
	'rname' => 'id',
	'relationship_fields'=>array(
	  'mail' => 'av_groups_contacts_mail',
	  'email' => 'av_groups_contacts_email',
	),
	'vname' => 'LBL_JOIN_FIELD?',
	'type' => 'relate',
	'link' => "av_groups_contacts",
	'link_type' => 'relationship_info',
	'source' => 'non-db',
	'Importable' => false,
	'duplicate_merge'=> 'disabled',
	'join_name' => "av_groups_contacts_fields_join",
  );
$dictionary["av_Groups"]["fields"]['av_groups_contacts_mail'] = array(
	'name' => "av_groups_contacts_mail",
	'type' => 'html',
	'source' => 'non-db',
	'vname' => 'LBL_MAIL',
	'massupdate' => false,
  );
$dictionary["av_Groups"]["fields"]['av_groups_contacts_email'] = array(
	'name' => "av_groups_contacts_email",
	'type' => 'html',
	'source' => 'non-db',
	'vname' => 'LBL_EMAIL',
	'massupdate' => false,
  );