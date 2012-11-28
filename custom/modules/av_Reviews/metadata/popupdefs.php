<?php
$popupMeta = array (
    'moduleMain' => 'av_Reviews',
    'varName' => 'av_Reviews',
    'orderBy' => 'av_reviews.name',
    'whereClauses' => array (
  'current_user_only' => 'av_reviews.current_user_only',
  'favorites_only' => 'av_reviews.favorites_only',
  'accounts_av_reviews_1_name' => 'av_reviews.accounts_av_reviews_1_name',
  'assigned_user_id' => 'av_reviews.assigned_user_id',
  'review_date' => 'av_reviews.review_date',
),
    'searchInputs' => array (
  4 => 'current_user_only',
  5 => 'favorites_only',
  6 => 'accounts_av_reviews_1_name',
  7 => 'assigned_user_id',
  8 => 'review_date',
),
    'searchdefs' => array (
  'current_user_only' => 
  array (
    'label' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
    'width' => '10%',
    'name' => 'current_user_only',
  ),
  'favorites_only' => 
  array (
    'name' => 'favorites_only',
    'label' => 'LBL_FAVORITES_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
  'accounts_av_reviews_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_AV_REVIEWS_1_FROM_ACCOUNTS_TITLE',
    'width' => '10%',
    'id' => 'ACCOUNTS_AV_REVIEWS_1ACCOUNTS_IDA',
    'name' => 'accounts_av_reviews_1_name',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
  'review_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_REVIEW_DATE',
    'width' => '10%',
    'name' => 'review_date',
  ),
),
);
