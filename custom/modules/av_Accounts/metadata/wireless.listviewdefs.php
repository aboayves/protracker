<?php
$module_name = 'av_Accounts';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ACCOUNT_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
  ),
  'AV_ACCOUNT_TYPES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNT_TYPES_NAME',
    'id' => 'ACCOUNT_TYPE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'VALUE' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'VALUE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_VALUE_DATE',
    'width' => '10%',
  ),
);
?>
