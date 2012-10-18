<?php
// created: 2012-10-18 20:59:39
$dictionary["av_IRD"]["fields"]["accounts_av_ird_1"] = array (
  'name' => 'accounts_av_ird_1',
  'type' => 'link',
  'relationship' => 'accounts_av_ird_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_IRD_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_av_ird_1accounts_ida',
);
$dictionary["av_IRD"]["fields"]["accounts_av_ird_1_name"] = array (
  'name' => 'accounts_av_ird_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_IRD_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_av_ird_1accounts_ida',
  'link' => 'accounts_av_ird_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["av_IRD"]["fields"]["accounts_av_ird_1accounts_ida"] = array (
  'name' => 'accounts_av_ird_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_av_ird_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AV_IRD_1_FROM_AV_IRD_TITLE',
);
