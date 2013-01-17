<?php
$popupMeta = array (
    'moduleMain' => 'av_Accounts',
    'varName' => 'av_Accounts',
    'orderBy' => 'av_accounts.name',
    'whereClauses' => array (
  'name' => 'av_accounts.name',
),
    'searchInputs' => array (
  0 => 'av_accounts_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
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
