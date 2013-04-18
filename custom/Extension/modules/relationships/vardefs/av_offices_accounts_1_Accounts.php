<?php
// created: 2012-08-25 18:08:33
$dictionary["Account"]["fields"]["av_offices_accounts_1"] = array (
  'name' => 'av_offices_accounts_1',
  'type' => 'link',
  'relationship' => 'av_offices_accounts_1',
  'source' => 'non-db',
  'vname' => 'LBL_RT_OFFICES_ACCOUNTS_1_FROM_RT_OFFICES_TITLE',
  'id_name' => 'av_offices_accounts_1av_offices_ida',
);
$dictionary["Account"]["fields"]["av_offices_accounts_1_name"] = array (
  'name' => 'av_offices_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT_OFFICES_ACCOUNTS_1_FROM_RT_OFFICES_TITLE',
  'save' => true,
  'id_name' => 'av_offices_accounts_1av_offices_ida',
  'link' => 'av_offices_accounts_1',
  'table' => 'av_offices',
  'module' => 'av_Offices',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["av_offices_accounts_1av_offices_ida"] = array (
  'name' => 'av_offices_accounts_1av_offices_ida',
  'type' => 'link',
  'relationship' => 'av_offices_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RT_OFFICES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
