<?php
$dashletData['av_SuitabilityDashlet']['searchFields'] = array (
  'suitability_date' => 
  array (
    'default' => '',
  ),
  'accounts_name' => 
  array (
    'default' => '',
  ),
  'investment_objective' => 
  array (
    'default' => '',
  ),
  'risk_tolerance' => 
  array (
    'default' => '',
  ),
  'time_horizon' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_SuitabilityDashlet']['columns'] = array (
  'suitability_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_SUITABILITY_DATE',
    'width' => '10%',
    'name' => 'suitability_date',
  ),
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_name',
  ),
  'investment_objective' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_INVESTMENT_OBJECTIVE',
    'width' => '10%',
    'name' => 'investment_objective',
  ),
  'risk_tolerance' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_RISK_TOLERANCE',
    'width' => '10%',
    'name' => 'risk_tolerance',
  ),
  'time_horizon' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TIME_HORIZON',
    'width' => '10%',
    'name' => 'time_horizon',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'tax_bracket_range' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_TAX_BRACKET_RANGE',
    'width' => '10%',
  ),
  'reason_for_investing' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_REASON_FOR_INVESTING',
    'width' => '10%',
  ),
  'net_worth_range' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_NET_WORTH_RANGE',
    'width' => '10%',
  ),
  'need_for_liquidity' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_NEED_FOR_LIQUIDITY',
    'width' => '10%',
  ),
  'liquid_net_worth_range' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_LIQUID_NET_WORTH_RANGE',
    'width' => '10%',
  ),
  'level_of_health' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_LEVEL_OF_HEALTH',
    'width' => '10%',
  ),
  'level_of_education' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_LEVEL_OF_EDUCATION',
    'width' => '10%',
  ),
  'investment_experience_stocks' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE_STOCKS',
    'width' => '10%',
  ),
  'investment_experience_mutual_funds' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE_MUTUAL_FUNDS',
    'width' => '10%',
  ),
  'investment_experience_variable_products' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE_VARIABLE_PRODUCTS',
    'width' => '10%',
  ),
  'investment_experience' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE',
    'width' => '10%',
  ),
  'investment_experience_real_estate' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE_REAL_ESTATE',
    'width' => '10%',
  ),
  'investment_experience_partnerships' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE_PARTNERSHIPS',
    'width' => '10%',
  ),
  'client_investment_input' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_CLIENT_INVESTMENT_INPUT',
    'width' => '10%',
  ),
  'investment_experience_bonds' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INVESTMENT_EXPERIENCE_BONDS',
    'width' => '10%',
  ),
  'client_communication_level' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_CLIENT_COMMUNICATION_LEVEL',
    'width' => '10%',
  ),
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'default' => false,
  ),
  'client_adverse_commitment' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_CLIENT_ADVERSE_COMMITMENT',
    'width' => '10%',
  ),
  'client_acceptance_pattern' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_CLIENT_ACCEPTANCE_PATTERN',
    'width' => '10%',
  ),
  'annual_income_range' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_ANNUAL_INCOME_RANGE',
    'width' => '10%',
  ),
  'source_of_assets' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SOURCE_OF_ASSETS',
    'width' => '10%',
    'name' => 'source_of_assets',
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
);
