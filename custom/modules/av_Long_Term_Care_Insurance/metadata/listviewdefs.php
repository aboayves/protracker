<?php
$module_name = 'av_Long_Term_Care_Insurance';
$OBJECT_NAME = 'AV_LONG_TERM_CARE_INSURANCE';
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
    'width' => '20%',
    'default' => true,
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => true,
  ),
  'ACCOUNTS_AV_LONG_TERM_CARE_INSURANCE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_LONG_TERM_CARE_INSURANCE_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_LONG_TERM_CARE_INSURANCE_1ACCOUNTS_IDA',
    'width' => '20%',
    'default' => true,
  ),
  'STATUS_ID' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DOC_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'SUBCATEGORY_ID' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '15%',
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
  'TEAM_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
    'sortable' => false,
  ),
);
?>
