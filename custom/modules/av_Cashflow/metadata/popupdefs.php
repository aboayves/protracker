<?php
$popupMeta = array (
    'moduleMain' => 'av_Cashflow',
    'varName' => 'av_Cashflow',
    'orderBy' => 'av_cashflow.name',
    'whereClauses' => array (
  'year' => 'av_cashflow.year',
  'document_name' => 'av_cashflow.document_name',
  'account_name' => 'av_cashflow.account_name',
),
    'searchInputs' => array (
  4 => 'year',
  5 => 'document_name',
  6 => 'account_name',
),
    'searchdefs' => array (
  'year' => 
  array (
    'type' => 'int',
    'label' => 'LBL_YEAR',
    'width' => '10%',
    'name' => 'year',
  ),
  'document_name' => 
  array (
    'name' => 'document_name',
    'width' => '10%',
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
),
);
