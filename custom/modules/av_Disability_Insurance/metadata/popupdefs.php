<?php
$popupMeta = array (
    'moduleMain' => 'av_Disability_Insurance',
    'varName' => 'av_Disability_Insurance',
    'orderBy' => 'av_disability_insurance.name',
    'whereClauses' => array (
  'type' => 'av_disability_insurance.type',
  'av_companies_name' => 'av_disability_insurance.av_companies_name',
  'policy_number' => 'av_disability_insurance.policy_number',
  'status' => 'av_disability_insurance.status',
  'accounts_name' => 'av_disability_insurance.accounts_name',
  'contacts_name' => 'av_disability_insurance.contacts_name',
  'issue_date' => 'av_disability_insurance.issue_date',
),
    'searchInputs' => array (
  3 => 'status',
  4 => 'type',
  5 => 'av_companies_name',
  6 => 'policy_number',
  7 => 'accounts_name',
  8 => 'contacts_name',
  9 => 'issue_date',
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
  'status' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
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
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'OWNER_ID',
    'width' => '10%',
    'name' => 'contacts_name',
  ),
  'issue_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ISSUE_DATE',
    'width' => '10%',
    'name' => 'issue_date',
  ),
),
);
