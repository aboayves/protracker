<?php
$module_name = 'av_Life_Insurance';
$OBJECT_NAME = 'AV_LIFE_INSURANCE';
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
  'DEATH_BENEFIT' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_DEATH_BENEFIT',
    'currency_format' => true,
    'width' => '10%',
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
  'FACE_VALUE' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_FACE_VALUE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'TERM' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_TERM',
    'width' => '10%',
  ),
);
?>
