<?php
$popupMeta = array (
    'moduleMain' => 'av_Pensions',
    'varName' => 'av_Pensions',
    'orderBy' => 'av_pensions.name',
    'whereClauses' => array (
  'name' => 'av_pensions.name',
  'accounts_name' => 'av_pensions.accounts_name',
  'contacts_name' => 'av_pensions.contacts_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'accounts_name',
  5 => 'contacts_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
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
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'name' => 'contacts_name',
  ),
),
);
