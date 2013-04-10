<?php
$module_name = 'av_Net_Worth';
$listViewDefs [$module_name] = 
array (
  'ACCOUNTS_AV_NET_WORTH_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_NET_WORTH_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_NET_WORTHACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'GRAND_TOTAL' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_GRAND_TOTAL',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
