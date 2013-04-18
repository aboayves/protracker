<?php
$popupMeta = array (
    'moduleMain' => 'av_Account_Histories',
    'varName' => 'av_Account_Histories',
    'orderBy' => 'av_account_histories.name',
    'whereClauses' => array (
  'value' => 'av_account_histories.value',
  'value_date' => 'av_account_histories.value_date',
),
    'searchInputs' => array (
  4 => 'value',
  5 => 'value_date',
),
    'searchdefs' => array (
  'value' => 
  array (
    'type' => 'currency',
    'align' => 'right',
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
),
);
