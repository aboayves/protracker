<?php
$popupMeta = array (
    'moduleMain' => 'av_Medicare',
    'varName' => 'av_Medicare',
    'orderBy' => 'av_medicare.name',
    'whereClauses' => array (
  'claim_number' => 'av_medicare.claim_number',
  'prescription_plan' => 'av_medicare.prescription_plan',
  'accounts_name' => 'av_medicare.accounts_name',
),
    'searchInputs' => array (
  4 => 'claim_number',
  5 => 'prescription_plan',
  6 => 'accounts_name',
),
    'searchdefs' => array (
  'claim_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLAIM_NUMBER',
    'width' => '10%',
    'name' => 'claim_number',
  ),
  'prescription_plan' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRESCRIPTION_PLAN',
    'width' => '10%',
    'name' => 'prescription_plan',
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
),
    'listviewdefs' => array (
  'CLAIM_NUMBER' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CLAIM_NUMBER',
    'width' => '10%',
    'name' => 'claim_number',
  ),
  'PRESCRIPTION_PLAN' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PRESCRIPTION_PLAN',
    'width' => '20%',
    'name' => 'prescription_plan',
  ),
  'ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_name',
  ),
  'CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'contacts_name',
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
),
);
