<?php
$popupMeta = array (
    'moduleMain' => 'av_Accounts',
    'varName' => 'av_Accounts',
    'orderBy' => 'av_accounts.name',
    'whereClauses' => array (
  'name' => 'av_accounts.name',
  'account_name' => 'av_accounts.account_name',
  'favorites_only' => 'av_accounts.favorites_only',
  'account_number' => 'av_accounts.account_number',
  'ownership_type' => 'av_accounts.ownership_type',
  'custodian' => 'av_accounts.custodian',
  'date_entered' => 'av_accounts.date_entered',
  'date_modified' => 'av_accounts.date_modified',
  'modified_user_id' => 'av_accounts.modified_user_id',
  'value' => 'av_accounts.value',
  'value_date' => 'av_accounts.value_date',
  'is_aum' => 'av_accounts.is_aum',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'account_name',
  5 => 'favorites_only',
  6 => 'account_number',
  7 => 'ownership_type',
  8 => 'custodian',
  9 => 'date_entered',
  10 => 'date_modified',
  11 => 'modified_user_id',
  12 => 'value',
  13 => 'value_date',
  14 => 'is_aum',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'account_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'account_id',
    'width' => '10%',
    'name' => 'account_name',
  ),
  'favorites_only' => 
  array (
    'name' => 'favorites_only',
    'label' => 'LBL_FAVORITES_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
  'account_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
    'name' => 'account_number',
  ),
  'ownership_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_OWNERSHIP_TYPE',
    'width' => '10%',
    'name' => 'ownership_type',
  ),
  'custodian' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_CUSTODIAN',
    'width' => '10%',
    'name' => 'custodian',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'name' => 'date_modified',
  ),
  'modified_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'label' => 'LBL_MODIFIED',
    'width' => '10%',
    'name' => 'modified_user_id',
  ),
  'value' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'value',
  ),
  'value_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VALUE_DATE',
    'width' => '10%',
    'name' => 'value_date',
  ),
  'is_aum' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_IS_AUM',
    'width' => '10%',
    'name' => 'is_aum',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'ACCOUNT_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
    'name' => 'account_number',
  ),
  'ACCOUNTS_AV_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_av_accounts_name',
  ),
  'OWNERSHIP_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_OWNERSHIP_TYPE',
    'width' => '10%',
    'name' => 'ownership_type',
  ),
  'VALUE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'value',
  ),
  'VALUE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_VALUE_DATE',
    'width' => '10%',
    'name' => 'value_date',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_modified',
  ),
),
);
