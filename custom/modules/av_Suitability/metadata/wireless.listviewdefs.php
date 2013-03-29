<?php
$module_name = 'av_Suitability';
$listViewDefs [$module_name] = 
array (
  'SUITABILITY_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_SUITABILITY_DATE',
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
  'INVESTMENT_EXPERIENCE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_INVESTMENT_EXPERIENCE',
    'width' => '10%',
  ),
  'INVESTMENT_OBJECTIVE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_INVESTMENT_OBJECTIVE',
    'width' => '10%',
  ),
  'RISK_TOLERANCE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_RISK_TOLERANCE',
    'width' => '10%',
  ),
  'TIME_HORIZON' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TIME_HORIZON',
    'width' => '10%',
  ),
  'SOURCE_OF_ASSETS' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SOURCE_OF_ASSETS',
    'width' => '10%',
  ),
  'LEVEL_OF_HEALTH' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_LEVEL_OF_HEALTH',
    'width' => '10%',
  ),
  'INVESTMENT_EXPERIENCE_VARIABLE_PRODUCTS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE_VARIABLE_PRODUCTS',
    'width' => '10%',
  ),
  'LIQUID_NET_WORTH_RANGE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_LIQUID_NET_WORTH_RANGE',
    'width' => '10%',
  ),
  'NEED_FOR_LIQUIDITY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_NEED_FOR_LIQUIDITY',
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
  'INVESTMENT_EXPERIENCE_REAL_ESTATE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE_REAL_ESTATE',
    'width' => '10%',
  ),
  'INVESTMENT_EXPERIENCE_STOCKS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE_STOCKS',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => false,
  ),
  'ANNUAL_INCOME_RANGE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_ANNUAL_INCOME_RANGE',
    'width' => '10%',
  ),
  'CLIENT_ACCEPTANCE_PATTERN' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_CLIENT_ACCEPTANCE_PATTERN',
    'width' => '10%',
  ),
  'CLIENT_COMMUNICATION_LEVEL' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_CLIENT_COMMUNICATION_LEVEL',
    'width' => '10%',
  ),
  'CLIENT_ADVERSE_COMMITMENT' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_CLIENT_ADVERSE_COMMITMENT',
    'width' => '10%',
  ),
  'CLIENT_INVESTMENT_INPUT' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_CLIENT_INVESTMENT_INPUT',
    'width' => '10%',
  ),
  'TAX_BRACKET_RANGE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_TAX_BRACKET_RANGE',
    'width' => '10%',
  ),
  'CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'default' => false,
  ),
  'INVESTMENT_EXPERIENCE_BONDS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE_BONDS',
    'width' => '10%',
  ),
  'INVESTMENT_EXPERIENCE_MUTUAL_FUNDS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE_MUTUAL_FUNDS',
    'width' => '10%',
  ),
  'INVESTMENT_EXPERIENCE_PARTNERSHIPS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE_PARTNERSHIPS',
    'width' => '10%',
  ),
  'REASON_FOR_INVESTING' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_REASON_FOR_INVESTING',
    'width' => '10%',
  ),
  'NET_WORTH_RANGE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_NET_WORTH_RANGE',
    'width' => '10%',
  ),
  'LEVEL_OF_EDUCATION' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_LEVEL_OF_EDUCATION',
    'width' => '10%',
  ),
);
?>
