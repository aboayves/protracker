<?php
$module_name = 'av_Homeowners_Insurance';
$OBJECT_NAME = 'AV_HOMEOWNERS_INSURANCE';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'name',
    'width' => '10%',
    'default' => true,
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => true,
  ),
  'POLICY_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_POLICY_NUMBER',
    'width' => '10%',
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'ACCOUNTS_AV_HOMEOWNERS_INSURANCE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_HOMEOWNERS_INSURANCE_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_HOMEOWNERS_INSURANCE_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => true,
  ),
  'PROPERTY' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PROPERTY',
    'width' => '10%',
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
  'TEAM_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
    'sortable' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => false,
    'sortable' => false,
  ),
  'STATUS_ID' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DOC_STATUS',
    'width' => '10%',
    'default' => false,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'SUBCATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => false,
  ),
  'POLICY_FORM' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_POLICY_FORM',
    'width' => '10%',
  ),
  'PREMIUM_FREQUENCY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PREMIUM_FREQUENCY',
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
  'AGENT_NAME' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_AGENT_NAME',
    'width' => '10%',
  ),
  'DEDUCTIBLE' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_DEDUCTIBLE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'PERSONAL_PROPERTY' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PERSONAL_PROPERTY',
    'width' => '10%',
  ),
);
?>
