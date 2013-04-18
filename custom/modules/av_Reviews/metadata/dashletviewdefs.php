<?php
$dashletData['av_ReviewsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'review_date' => 
  array (
    'default' => '',
  ),
  'type' => 
  array (
    'default' => '',
  ),
  'score' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_ReviewsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
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
  'type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'score' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SCORE',
    'width' => '10%',
    'name' => 'score',
  ),
  'review_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_REVIEW_DATE',
    'width' => '10%',
    'name' => 'review_date',
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
  'accounts_av_reviews_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_REVIEWS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_REVIEWS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => false,
    'name' => 'accounts_av_reviews_1_name',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
);
