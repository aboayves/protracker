<?php
$popupMeta = array (
    'moduleMain' => 'av_Transactions',
    'varName' => 'av_Transactions',
    'orderBy' => 'av_transactions.name',
    'whereClauses' => array (
  'transaction_date' => 'av_transactions.transaction_date',
  'av_accounts_name' => 'av_transactions.av_accounts_name',
  'type' => 'av_transactions.type',
  'related_account' => 'av_transactions.related_account',
  'amount' => 'av_transactions.amount',
  'net_amount' => 'av_transactions.net_amount',
),
    'searchInputs' => array (
  4 => 'transaction_date',
  5 => 'av_accounts_name',
  6 => 'type',
  7 => 'related_account',
  8 => 'amount',
  9 => 'net_amount',
),
    'searchdefs' => array (
  'transaction_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TRANSACTION_DATE',
    'width' => '10%',
    'name' => 'transaction_date',
  ),
  'av_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNTS_NAME',
    'id' => 'ASSET_ID',
    'width' => '10%',
    'name' => 'av_accounts_name',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'related_account' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RELATED_ACCOUNT',
    'width' => '10%',
    'name' => 'related_account',
  ),
  'amount' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'amount',
  ),
  'net_amount' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'label' => 'LBL_NET_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'net_amount',
  ),
),
);
