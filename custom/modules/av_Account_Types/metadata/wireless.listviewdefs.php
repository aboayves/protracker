<?php
$module_name = 'av_Account_Types';
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
  'IS_BENEFICIARY_REQUIRED' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_IS_BENEFICIARY_REQUIRED',
    'width' => '10%',
  ),
  'RETIREMENT_PLAN_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_RETIREMENT_PLAN_TYPE',
    'width' => '10%',
  ),
  'REPORT_SORT' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_REPORT_SORT',
    'width' => '10%',
  ),
  'SCHEDULE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_SCHEDULE',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
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
