<?php
$module_name = 'av_Service_Team';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNTS_AV_SERVICE_TEAM_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_SERVICE_TEAM_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_SERVICE_TEAM_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ROLE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_ROLE',
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
);
?>
