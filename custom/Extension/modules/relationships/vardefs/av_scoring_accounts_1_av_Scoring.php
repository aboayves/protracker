<?php
// created: 2012-10-16 20:49:48
$dictionary["av_Scoring"]["fields"]["av_scoring_accounts_1"] = array (
  'name' => 'av_scoring_accounts_1',
  'type' => 'link',
  'relationship' => 'av_scoring_accounts_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_SCORING_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'av_scoring_accounts_1accounts_idb',
);
$dictionary["av_Scoring"]["fields"]["av_scoring_accounts_1_name"] = array (
  'name' => 'av_scoring_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_SCORING_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'av_scoring_accounts_1accounts_idb',
  'link' => 'av_scoring_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["av_Scoring"]["fields"]["av_scoring_accounts_1accounts_idb"] = array (
  'name' => 'av_scoring_accounts_1accounts_idb',
  'type' => 'link',
  'relationship' => 'av_scoring_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AV_SCORING_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
