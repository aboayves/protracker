<?php
$dashletData['av_Service_TeamDashlet']['searchFields'] = array (
  'accounts_name' => 
  array (
    'default' => '',
  ),
  'role' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_Service_TeamDashlet']['columns'] = array (
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'role' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_ROLE',
    'width' => '10%',
    'name' => 'role',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
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
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
);
