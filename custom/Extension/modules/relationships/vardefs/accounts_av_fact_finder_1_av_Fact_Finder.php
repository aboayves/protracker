<?php
// created: 2012-11-09 03:40:20
$dictionary["av_Fact_Finder"]["fields"]["accounts_av_fact_finder_1"] = array (
  'name' => 'accounts_av_fact_finder_1',
  'type' => 'link',
  'relationship' => 'accounts_av_fact_finder_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_FACT_FINDER_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_av_fact_finder_1accounts_ida',
);
$dictionary["av_Fact_Finder"]["fields"]["accounts_av_fact_finder_1_name"] = array (
  'name' => 'accounts_av_fact_finder_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_FACT_FINDER_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_av_fact_finder_1accounts_ida',
  'link' => 'accounts_av_fact_finder_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["av_Fact_Finder"]["fields"]["accounts_av_fact_finder_1accounts_ida"] = array (
  'name' => 'accounts_av_fact_finder_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_av_fact_finder_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AV_FACT_FINDER_1_FROM_AV_FACT_FINDER_TITLE',
);
