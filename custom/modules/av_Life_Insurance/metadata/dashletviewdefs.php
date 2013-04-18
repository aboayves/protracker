<?php
$dashletData['av_Life_InsuranceDashlet']['searchFields'] = array (
  'type' => 
  array (
    'default' => '',
  ),
  'term' => 
  array (
    'default' => '',
  ),
  'death_benefit' => 
  array (
    'default' => '',
  ),
  'av_companies_name' => 
  array (
    'default' => '',
  ),
  'policy_number' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_Life_InsuranceDashlet']['columns'] = array (
  'type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'death_benefit' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_DEATH_BENEFIT',
    'currency_format' => true,
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
    'name' => 'av_companies_name',
  ),
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'OWNER_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'contacts_name',
  ),
  'face_value' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_FACE_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'face_value',
  ),
  'term' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_TERM',
    'width' => '10%',
    'name' => 'term',
  ),
);
