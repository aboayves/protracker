<?php
// created: 2012-08-25 18:08:33
$dictionary["Account"]["fields"]["rt_offices_accounts_1"] = array (
  'name' => 'rt_offices_accounts_1',
  'type' => 'link',
  'relationship' => 'rt_offices_accounts_1',
  'source' => 'non-db',
  'vname' => 'LBL_RT_OFFICES_ACCOUNTS_1_FROM_RT_OFFICES_TITLE',
  'id_name' => 'rt_offices_accounts_1rt_offices_ida',
);
$dictionary["Account"]["fields"]["rt_offices_accounts_1_name"] = array (
  'name' => 'rt_offices_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RT_OFFICES_ACCOUNTS_1_FROM_RT_OFFICES_TITLE',
  'save' => true,
  'id_name' => 'rt_offices_accounts_1rt_offices_ida',
  'link' => 'rt_offices_accounts_1',
  'table' => 'rt_offices',
  'module' => 'rt_Offices',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["rt_offices_accounts_1rt_offices_ida"] = array (
  'name' => 'rt_offices_accounts_1rt_offices_ida',
  'type' => 'link',
  'relationship' => 'rt_offices_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RT_OFFICES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
