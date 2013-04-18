<?php
$module_name = 'av_Gift_Tax_Credits';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '30%',
    'default' => true,
  ),
  'CREDIT_AMOUNT' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_CREDIT_AMOUNT',
    'currency_format' => true,
    'width' => '15%',
  ),
  'DATE_CREDIT_USED' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_CREDIT_USED',
    'width' => '15%',
  ),
);
?>
