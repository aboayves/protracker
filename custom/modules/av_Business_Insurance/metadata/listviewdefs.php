<?php
$module_name = 'av_Business_Insurance';
$OBJECT_NAME = 'AV_BUSINESS_INSURANCE';
$listViewDefs [$module_name] = 
array (
  'BUSINESS_NAME' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_BUSINESS_NAME',
    'width' => '10%',
    'link' => 'true',
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
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
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => false,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
  'COVERED_LOCATIONS' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_COVERED_LOCATIONS',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => false,
    'sortable' => false,
  ),
  'DEDUCTIBLE' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_DEDUCTIBLE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'START_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_START_DATE',
    'width' => '10%',
  ),
  'PROPERTY' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PROPERTY',
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
  'PREMIUM_FREQUENCY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PREMIUM_FREQUENCY',
    'width' => '10%',
  ),
);
?>
