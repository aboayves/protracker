<?php
$popupMeta = array (
    'moduleMain' => 'av_Transaction_Schedule',
    'varName' => 'av_Transaction_Schedule',
    'orderBy' => 'av_transaction_schedule.name',
    'whereClauses' => array (
  'av_accounts_name' => 'av_transaction_schedule.av_accounts_name',
  'transaction_type' => 'av_transaction_schedule.transaction_type',
  'transaction_frequency' => 'av_transaction_schedule.transaction_frequency',
  'next_transaction_date' => 'av_transaction_schedule.next_transaction_date',
),
    'searchInputs' => array (
  4 => 'av_accounts_name',
  5 => 'transaction_type',
  6 => 'transaction_frequency',
  7 => 'next_transaction_date',
),
    'searchdefs' => array (
  'av_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNTS_NAME',
    'id' => 'ASSET_ID',
    'width' => '10%',
    'name' => 'av_accounts_name',
  ),
  'transaction_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TRANSACTION_TYPE',
    'width' => '10%',
    'name' => 'transaction_type',
  ),
  'transaction_frequency' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TRANSACTION_FREQUENCY',
    'width' => '10%',
    'name' => 'transaction_frequency',
  ),
  'next_transaction_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NEXT_TRANSACTION_DATE',
    'width' => '10%',
    'name' => 'next_transaction_date',
  ),
),
);
