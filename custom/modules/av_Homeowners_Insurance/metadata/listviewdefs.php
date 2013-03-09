<?php
$module_name = 'av_Homeowners_Insurance';
$OBJECT_NAME = 'AV_HOMEOWNERS_INSURANCE';
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
    'width' => '10%',
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
  'PROPERTY' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PROPERTY',
    'width' => '10%',
  ),
  'POLICY_FORM' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_POLICY_FORM',
    'width' => '10%',
  ),
);
?>
