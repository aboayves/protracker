<?php
$module_name = 'av_Commissions';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TYPE',
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
  'COMMISSION' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_COMMISSION',
    'currency_format' => true,
    'width' => '10%',
  ),
  'COMMISSION_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_COMMISSION_DATE',
    'width' => '10%',
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
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'SCHEDULE' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SCHEDULE',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
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
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
);
?>
