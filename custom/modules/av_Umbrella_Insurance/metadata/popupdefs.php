<?php
$popupMeta = array (
    'moduleMain' => 'av_Umbrella_Insurance',
    'varName' => 'av_Umbrella_Insurance',
    'orderBy' => 'av_umbrella_insurance.name',
    'whereClauses' => array (
  'av_companies_name' => 'av_umbrella_insurance.av_companies_name',
  'policy_number' => 'av_umbrella_insurance.policy_number',
),
    'searchInputs' => array (
  4 => 'av_companies_name',
  5 => 'policy_number',
),
    'searchdefs' => array (
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
