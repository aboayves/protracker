<?php
$module_name = 'av_Services';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '15%',
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
  'ACCOUNTS_AV_SERVICES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_SERVICES_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_SERVICES_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
  ),
  'REPORT_FORMAT' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_REPORT_FORMAT',
    'width' => '10%',
  ),
  'REPORT_NAME' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_REPORT_NAME',
    'width' => '10%',
  ),
  'FREQUENCY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_FREQUENCY',
    'width' => '10%',
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
