<?php
$module_name = 'av_Accounts';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNTS_ID',
    'width' => '12%',
    'default' => true,
  ),
  'AV_ACCOUNT_TYPES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNT_TYPES_NAME',
    'id' => 'ACCOUNT_TYPE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNT_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
  ),
  'OWNERSHIP_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_OWNERSHIP_TYPE',
    'width' => '10%',
  ),
  'CUSTODIAN' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_CUSTODIAN',
    'width' => '10%',
  ),
  'VALUE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_VALUE_DATE',
    'width' => '10%',
  ),
  'VALUE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
	'align' => 'right'
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'APY' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_APY',
    'width' => '10%',
  ),
  'CASH_BALANCE_LOW_PERCENT' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_CASH_BALANCE_LOW_PERCENT',
    'width' => '10%',
  ),
  'REP_EMAIL' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REP_EMAIL',
    'width' => '10%',
  ),
  'RISK_TOLERANCE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_RISK_TOLERANCE',
    'width' => '10%',
  ),
  'USERS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_USERS_NAME',
    'id' => 'CLOSED_BY_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'REP_FAX' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_REP_FAX',
    'width' => '10%',
  ),
  'TARGET_RETURN' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_TARGET_RETURN',
    'width' => '10%',
  ),
  'TARGET_CASH' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TARGET_CASH',
    'width' => '10%',
  ),
  'TERM' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TERM',
    'width' => '10%',
  ),
  'TARGET_STOCKS' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TARGET_STOCKS',
    'width' => '10%',
  ),
  'TARGET_BONDS' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TARGET_BONDS',
    'width' => '10%',
  ),
  'SOURCE_OF_FUNDS' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SOURCE_OF_FUNDS',
    'width' => '10%',
  ),
  'REP_PHONE' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_REP_PHONE',
    'width' => '10%',
  ),
  'REP_NAME' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REP_NAME',
    'width' => '10%',
  ),
  'PAYMENT_FREQUENCY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PAYMENT_FREQUENCY',
    'width' => '10%',
  ),
  'REINVEST_INTEREST' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_REINVEST_INTEREST',
    'width' => '10%',
  ),
  'REINVEST_DIVIDENDS' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_REINVEST_DIVIDENDS',
    'width' => '10%',
  ),
  'REINVEST_CAPITAL_GAINS' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_REINVEST_CAPITAL_GAINS',
    'width' => '10%',
  ),
  'POLICY_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_POLICY_DATE',
    'width' => '10%',
  ),
  'PMI' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_PMI',
    'currency_format' => true,
    'width' => '10%',
  ),
  'CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'OWNER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'PAYMENT' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_PAYMENT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DATE_CLOSED' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DATE_CLOSED',
    'width' => '10%',
  ),
  'IS_CLOSED' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_CLOSED',
    'width' => '10%',
  ),
  'MATURITY_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_MATURITY_DATE',
    'width' => '10%',
  ),
  'MASTER_ACCOUNT' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_MASTER_ACCOUNT',
    'width' => '10%',
  ),
  'IS_WITHDRAWAL_ASSET' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_WITHDRAWAL_ASSET',
    'width' => '10%',
  ),
  'IS_RMD' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_RMD',
    'width' => '10%',
  ),
  'IS_QUALIFIED_PLAN' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_QUALIFIED_PLAN',
    'width' => '10%',
  ),
  'IS_MARGIN' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_MARGIN',
    'width' => '10%',
  ),
  'IS_LPOA' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_LPOA',
    'width' => '10%',
  ),
  'IS_FPOA' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_FPOA',
    'width' => '10%',
  ),
  'IS_DISCRETIONARY' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_DISCRETIONARY',
    'width' => '10%',
  ),
  'IS_EFT' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_EFT',
    'width' => '10%',
  ),
  'IS_CHECKWRITING' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_CHECKWRITING',
    'width' => '10%',
  ),
  'IS_BILLED' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_BILLED',
    'width' => '10%',
  ),
  'IS_AUM' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_AUM',
    'width' => '10%',
  ),
  'INVESTMENT_POLICY' => 
  array (
    'type' => 'text',
    'default' => false,
    'label' => 'LBL_INVESTMENT_POLICY',
    'sortable' => false,
    'width' => '10%',
  ),
  'INVESTMENT_OBJECTIVE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_OBJECTIVE',
    'width' => '10%',
  ),
  'INITIAL_AMOUNT' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_INITIAL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'INCLUDE_ON_IPS' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_INCLUDE_ON_IPS',
    'width' => '10%',
  ),
  'AV_COMMISSION_SCHEDULES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_COMMISSION_SCHEDULES_NAME',
    'id' => 'COMMISSION_SCHEDULE_ID',
    'width' => '10%',
    'default' => false,
  ),
  'CASH_BALANCE_LOW' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_CASH_BALANCE_LOW',
    'currency_format' => true,
    'width' => '10%',
  ),
  'CASH_BALANCE_HIGH_PERCENT' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_CASH_BALANCE_HIGH_PERCENT',
    'width' => '10%',
  ),
  'CASH_BALANCE_HIGH' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_CASH_BALANCE_HIGH',
    'currency_format' => true,
    'width' => '10%',
  ),
  'CASH_BALANCE_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_CASH_BALANCE_DATE',
    'width' => '10%',
  ),
  'CASH_BALANCE' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_CASH_BALANCE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'BILLING_POLICY_DATE' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_BILLING_POLICY_DATE',
    'width' => '10%',
  ),
  'BILLING_POLICY' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_BILLING_POLICY',
    'width' => '10%',
  ),
  'BILLING_EXCEPTIONS' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_BILLING_EXCEPTIONS',
    'width' => '10%',
  ),
  'BILLED_PERCENT' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_BILLED_PERCENT',
    'width' => '10%',
  ),
  'BILLED_AMOUNT' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_BILLED_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'APR' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_APR',
    'width' => '10%',
  ),
  'ALLOCATION_STOCKS' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ALLOCATION_STOCKS',
    'width' => '10%',
  ),
  'ALLOCATION_CASH' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ALLOCATION_CASH',
    'width' => '10%',
  ),
  'ALLOCATION_BONDS' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ALLOCATION_BONDS',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'ASSET_CLASS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_ASSET_CLASS',
    'width' => '10%',
  ),
  'OWNERSHIP' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_OWNERSHIP',
    'width' => '10%',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
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
