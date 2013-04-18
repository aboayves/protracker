<?php
$popupMeta = array (
    'moduleMain' => 'av_Office_Gifts',
    'varName' => 'av_Office_Gifts',
    'orderBy' => 'av_office_gifts.name',
    'whereClauses' => array (
  'name' => 'av_office_gifts.name',
  'gift_date' => 'av_office_gifts.gift_date',
  'accounts_name' => 'av_office_gifts.accounts_name',
  'description' => 'av_office_gifts.description',
  'value' => 'av_office_gifts.value',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'gift_date',
  5 => 'accounts_name',
  6 => 'description',
  7 => 'value',
),
    'searchdefs' => array (
  'gift_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_GIFT_DATE',
    'width' => '10%',
    'name' => 'gift_date',
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
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
  'value' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'value',
  ),
),
);
