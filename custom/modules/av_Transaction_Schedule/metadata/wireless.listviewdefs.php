<?php
$module_name = 'av_Transaction_Schedule';
$listViewDefs [$module_name] = 
array (
  'AV_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNTS_NAME',
    'id' => 'ASSET_ID',
    'width' => '10%',
    'default' => true,
  ),
  'TRANSACTION_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TRANSACTION_TYPE',
    'width' => '10%',
  ),
  'NEXT_TRANSACTION_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_NEXT_TRANSACTION_DATE',
    'width' => '10%',
  ),
  'RELATED_ACCOUNT' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RELATED_ACCOUNT',
    'width' => '10%',
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'TRANSACTION_FREQUENCY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_TRANSACTION_FREQUENCY',
    'width' => '10%',
  ),
);
?>
