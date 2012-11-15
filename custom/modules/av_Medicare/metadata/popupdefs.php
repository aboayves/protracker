<?php
$popupMeta = array (
    'moduleMain' => 'av_Medicare',
    'varName' => 'av_Medicare',
    'orderBy' => 'av_medicare.name',
    'whereClauses' => array (
  'name' => 'av_medicare.name',
),
    'searchInputs' => array (
  0 => 'av_medicare_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'ACCOUNTS_AV_MEDICARE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_MEDICARE_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_MEDICARE_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_av_medicare_1_name',
  ),
  'PART_A_EFFECTIVE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_PART_A_EFFECTIVE_DATE',
    'width' => '10%',
    'name' => 'part_a_effective_date',
  ),
  'PART_B_EFFECTIVE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_PART_B_EFFECTIVE_DATE',
    'width' => '10%',
    'name' => 'part_b_effective_date',
  ),
  'DRUG_COVERAGE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_DRUG_COVERAGE',
    'width' => '20%',
    'name' => 'drug_coverage',
  ),
  'PRESCRIPTION_PLAN' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PRESCRIPTION_PLAN',
    'width' => '20%',
    'name' => 'prescription_plan',
  ),
  'MONTHLY_PREMIUM' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_MONTHLY_PREMIUM',
    'currency_format' => true,
    'width' => '5%',
    'name' => 'monthly_premium',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '8%',
    'default' => true,
    'name' => 'date_modified',
  ),
),
);
