<?php
$popupMeta = array (
    'moduleMain' => 'av_Professionals',
    'varName' => 'av_Professionals',
    'orderBy' => 'av_professionals.name',
    'whereClauses' => array (
  'contacts_name' => 'av_professionals.contacts_name',
  'type' => 'av_professionals.type',
  'accounts_name' => 'av_professionals.accounts_name',
),
    'searchInputs' => array (
  4 => 'contacts_name',
  5 => 'type',
  6 => 'accounts_name',
),
    'searchdefs' => array (
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'PROFESSIONAL_ID',
    'width' => '10%',
    'name' => 'contacts_name',
  ),
  'type' => 
  array (
    'type' => 'varchar',
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
),
);
