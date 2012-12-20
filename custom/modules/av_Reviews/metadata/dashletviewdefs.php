<?php
$dashletData['av_ReviewsDashlet']['searchFields'] = array (
  'review_date' => 
  array (
    'default' => '',
  ),
  'accounts_av_reviews_1_name' => 
  array (
    'default' => '',
  ),
  'type' => 
  array (
    'default' => '',
  ),
  'description' => 
  array (
    'default' => '',
  ),
  'score' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_ReviewsDashlet']['columns'] = array (
  'review_date' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_REVIEW_DATE',
    'width' => '10%',
    'name' => 'review_date',
  ),
  'accounts_av_reviews_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_REVIEWS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_AV_REVIEWS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_av_reviews_1_name',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'score' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SCORE',
    'width' => '10%',
    'name' => 'score',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'name' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
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
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
);
