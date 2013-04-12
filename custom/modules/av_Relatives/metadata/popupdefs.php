<?php
$popupMeta = array (
    'moduleMain' => 'av_Relatives',
    'varName' => 'av_Relatives',
    'orderBy' => 'av_relatives.name',
    'whereClauses' => array (
  'accounts_name' => 'av_relatives.accounts_name',
  'contacts_name' => 'av_relatives.contacts_name',
  'type' => 'av_relatives.type',
  'ok_to_speak_to' => 'av_relatives.ok_to_speak_to',
),
    'searchInputs' => array (
  4 => 'accounts_name',
  5 => 'contacts_name',
  6 => 'type',
  7 => 'ok_to_speak_to',
),
    'searchdefs' => array (
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
    'id' => 'RELATIVE_ID',
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
  'ok_to_speak_to' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_OK_TO_SPEAK_TO',
    'width' => '10%',
    'name' => 'ok_to_speak_to',
  ),
),
);
