<?php
$dashletData['av_Vehicle_InsuranceDashlet']['searchFields'] = array (
  'type' => 
  array (
    'default' => '',
  ),
  'property' => 
  array (
    'default' => '',
  ),
  'av_companies_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_Vehicle_InsuranceDashlet']['columns'] = array (
  'type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'property' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PROPERTY',
    'width' => '10%',
  ),
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
);
