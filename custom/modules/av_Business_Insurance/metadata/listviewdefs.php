<?php
$module_name = 'av_Business_Insurance';
$OBJECT_NAME = 'AV_BUSINESS_INSURANCE';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'BUSINESS_NAME' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_BUSINESS_NAME',
    'width' => '10%',
  ),
  'ACCOUNTS_AV_BUSINESS_INSURANCE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_BUSINESS_INSURANCE_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_BUSINESS_INSURANCE_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'POLICY_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_POLICY_NUMBER',
    'width' => '10%',
  ),
  'AGENT_NAME' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_AGENT_NAME',
    'width' => '10%',
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => true,
  ),
  'SUBCATEGORY_ID' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => true,
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => true,
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'name',
    'width' => '10%',
    'default' => false,
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
  'ISSUE_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
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
  'PREMIUM' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_PREMIUM',
    'currency_format' => true,
    'width' => '10%',
  ),
  'START_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_START_DATE',
    'width' => '10%',
  ),
  'PREMIUM_FREQUENCY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PREMIUM_FREQUENCY',
    'width' => '10%',
  ),
  'TEAM_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
    'sortable' => false,
  ),
);
?>
