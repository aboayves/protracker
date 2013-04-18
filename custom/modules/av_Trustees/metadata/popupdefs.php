<?php
$popupMeta = array (
    'moduleMain' => 'av_Trustees',
    'varName' => 'av_Trustees',
    'orderBy' => 'av_trustees.name',
    'whereClauses' => array (
  'av_accounts_name' => 'av_trustees.av_accounts_name',
  'contacts_name' => 'av_trustees.contacts_name',
  'type' => 'av_trustees.type',
),
    'searchInputs' => array (
  4 => 'av_accounts_name',
  5 => 'contacts_name',
  6 => 'type',
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
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'TRUSTEE_ID',
    'width' => '10%',
    'name' => 'contacts_name',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
),
);
