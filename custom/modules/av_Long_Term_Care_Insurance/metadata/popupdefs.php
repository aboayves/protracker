<?php
$popupMeta = array (
    'moduleMain' => 'av_Long_Term_Care_Insurance',
    'varName' => 'av_Long_Term_Care_Insurance',
    'orderBy' => 'av_long_term_care_insurance.name',
    'whereClauses' => array (
  'type' => 'av_long_term_care_insurance.type',
  'av_companies_name' => 'av_long_term_care_insurance.av_companies_name',
  'policy_number' => 'av_long_term_care_insurance.policy_number',
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
