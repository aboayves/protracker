<?php
$dashletData['av_GoalsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'type' => 
  array (
    'default' => '',
  ),
  'accounts_name' => 
  array (
    'default' => '',
  ),
  'amount' => 
  array (
    'default' => '',
  ),
  'target_date' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_GoalsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
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
  'amount' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'amount',
  ),
  'progress' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PROGRESS',
    'width' => '10%',
  ),
  'target_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_TARGET_DATE',
    'width' => '10%',
    'name' => 'target_date',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '30%',
    'default' => false,
    'name' => 'description',
  ),
  'term' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_TERM',
    'width' => '10%',
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
);
