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
  'ACCOUNTS_AV_GIFT_TAX_CREDITS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_GIFT_TAX_CREDITS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_GIFT_TAX_CREDITS_1ACCOUNTS_IDA',
    'width' => '15%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '15%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'CONTACT_ID' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_CONTACT_ID',
    'width' => '10%',
  ),
);
?>
