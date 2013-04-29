<?php
$module_name = 'av_Help';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'VIEW' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_VIEW',
    'width' => '10%',
  ),
  'HELPID' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_HELPID',
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
