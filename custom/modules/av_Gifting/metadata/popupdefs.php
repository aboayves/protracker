<?php
$popupMeta = array (
    'moduleMain' => 'av_Gifting',
    'varName' => 'av_Gifting',
    'orderBy' => 'av_gifting.name',
    'whereClauses' => array (
  'name' => 'av_gifting.name',
  'contacts_name' => 'av_gifting.contacts_name',
  'accounts_name' => 'av_gifting.accounts_name',
  'recipient' => 'av_gifting.recipient',
  'date_of_gift' => 'av_gifting.date_of_gift',
  'value' => 'av_gifting.value',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'contacts_name',
  5 => 'accounts_name',
  6 => 'recipient',
  7 => 'date_of_gift',
  8 => 'value',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
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
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'name' => 'accounts_name',
  ),
  'recipient' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RECIPIENT',
    'width' => '10%',
    'name' => 'recipient',
  ),
  'date_of_gift' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_OF_GIFT',
    'width' => '10%',
    'name' => 'date_of_gift',
  ),
  'value' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'value',
  ),
),
);
