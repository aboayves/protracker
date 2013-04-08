<?php
$dashletData['av_RelativesDashlet']['searchFields'] = array (
  'accounts_name' => 
  array (
    'default' => '',
  ),
  'contacts_name' => 
  array (
    'default' => '',
  ),
  'type' => 
  array (
    'default' => '',
  ),
  'ok_to_speak_to' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_RelativesDashlet']['columns'] = array (
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NAME',
    'id' => 'RELATIVE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'type' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'ok_to_speak_to' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_OK_TO_SPEAK_TO',
    'width' => '10%',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
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
