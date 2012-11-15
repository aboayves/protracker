<?php
$module_name = 'av_Payments';
$listViewDefs [$module_name] = 
array (
  'ACCOUNTS_AV_PAYMENTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_PAYMENTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_PAYMENTS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'REFERENCE_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_REFERENCE_NUMBER',
    'width' => '10%',
  ),
  'INVOICE_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_INVOICE_NUMBER',
    'width' => '10%',
  ),
  'DATE_PAID' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_PAID',
    'width' => '10%',
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DESCRIPTION',
    'width' => '10%',
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
