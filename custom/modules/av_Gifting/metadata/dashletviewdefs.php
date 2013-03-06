<?php
$dashletData['av_GiftingDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'team_id' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Deb Giffen',
  ),
);
$dashletData['av_GiftingDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '10%',
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
  'recipient' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RECIPIENT',
    'width' => '10%',
    'name' => 'recipient',
  ),
  'date_of_gift' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_OF_GIFT',
    'width' => '10%',
    'name' => 'date_of_gift',
  ),
  'value' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'value',
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
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => false,
    'name' => 'description',
  ),
  'is_709_required' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_IS_709_REQUIRED',
    'width' => '10%',
    'name' => 'is_709_required',
  ),
  'date_709_filed' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DATE_709_FILED',
    'width' => '15%',
    'name' => 'date_709_filed',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'date_crummey_sent' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_DATE_CRUMMEY_SENT',
    'width' => '15%',
    'name' => 'date_crummey_sent',
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
