<?php
$popupMeta = array (
    'moduleMain' => 'av_Goals',
    'varName' => 'av_Goals',
    'orderBy' => 'av_goals.name',
    'whereClauses' => array (
  'name' => 'av_goals.name',
  'type' => 'av_goals.type',
  'accounts_name' => 'av_goals.accounts_name',
  'amount' => 'av_goals.amount',
  'progress' => 'av_goals.progress',
  'target_date' => 'av_goals.target_date',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'type',
  5 => 'accounts_name',
  6 => 'amount',
  7 => 'progress',
  8 => 'target_date',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'name' => 'accounts_name',
  ),
  'amount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'amount',
  ),
  'progress' => 
  array (
    'type' => 'integer',
    'label' => 'LBL_PROGRESS',
    'width' => '10%',
    'name' => 'progress',
  ),
  'target_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TARGET_DATE',
    'width' => '10%',
    'name' => 'target_date',
  ),
),
);
