<?php
// created: 2012-11-14 18:46:33
$dictionary["av_Accounts"]["fields"]["av_accounts_av_companies_1"] = array (
  'name' => 'av_accounts_av_companies_1',
  'type' => 'link',
  'relationship' => 'av_accounts_av_companies_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_AV_COMPANIES_1_FROM_AV_COMPANIES_TITLE',
  'id_name' => 'av_accounts_av_companies_1av_companies_idb',
);
$dictionary["av_Accounts"]["fields"]["av_accounts_av_companies_1_name"] = array (
  'name' => 'av_accounts_av_companies_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNTS_AV_COMPANIES_1_FROM_AV_COMPANIES_TITLE',
  'save' => true,
  'id_name' => 'av_accounts_av_companies_1av_companies_idb',
  'link' => 'av_accounts_av_companies_1',
  'table' => 'av_companies',
  'module' => 'av_Companies',
  'rname' => 'name',
);
$dictionary["av_Accounts"]["fields"]["av_accounts_av_companies_1av_companies_idb"] = array (
  'name' => 'av_accounts_av_companies_1av_companies_idb',
  'type' => 'link',
  'relationship' => 'av_accounts_av_companies_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AV_ACCOUNTS_AV_COMPANIES_1_FROM_AV_COMPANIES_TITLE',
);
