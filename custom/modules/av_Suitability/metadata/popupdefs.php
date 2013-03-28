<?php
$popupMeta = array (
    'moduleMain' => 'av_Suitability',
    'varName' => 'av_Suitability',
    'orderBy' => 'av_suitability.name',
    'whereClauses' => array (
  'suitability_date' => 'av_suitability.suitability_date',
  'accounts_name' => 'av_suitability.accounts_name',
  'investment_objective' => 'av_suitability.investment_objective',
  'risk_tolerance' => 'av_suitability.risk_tolerance',
  'time_horizon' => 'av_suitability.time_horizon',
),
    'searchInputs' => array (
  4 => 'suitability_date',
  5 => 'accounts_name',
  6 => 'investment_objective',
  7 => 'risk_tolerance',
  8 => 'time_horizon',
),
    'searchdefs' => array (
  'suitability_date' => 
  array (
    'type' => 'date',
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
    'name' => 'accounts_name',
  ),
  'investment_objective' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_INVESTMENT_OBJECTIVE',
    'width' => '10%',
    'name' => 'investment_objective',
  ),
  'risk_tolerance' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_RISK_TOLERANCE',
    'width' => '10%',
    'name' => 'risk_tolerance',
  ),
  'time_horizon' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TIME_HORIZON',
    'width' => '10%',
    'name' => 'time_horizon',
  ),
),
);
