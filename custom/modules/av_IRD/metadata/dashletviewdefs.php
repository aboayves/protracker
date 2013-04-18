<?php
$dashletData['av_IRDDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'contacts_name' => 
  array (
    'default' => '',
  ),
  'description' => 
  array (
    'default' => '',
  ),
  'income_date' => 
  array (
    'default' => '',
  ),
  'amount' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_IRDDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'contacts_name',
  ),
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_name',
  ),
  'income_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_INCOME_DATE',
    'width' => '10%',
    'name' => 'income_date',
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
