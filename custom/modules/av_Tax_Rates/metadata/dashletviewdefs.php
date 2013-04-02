<?php
$dashletData['av_Tax_RatesDashlet']['searchFields'] = array (
  'tax_year' => 
  array (
    'default' => '',
  ),
  'filing_status' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_Tax_RatesDashlet']['columns'] = array (
  'tax_year' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_TAX_YEAR',
    'width' => '10%',
  ),
  'filing_status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_FILING_STATUS',
    'width' => '10%',
  ),
  'low_range' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_LOW_RANGE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'high_range' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_HIGH_RANGE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'tax_rate' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_TAX_RATE',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
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
