<?php
$dashletData['av_Umbrella_InsuranceDashlet']['searchFields'] = array (
  'av_companies_name' => 
  array (
    'default' => '',
  ),
  'policy_number' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_Umbrella_InsuranceDashlet']['columns'] = array (
  'av_companies_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_COMPANIES_NAME',
    'id' => 'COMPANY_ID',
    'width' => '10%',
    'default' => true,
  ),
  'policy_number' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_POLICY_NUMBER',
    'width' => '10%',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'OWNER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'issue_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_ISSUE_DATE',
    'width' => '10%',
  ),
);
