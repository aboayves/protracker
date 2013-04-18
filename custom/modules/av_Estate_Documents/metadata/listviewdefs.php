<?php
$module_name = 'av_Estate_Documents';
$OBJECT_NAME = 'AV_ESTATE_DOCUMENTS';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
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
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => true,
  ),
  'DATE_RECORDED' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_RECORDED',
    'width' => '10%',
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
