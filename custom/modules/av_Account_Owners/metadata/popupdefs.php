<?php
$popupMeta = array (
    'moduleMain' => 'av_Account_Owners',
    'varName' => 'av_Account_Owners',
    'orderBy' => 'av_account_owners.name',
    'whereClauses' => array (
  'av_accounts_name' => 'av_account_owners.av_accounts_name',
  'contacts_name' => 'av_account_owners.contacts_name',
  'ownership_percent' => 'av_account_owners.ownership_percent',
),
    'searchInputs' => array (
  4 => 'av_accounts_name',
  5 => 'contacts_name',
  6 => 'ownership_percent',
),
    'searchdefs' => array (
  'av_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'width' => '10%',
    'label' => 'LBL_AV_ACCOUNTS_NAME',
    'id' => 'AV_ACCOUNTS_ID',
    'name' => 'av_accounts_name',
  ),
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'OWNER_ID',
    'width' => '10%',
    'name' => 'contacts_name',
  ),
  'ownership_percent' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_OWNERSHIP_PERCENT',
    'width' => '10%',
    'name' => 'ownership_percent',
  ),
),
);
