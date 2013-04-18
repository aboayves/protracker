<?php
$module_name = 'av_Services';
$listViewDefs [$module_name] = 
array (
  'ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'SERVICE_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_SERVICE_TYPE',
    'width' => '10%',
	'link' => true,
  ),
  'FREQUENCY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_FREQUENCY',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'REPORT_NAME' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REPORT_NAME',
    'width' => '10%',
  ),
  'HOURLY_RATE' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_HOURLY_RATE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DATE_START' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DATE_START',
    'width' => '10%',
  ),
  'DATE_END' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DATE_END',
    'width' => '10%',
  ),
  'FLAT_FEE' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_FLAT_FEE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'REPORT_FORMAT' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REPORT_FORMAT',
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
