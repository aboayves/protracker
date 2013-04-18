<?php
$popupMeta = array (
    'moduleMain' => 'av_Business_Insurance',
    'varName' => 'av_Business_Insurance',
    'orderBy' => 'av_business_insurance.name',
    'whereClauses' => array (
  'business_name' => 'av_business_insurance.business_name',
  'type' => 'av_business_insurance.type',
  'av_companies_name' => 'av_business_insurance.av_companies_name',
  'policy_number' => 'av_business_insurance.policy_number',
  'accounts_name' => 'av_business_insurance.accounts_name',
  'contacts_name' => 'av_business_insurance.contacts_name',
  'issue_date' => 'av_business_insurance.issue_date',
),
    'searchInputs' => array (
  4 => 'business_name',
  5 => 'type',
  6 => 'av_companies_name',
  7 => 'policy_number',
  8 => 'accounts_name',
  9 => 'contacts_name',
  10 => 'issue_date',
),
    'searchdefs' => array (
  'business_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BUSINESS_NAME',
    'width' => '10%',
    'name' => 'business_name',
  ),
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
