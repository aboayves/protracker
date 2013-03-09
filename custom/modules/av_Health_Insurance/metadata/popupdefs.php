<?php
$popupMeta = array (
    'moduleMain' => 'av_Health_Insurance',
    'varName' => 'av_Health_Insurance',
    'orderBy' => 'av_health_insurance.name',
    'whereClauses' => array (
  'type' => 'av_health_insurance.type',
  'av_companies_name' => 'av_health_insurance.av_companies_name',
  'policy_number' => 'av_health_insurance.policy_number',
),
    'searchInputs' => array (
  4 => 'type',
  5 => 'av_companies_name',
  6 => 'policy_number',
),
    'searchdefs' => array (
  'type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'av_companies_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_COMPANIES_NAME',
    'id' => 'COMPANY_ID',
    'width' => '10%',
    'name' => 'av_companies_name',
  ),
  'policy_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_POLICY_NUMBER',
    'width' => '10%',
    'name' => 'policy_number',
  ),
),
);
