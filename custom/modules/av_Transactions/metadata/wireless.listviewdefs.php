<?php
$module_name = 'av_Transactions';
$listViewDefs [$module_name] = 
array (
  'TRANSACTION_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_TRANSACTION_DATE',
    'width' => '10%',
  ),
  'AV_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNTS_NAME',
    'id' => 'ASSET_ID',
    'width' => '10%',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
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
  'NET_AMOUNT' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_NET_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
);
?>
