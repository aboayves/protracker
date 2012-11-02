<?php
$module_name = 'av_Goals';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TARGET_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_TARGET_DATE',
    'width' => '10%',
  ),
  'PROGRESS' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PROGRESS',
    'currency_format' => true,
    'width' => '5%',
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
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
);
?>
