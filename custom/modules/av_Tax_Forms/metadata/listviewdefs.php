<?php
$module_name = 'av_Tax_Forms';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'RETURN_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_RETURN_TYPE',
    'width' => '10%',
  ),
  'DISTRICT' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DISTRICT',
    'width' => '10%',
  ),
  'RESIDENCY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_RESIDENCY',
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
