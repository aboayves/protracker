<?php
$module_name = 'av_Disability_Insurance';
$OBJECT_NAME = 'AV_DISABILITY_INSURANCE';
$listViewDefs [$module_name] = 
array (
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'link' => 'true',
  ),
  'AV_COMPANIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_COMPANIES_NAME',
    'id' => 'COMPANY_ID',
    'width' => '10%',
    'default' => true,
  ),
  'POLICY_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_POLICY_NUMBER',
    'width' => '15%',
    'link' => 'true',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'OWNER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'ISSUE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_ISSUE_DATE',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'PREMIUM_DUE_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_PREMIUM_DUE_DATE',
    'width' => '10%',
  ),
  'DEFINITION_OF_DISABILITY' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DEFINITION_OF_DISABILITY',
    'width' => '10%',
  ),
  'PREMIUM' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_PREMIUM',
    'currency_format' => true,
    'width' => '10%',
  ),
);
?>
