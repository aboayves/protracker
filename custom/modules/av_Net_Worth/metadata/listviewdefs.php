<?php
$module_name = 'av_Net_Worth';
$listViewDefs [$module_name] = 
array (
  'ACCOUNTS_NAME' => 
  array (
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNTS_ID',
    'width' => '15%',
    'default' => true,
  ),
  'GRAND_TOTAL' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_GRAND_TOTAL',
    'currency_format' => true,
    'width' => '15%',
    'default' => true,
  ),
  'NET_WORTH_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_NET_WORTH_DATE',
    'width' => '10%',
  ),
  'MANAGED_ASSETS' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MANAGED_ASSETS',
    'currency_format' => true,
    'width' => '15%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '12%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'DELIVERY_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DELIVERY_DATE',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'MANAGED_ASSETS_C' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_MANAGED_ASSETS',
    'currency_format' => true,
    'width' => '10%',
  ),
);
?>
