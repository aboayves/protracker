<?php
$dashletData['av_Tax_EstimatesDashlet']['searchFields'] = array (
  'tax_year' => 
  array (
    'default' => '',
  ),
  'accounts_name' => 
  array (
    'default' => '',
  ),
  'av_tax_forms_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_Tax_EstimatesDashlet']['columns'] = array (
  'tax_year' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_TAX_YEAR',
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
  'av_tax_forms_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_TAX_FORMS_NAME',
    'id' => 'TAX_FORM_ID',
    'width' => '10%',
    'default' => true,
  ),
  'return_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_RETURN_TYPE',
    'width' => '10%',
  ),
  'district' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DISTRICT',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
);
