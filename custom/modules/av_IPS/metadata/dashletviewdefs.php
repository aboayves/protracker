<?php
$dashletData['av_IPSDashlet']['searchFields'] = array (
  'ips_date' => 
  array (
    'default' => '',
  ),
  'accounts_name' => 
  array (
    'default' => '',
  ),
  'document_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_IPSDashlet']['columns'] = array (
  'ips_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_IPS_DATE',
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
  'document_name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'document_name',
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
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
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
