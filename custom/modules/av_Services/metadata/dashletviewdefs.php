<?php
$dashletData['av_ServicesDashlet']['searchFields'] = array (
  'service_type' => 
  array (
    'default' => '',
  ),
  'frequency' => 
  array (
    'default' => '',
  ),
  'report_format' => 
  array (
    'default' => '',
  ),
  'report_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_ServicesDashlet']['columns'] = array (
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'service_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_SERVICE_TYPE',
    'width' => '10%',
  ),
  'frequency' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_FREQUENCY',
    'width' => '10%',
    'name' => 'frequency',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'report_format' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REPORT_FORMAT',
    'width' => '10%',
    'name' => 'report_format',
  ),
  'report_name' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REPORT_NAME',
    'width' => '10%',
    'name' => 'report_name',
  ),
  'date_start' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DATE_START',
    'width' => '10%',
  ),
  'date_end' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DATE_END',
    'width' => '10%',
  ),
  'flat_fee' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_FLAT_FEE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'hourly_rate' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => false,
    'label' => 'LBL_HOURLY_RATE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
);
