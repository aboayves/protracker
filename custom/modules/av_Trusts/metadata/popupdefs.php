<?php
$popupMeta = array (
    'moduleMain' => 'av_Trusts',
    'varName' => 'av_Trusts',
    'orderBy' => 'av_trusts.name',
    'whereClauses' => array (
  'document_name' => 'av_trusts.document_name',
  'type' => 'av_trusts.type',
  'accounts_name' => 'av_trusts.accounts_name',
  'contacts_name' => 'av_trusts.contacts_name',
  'active_date' => 'av_trusts.active_date',
),
    'searchInputs' => array (
  4 => 'document_name',
  5 => 'type',
  6 => 'accounts_name',
  7 => 'contacts_name',
  8 => 'active_date',
),
    'searchdefs' => array (
  'document_name' => 
  array (
    'name' => 'document_name',
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
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'name' => 'contacts_name',
  ),
  'active_date' => 
  array (
    'name' => 'active_date',
    'width' => '10%',
  ),
),
);
