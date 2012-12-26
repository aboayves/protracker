<?php
$popupMeta = array (
    'moduleMain' => 'av_Account_Types',
    'varName' => 'av_Account_Types',
    'orderBy' => 'av_account_types.name',
    'whereClauses' => array (
  'name' => 'av_account_types.name',
  'description' => 'av_account_types.description',
  'favorites_only' => 'av_account_types.favorites_only',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'description',
  5 => 'favorites_only',
),
    'searchdefs' => array (
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
  'favorites_only' => 
  array (
    'name' => 'favorites_only',
    'label' => 'LBL_FAVORITES_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
),
);
