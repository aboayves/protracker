<?php
$popupMeta = array (
    'moduleMain' => 'av_Wills',
    'varName' => 'av_Wills',
    'orderBy' => 'av_wills.name',
    'whereClauses' => array (
  'document_name' => 'av_wills.document_name',
  'accounts_name' => 'av_wills.accounts_name',
  'contacts_name' => 'av_wills.contacts_name',
  'active_date' => 'av_wills.active_date',
),
    'searchInputs' => array (
  4 => 'document_name',
  5 => 'accounts_name',
  6 => 'contacts_name',
  7 => 'active_date',
),
    'searchdefs' => array (
  'document_name' => 
  array (
    'name' => 'document_name',
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
  'active_date' => 
  array (
    'name' => 'active_date',
    'width' => '10%',
  ),
),
);
