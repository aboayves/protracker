<?php
$module_name = 'av_Scoring';
$listViewDefs [$module_name] = 
array (
  'SCORE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_SCORE_DATE',
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
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'IDEAL_CLIENT_MATCH' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_IDEAL_CLIENT_MATCH',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '12%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'PRIMARY_CLIENT_PROFILE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PRIMARY_CLIENT_PROFILE',
    'width' => '10%',
  ),
  'SECONDARY_CLIENT_PROFILE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_SECONDARY_CLIENT_PROFILE',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
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
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'CLIENT_AGE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_CLIENT_AGE',
    'width' => '10%',
  ),
  'TIME_WITH_FIRM' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_TIME_WITH_FIRM',
    'width' => '10%',
  ),
  'SOURCE_OF_CLIENT' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_SOURCE_OF_CLIENT',
    'width' => '10%',
  ),
  'FUTURE_AUM_POTENTIAL' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_FUTURE_AUM_POTENTIAL',
    'width' => '10%',
  ),
  'HASSLE_FACTOR' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_HASSLE_FACTOR',
    'width' => '10%',
  ),
  'TIME_SPENT' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_TIME_SPENT',
    'width' => '10%',
  ),
  'INFLUENCE_POTENTIAL' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INFLUENCE_POTENTIAL',
    'width' => '10%',
  ),
  'NET_WORTH' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_NET_WORTH',
    'width' => '10%',
  ),
  'NET_WORTH_POTENTIAL' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_NET_WORTH_POTENTIAL',
    'width' => '10%',
  ),
  'OUTSIDE_INVESTMENTS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_OUTSIDE_INVESTMENTS',
    'width' => '10%',
  ),
  'PERCENT_OF_AUM' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PERCENT_OF_AUM',
    'width' => '10%',
  ),
  'PORTFOLIO_VALUE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PORTFOLIO_VALUE',
    'width' => '10%',
  ),
  'PROFITABILITY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PROFITABILITY',
    'width' => '10%',
  ),
  'PROFITABILITY_POTENTIAL' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PROFITABILITY_POTENTIAL',
    'width' => '10%',
  ),
  'REFERRAL_POTENTIAL' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_REFERRAL_POTENTIAL',
    'width' => '10%',
  ),
  'REFERRAL_HISTORY' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_REFERRAL_HISTORY',
    'width' => '10%',
  ),
  'SATISFACTION_LEVEL' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_SATISFACTION_LEVEL',
    'width' => '10%',
  ),
);
?>
