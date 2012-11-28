<?php
$module_name = 'av_Service_Team';
$listViewDefs [$module_name] = 
array (
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'ROLE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_ROLE',
    'width' => '10%',
  ),
);
?>
