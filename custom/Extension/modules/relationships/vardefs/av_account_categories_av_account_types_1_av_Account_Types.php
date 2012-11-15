<?php
// created: 2012-11-15 06:01:31
$dictionary["av_Account_Types"]["fields"]["av_account_categories_av_account_types_1"] = array (
  'name' => 'av_account_categories_av_account_types_1',
  'type' => 'link',
  'relationship' => 'av_account_categories_av_account_types_1',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNT_CATEGORIES_AV_ACCOUNT_TYPES_1_FROM_AV_ACCOUNT_CATEGORIES_TITLE',
  'id_name' => 'av_account296eegories_ida',
);
$dictionary["av_Account_Types"]["fields"]["av_account_categories_av_account_types_1_name"] = array (
  'name' => 'av_account_categories_av_account_types_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AV_ACCOUNT_CATEGORIES_AV_ACCOUNT_TYPES_1_FROM_AV_ACCOUNT_CATEGORIES_TITLE',
  'save' => true,
  'id_name' => 'av_account296eegories_ida',
  'link' => 'av_account_categories_av_account_types_1',
  'table' => 'av_account_categories',
  'module' => 'av_Account_Categories',
  'rname' => 'name',
);
$dictionary["av_Account_Types"]["fields"]["av_account296eegories_ida"] = array (
  'name' => 'av_account296eegories_ida',
  'type' => 'link',
  'relationship' => 'av_account_categories_av_account_types_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AV_ACCOUNT_CATEGORIES_AV_ACCOUNT_TYPES_1_FROM_AV_ACCOUNT_TYPES_TITLE',
);
