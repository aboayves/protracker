<?php
$module_name = 'av_Medicare';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '8%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ACCOUNTS_AV_MEDICARE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_MEDICARE_1_FROM_ACCOUNTS_TITLE',
    'width' => '10%',
    'default' => true,
    'id' => 'ACCOUNTS_AV_MEDICARE_1ACCOUNTS_IDA',
  ),
  'PART_A_EFFECTIVE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_PART_A_EFFECTIVE_DATE',
    'width' => '10%',
  ),
  'PART_B_EFFECTIVE_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_PART_B_EFFECTIVE_DATE',
    'width' => '10%',
  ),
  'DRUG_COVERAGE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_DRUG_COVERAGE',
    'width' => '10%',
  ),
  'PRESCRIPTION_PLAN' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PRESCRIPTION_PLAN',
    'width' => '10%',
  ),
  'MONTHLY_PREMIUM' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_MONTHLY_PREMIUM',
    'currency_format' => true,
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
  'CLAIM_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CLAIM_NUMBER',
    'width' => '10%',
  ),
);
?>
