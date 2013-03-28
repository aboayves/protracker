<?php
$popupMeta = array (
    'moduleMain' => 'av_Beneficiaries',
    'varName' => 'av_Beneficiaries',
    'orderBy' => 'av_beneficiaries.name',
    'whereClauses' => array (
  'name' => 'av_beneficiaries.name',
  'av_accounts_name' => 'av_beneficiaries.av_accounts_name',
  'type' => 'av_beneficiaries.type',
  'percent' => 'av_beneficiaries.percent',
  'date_verified' => 'av_beneficiaries.date_verified',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'av_accounts_name',
  5 => 'type',
  6 => 'percent',
  7 => 'date_verified',
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
  'percent' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PERCENT',
    'width' => '10%',
    'name' => 'percent',
  ),
  'date_verified' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_VERIFIED',
    'width' => '10%',
    'name' => 'date_verified',
  ),
),
);
