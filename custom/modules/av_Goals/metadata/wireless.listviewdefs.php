<?php
$module_name = 'av_Goals';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
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
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'PROGRESS' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PROGRESS',
    'width' => '10%',
  ),
  'TARGET_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_TARGET_DATE',
    'width' => '10%',
  ),
);
?>
