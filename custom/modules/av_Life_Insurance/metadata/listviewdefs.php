<?php
$module_name = 'av_Life_Insurance';
$OBJECT_NAME = 'AV_LIFE_INSURANCE';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DESCRIPTION',
    'width' => '20%',
  ),
  'AGENT_NAME' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_AGENT_NAME',
    'width' => '15%',
  ),
  'MATURITY_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_MATURITY_DATE',
    'width' => '15%',
  ),
  'PREMIUM' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PREMIUM',
    'currency_format' => true,
    'width' => '15%',
  ),
  'FACE_VALUE' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_FACE_VALUE',
    'currency_format' => true,
    'width' => '15%',
  ),
  'ACCOUNTS_AV_LIFE_INSURANCE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_LIFE_INSURANCE_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_LIFE_INSURANCE_1ACCOUNTS_IDA',
    'width' => '20%',
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
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => false,
    'sortable' => false,
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => false,
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
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
