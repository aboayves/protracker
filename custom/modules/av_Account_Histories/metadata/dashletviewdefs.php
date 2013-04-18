<?php
$dashletData['av_Account_HistoriesDashlet']['searchFields'] = array (
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
    'default' => 'Ron Walters',
  ),
);
$dashletData['av_Account_HistoriesDashlet']['columns'] = array (
  'value' => 
  array (
    'type' => 'currency',
    'align' => 'right',
    'default' => true,
    'label' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'value_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_VALUE_DATE',
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
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
);
