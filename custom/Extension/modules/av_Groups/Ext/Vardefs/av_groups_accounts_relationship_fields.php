<?php
$dictionary["av_Groups"]["fields"]['av_groups_accounts_fields'] = array(
	'name' => "av_groups_accounts_fields",
	'rname' => 'id',
	'relationship_fields'=>array(
	  'mail' => 'av_groups_accounts_mail',
	  'email' => 'av_groups_accounts_email',
	),
	'vname' => 'LBL_JOIN_FIELD?',
	'type' => 'relate',
	'link' => "av_groups_accounts",
	'link_type' => 'relationship_info',
	'source' => 'non-db',
	'Importable' => false,
	'duplicate_merge'=> 'disabled',
	'join_name' => "av_groups_accounts_fields_join",
  );
$dictionary["av_Groups"]["fields"]['av_groups_accounts_mail'] = array(
	'name' => "av_groups_accounts_mail",
	'type' => 'html',
	'source' => 'non-db',
	'vname' => 'LBL_MAIL',
	'massupdate' => false,
  );
$dictionary["av_Groups"]["fields"]['av_groups_accounts_email'] = array(
	'name' => "av_groups_accounts_email",
	'type' => 'html',
	'source' => 'non-db',
	'vname' => 'LBL_EMAIL',
	'massupdate' => false,
  );