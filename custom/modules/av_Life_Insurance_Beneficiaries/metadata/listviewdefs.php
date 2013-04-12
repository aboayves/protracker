<?php
$module_name = 'av_Life_Insurance_Beneficiaries';
$listViewDefs [$module_name] = 
array (
  'LIFE_INSURANCE_ID_TYPE' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_LIFE_INSURANCE_ID_TYPE',
    'id' => 'LIFE_INSURANCE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'BENEFICIARY_ID_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BENEFICIARY_ID_NAME',
    'id' => 'BENEFICIARY_ID',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'PERCENT' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_PERCENT',
    'width' => '10%',
  ),
  'DATE_VERIFIED' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_VERIFIED',
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
