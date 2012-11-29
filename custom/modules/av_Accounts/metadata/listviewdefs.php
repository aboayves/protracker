<?php
$module_name = 'av_Accounts';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ACCOUNTS_AV_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'AV_ACCOUNT_TYPES_AV_ACCOUNTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNT_TYPES_AV_ACCOUNTS_1_FROM_AV_ACCOUNT_TYPES_TITLE',
    'id' => 'AV_ACCOUNT_TYPES_AV_ACCOUNTS_1AV_ACCOUNT_TYPES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'AV_ACCOUNTS_AV_COMPANIES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNTS_AV_COMPANIES_1_FROM_AV_COMPANIES_TITLE',
    'id' => 'AV_ACCOUNTS_AV_COMPANIES_1AV_COMPANIES_IDB',
    'width' => '10%',
    'default' => true,
  ),
  'OWNERSHIP' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OWNERSHIP',
    'width' => '10%',
  ),
  'ACCOUNT_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
  ),
  'VALUE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'VALUE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_VALUE_DATE',
    'width' => '10%',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'CATEGORY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_CATEGORY',
    'width' => '10%',
  ),
  'ASSET_CLASS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_ASSET_CLASS',
    'width' => '10%',
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_OPENED' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DATE_OPENED',
    'width' => '10%',
  ),
  'COST_BASIS' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_COST_BASIS',
    'currency_format' => true,
    'width' => '10%',
  ),
  'COST_BASIS_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_COST_BASIS_DATE',
    'width' => '10%',
  ),
  'URL' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_URL',
    'width' => '10%',
  ),
  'USERNAME' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_USERNAME',
    'width' => '10%',
  ),
  'WITHDRAWAL_REQUIREMENT' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_WITHDRAWAL_REQUIREMENT',
    'width' => '10%',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
);
?>
