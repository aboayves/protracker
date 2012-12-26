<?php
$module_name = 'av_Cashflow';
$OBJECT_NAME = 'AV_CASHFLOW';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '15%',
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => true,
  ),
  'STATUS_ID' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DOC_STATUS',
    'width' => '5%',
    'default' => true,
  ),
  'ACCOUNTS_AV_CASHFLOW_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_CASHFLOW_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_CASHFLOW_1ACCOUNTS_IDA',
    'width' => '15%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DOC_STATUS',
    'width' => '5%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
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
  'UPLOADFILE' => 
  array (
    'type' => 'file',
    'label' => 'LBL_FILE_UPLOAD',
    'width' => '10%',
    'default' => false,
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
  'FILE_EXT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FILE_EXTENSION',
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
  'SUBCATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => false,
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
