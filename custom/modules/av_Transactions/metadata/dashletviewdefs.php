<?php
$dashletData['av_TransactionsDashlet']['searchFields'] = array (
  'transaction_date' => 
  array (
    'default' => '',
  ),
  'av_accounts_name' => 
  array (
    'default' => '',
  ),
  'type' => 
  array (
    'default' => '',
  ),
  'related_account' => 
  array (
    'default' => '',
  ),
  'amount' => 
  array (
    'default' => '',
  ),
  'net_amount' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_TransactionsDashlet']['columns'] = array (
  'transaction_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_TRANSACTION_DATE',
    'width' => '10%',
  ),
  'av_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNTS_NAME',
    'id' => 'ASSET_ID',
    'width' => '10%',
    'default' => true,
  ),
  'type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'related_account' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RELATED_ACCOUNT',
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
  'net_amount' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_NET_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
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
