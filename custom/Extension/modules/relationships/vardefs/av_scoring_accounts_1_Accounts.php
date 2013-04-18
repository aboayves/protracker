<?php
// created: 2012-10-16 20:49:48
$dictionary["Account"]["fields"]["av_scoring_accounts_1"] = array (
  'name' => 'av_scoring_accounts_1',
  'type' => 'link',
  'relationship' => 'av_scoring_accounts_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_SCORING_ACCOUNTS_1_FROM_AV_SCORING_TITLE',
  'id_name' => 'av_scoring_accounts_1av_scoring_ida',
);
$dictionary["Account"]["fields"]["av_scoring_accounts_1_name"] = array (
  'name' => 'av_scoring_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_SCORING_ACCOUNTS_1_FROM_AV_SCORING_TITLE',
  'save' => true,
  'id_name' => 'av_scoring_accounts_1av_scoring_ida',
  'link' => 'av_scoring_accounts_1',
  'table' => 'av_scoring',
  'module' => 'av_Scoring',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["av_scoring_accounts_1av_scoring_ida"] = array (
  'name' => 'av_scoring_accounts_1av_scoring_ida',
  'type' => 'link',
  'relationship' => 'av_scoring_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AV_SCORING_ACCOUNTS_1_FROM_AV_SCORING_TITLE',
);
