<?php
$module_name = 'av_Social_Security';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '5%',
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
  'YEAR_OF_ESTIMATE' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_YEAR_OF_ESTIMATE',
    'width' => '5%',
  ),
  'RETIREMENT_AT_AGE_62' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_RETIREMENT_AT_AGE_62',
    'currency_format' => true,
    'width' => '10%',
  ),
  'RETIREMENT_AT_AGE_67' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_RETIREMENT_AT_AGE_67',
    'currency_format' => true,
    'width' => '10%',
  ),
  'RETIREMENT_AT_AGE_70' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_RETIREMENT_AT_AGE_70',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DISABILITY' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_DISABILITY',
    'currency_format' => true,
    'width' => '10%',
  ),
  'CHILD' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_CHILD',
    'currency_format' => true,
    'width' => '10%',
  ),
  'SPOUSE' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_SPOUSE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'RETIRED_SPOUSE' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_RETIRED_SPOUSE',
    'currency_format' => true,
    'width' => '12%',
  ),
  'FAMILY' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_FAMILY',
    'currency_format' => true,
    'width' => '12%',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '8%',
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
