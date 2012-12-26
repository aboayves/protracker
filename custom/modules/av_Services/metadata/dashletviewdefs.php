<?php
$dashletData['av_ServicesDashlet']['searchFields'] = array (
  'accounts_av_services_1_name' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
  'report_format' => 
  array (
    'default' => '',
  ),
  'frequency' => 
  array (
    'default' => '',
  ),
  'report_name' => 
  array (
    'default' => '',
  ),
  'description' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_ServicesDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'accounts_av_services_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_SERVICES_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_SERVICES_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_av_services_1_name',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
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
  'report_format' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_REPORT_FORMAT',
    'width' => '10%',
    'name' => 'report_format',
  ),
  'frequency' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_FREQUENCY',
    'width' => '10%',
    'name' => 'frequency',
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
  'report_name' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REPORT_NAME',
    'width' => '10%',
    'name' => 'report_name',
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
