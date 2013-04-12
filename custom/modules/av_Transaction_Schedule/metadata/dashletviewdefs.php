<?php
$dashletData['av_Transaction_ScheduleDashlet']['searchFields'] = array (
  'av_accounts_name' => 
  array (
    'default' => '',
  ),
  'transaction_type' => 
  array (
    'default' => '',
  ),
  'next_transaction_date' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_Transaction_ScheduleDashlet']['columns'] = array (
  'av_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNTS_NAME',
    'id' => 'ASSET_ID',
    'width' => '10%',
    'default' => true,
  ),
  'transaction_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TRANSACTION_TYPE',
    'width' => '10%',
  ),
  'next_transaction_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_NEXT_TRANSACTION_DATE',
    'width' => '10%',
  ),
  'amount' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'related_account' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RELATED_ACCOUNT',
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
  'transaction_frequency' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_TRANSACTION_FREQUENCY',
    'width' => '10%',
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
