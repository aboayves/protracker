<?php
$dashletData['av_Account_OwnersDashlet']['searchFields'] = array (
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
    'default' => 'Kathy Grant',
  ),
);
$dashletData['av_Account_OwnersDashlet']['columns'] = array (
  'av_account_owners_contacts_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNT_OWNERS_CONTACTS_1_FROM_CONTACTS_TITLE',
    'id' => 'AV_ACCOUNT_OWNERS_CONTACTS_1CONTACTS_IDB',
    'width' => '10%',
    'default' => true,
  ),
  'ownership_percent' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_OWNERSHIP_PERCENT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => true,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
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
  'searchfields' => 
  array (
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
      'default' => 'Kathy Grant',
    ),
    'width' => '10%',
    'default' => false,
  ),
  'columns' => 
  array (
    'name' => 
    array (
      'width' => '40',
      'label' => 'LBL_LIST_NAME',
      'link' => true,
      'default' => true,
    ),
    'date_entered' => 
    array (
      'width' => '15',
      'label' => 'LBL_DATE_ENTERED',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'width' => '15',
      'label' => 'LBL_DATE_MODIFIED',
    ),
    'created_by' => 
    array (
      'width' => '8',
      'label' => 'LBL_CREATED',
    ),
    'assigned_user_name' => 
    array (
      'width' => '8',
      'label' => 'LBL_LIST_ASSIGNED_USER',
    ),
    'team_name' => 
    array (
      'width' => '15',
      'label' => 'LBL_LIST_TEAM',
    ),
    'width' => '10%',
    'default' => false,
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
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
