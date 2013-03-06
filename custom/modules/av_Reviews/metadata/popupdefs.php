<?php
$popupMeta = array (
    'moduleMain' => 'av_Reviews',
    'varName' => 'av_Reviews',
    'orderBy' => 'av_reviews.name',
    'whereClauses' => array (
  'current_user_only' => 'av_reviews.current_user_only',
  'review_date' => 'av_reviews.review_date',
  'name' => 'av_reviews.name',
  'accounts_name' => 'av_reviews.accounts_name',
  'type' => 'av_reviews.type',
  'score' => 'av_reviews.score',
),
    'searchInputs' => array (
  4 => 'current_user_only',
  8 => 'review_date',
  9 => 'name',
  10 => 'accounts_name',
  11 => 'type',
  12 => 'score',
),
    'searchdefs' => array (
  'current_user_only' => 
  array (
    'label' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
    'width' => '10%',
    'name' => 'current_user_only',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'name' => 'accounts_name',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'review_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_REVIEW_DATE',
    'width' => '10%',
    'name' => 'review_date',
  ),
  'score' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SCORE',
    'width' => '10%',
    'name' => 'score',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_name',
  ),
  'REVIEW_DATE' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_REVIEW_DATE',
    'width' => '10%',
    'name' => 'review_date',
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'SCORE' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SCORE',
    'width' => '10%',
    'name' => 'score',
  ),
),
);
