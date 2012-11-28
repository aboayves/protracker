<?php
$module_name = 'av_Final_Arrangements';
$OBJECT_NAME = 'AV_FINAL_ARRANGEMENTS';
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
  'ANNUITY_COMPANY' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_ANNUITY_COMPANY',
    'width' => '10%',
  ),
  'ANNUITY_AMOUNT' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_ANNUITY_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => true,
    'sortable' => false,
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
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
  'SUBCATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBCATEGORY',
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
  'TEAM_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
    'sortable' => false,
  ),
  'CONTACTS_AV_FINAL_ARRANGEMENTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_AV_FINAL_ARRANGEMENTS_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_AV_FINAL_ARRANGEMENTS_1CONTACTS_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'STATUS_ID' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DOC_STATUS',
    'width' => '10%',
    'default' => false,
  ),
  'ACCOUNTS_AV_FINAL_ARRANGEMENTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_FINAL_ARRANGEMENTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_FINAL_ARRANGEMENTS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'FILE_MIME_TYPE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MIME',
    'width' => '10%',
    'default' => false,
  ),
  'ANNUITY_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_ANNUITY_DATE',
    'width' => '10%',
  ),
  'ANNUITY_INTEREST_RATE' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ANNUITY_INTEREST_RATE',
    'width' => '10%',
  ),
);
?>
