<?php
$module_name = 'av_Health_Insurance';
$OBJECT_NAME = 'AV_HEALTH_INSURANCE';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'name',
    'width' => '15%',
    'default' => true,
  ),
  'AGENT_NAME' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_AGENT_NAME',
    'width' => '15%',
  ),
  'ACCOUNTS_AV_HEALTH_INSURANCE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_HEALTH_INSURANCE_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_HEALTH_INSURANCE_1ACCOUNTS_IDA',
    'width' => '15%',
    'default' => true,
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '15%',
  ),
  'POLICY_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_POLICY_NUMBER',
    'width' => '15%',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'STATUS_ID' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DOC_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => true,
  ),
  'SUBCATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => false,
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
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => false,
    'sortable' => false,
  ),
  'ISSUE_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_ISSUE_DATE',
    'width' => '10%',
  ),
  'START_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_START_DATE',
    'width' => '10%',
  ),
  'PREMIUM_DUE_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_PREMIUM_DUE_DATE',
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
