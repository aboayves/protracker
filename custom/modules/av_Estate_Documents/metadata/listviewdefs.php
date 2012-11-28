<?php
$module_name = 'av_Estate_Documents';
$OBJECT_NAME = 'AV_ESTATE_DOCUMENTS';
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
  'SUBCATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DOC_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'CONTACTS_AV_ESTATE_DOCUMENTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_AV_ESTATE_DOCUMENTS_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_AV_ESTATE_DOCUMENTS_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_RECORDED' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_RECORDED',
    'width' => '10%',
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
  'ON_FILE' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_ON_FILE',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => false,
    'sortable' => false,
  ),
  'SUCCESSOR_AGENT' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SUCCESSOR_AGENT',
    'width' => '10%',
  ),
  'AGENT' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_AGENT',
    'width' => '10%',
  ),
  'FILE_MIME_TYPE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MIME',
    'width' => '10%',
    'default' => false,
  ),
  'UPLOADFILE' => 
  array (
    'type' => 'file',
    'label' => 'LBL_FILE_UPLOAD',
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
);
?>
