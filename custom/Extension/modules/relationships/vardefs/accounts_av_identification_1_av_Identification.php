<?php
// created: 2012-10-14 16:31:53
$dictionary["av_Identification"]["fields"]["accounts_av_identification_1"] = array (
  'name' => 'accounts_av_identification_1',
  'type' => 'link',
  'relationship' => 'accounts_av_identification_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_IDENTIFICATION_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_av_identification_1accounts_ida',
);
$dictionary["av_Identification"]["fields"]["accounts_av_identification_1_name"] = array (
  'name' => 'accounts_av_identification_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_IDENTIFICATION_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_av_identification_1accounts_ida',
  'link' => 'accounts_av_identification_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["av_Identification"]["fields"]["accounts_av_identification_1accounts_ida"] = array (
  'name' => 'accounts_av_identification_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_av_identification_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AV_IDENTIFICATION_1_FROM_AV_IDENTIFICATION_TITLE',
);
