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
  'TRANSACTION_FREQUENCY' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_TRANSACTION_FREQUENCY',
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
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
