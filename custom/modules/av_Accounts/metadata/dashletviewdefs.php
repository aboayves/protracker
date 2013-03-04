<?php
$dashletData['av_AccountsDashlet']['searchFields'] = array (
  'accounts_name' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
  'av_account_types_name' => 
  array (
    'default' => '',
  ),
  'account_number' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_AccountsDashlet']['columns'] = array (
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNTS_ID',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'av_account_types_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNT_TYPES_NAME',
    'id' => 'ACCOUNT_TYPE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'account_number' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ACCOUNT_NUMBER',
    'width' => '20%',
    'name' => 'account_number',
  ),
  'value' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'value',
  ),
  'value_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_VALUE_DATE',
    'width' => '10%',
    'name' => 'value_date',
  ),
  'asset_class' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_ASSET_CLASS',
    'width' => '10%',
    'name' => 'asset_class',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'apy' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_APY',
    'width' => '10%',
    'name' => 'apy',
  ),
  'billed_percent' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_BILLED_PERCENT',
    'width' => '10%',
    'name' => 'billed_percent',
  ),
  'billing_policy_date' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_BILLING_POLICY_DATE',
    'width' => '10%',
    'name' => 'billing_policy_date',
  ),
  'cash_balance' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_CASH_BALANCE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'cash_balance',
  ),
  'cash_balance_date' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_CASH_BALANCE_DATE',
    'width' => '10%',
    'name' => 'cash_balance_date',
  ),
  'billing_policy' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_BILLING_POLICY',
    'width' => '10%',
    'name' => 'billing_policy',
  ),
  'billed_amount' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_BILLED_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'billed_amount',
  ),
  'apr' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_APR',
    'width' => '10%',
    'name' => 'apr',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'allocation_stocks' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ALLOCATION_STOCKS',
    'width' => '10%',
    'name' => 'allocation_stocks',
  ),
  'allocation_cash' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ALLOCATION_CASH',
    'width' => '10%',
    'name' => 'allocation_cash',
  ),
  'allocation_bonds' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ALLOCATION_BONDS',
    'width' => '10%',
    'name' => 'allocation_bonds',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
  'type' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'is_rmd' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_RMD',
    'width' => '10%',
    'name' => 'is_rmd',
  ),
  'custodian' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_CUSTODIAN',
    'width' => '10%',
    'name' => 'custodian',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
    'name' => 'created_by_name',
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
    'name' => 'modified_by_name',
  ),
  'date_opened' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DATE_OPENED',
    'width' => '10%',
    'name' => 'date_opened',
  ),
  'date_closed' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DATE_CLOSED',
    'width' => '10%',
    'name' => 'date_closed',
  ),
);
