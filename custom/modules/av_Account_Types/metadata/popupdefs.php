<?php
$popupMeta = array (
    'moduleMain' => 'av_Account_Types',
    'varName' => 'av_Account_Types',
    'orderBy' => 'av_account_types.name',
    'whereClauses' => array (
  'name' => 'av_account_types.name',
  'description' => 'av_account_types.description',
  'favorites_only' => 'av_account_types.favorites_only',
  'av_account_categories_name' => 'av_account_types.av_account_categories_name',
  'retirement_plan_type' => 'av_account_types.retirement_plan_type',
  'schedule' => 'av_account_types.schedule',
  'is_beneficiary_required' => 'av_account_types.is_beneficiary_required',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'description',
  5 => 'favorites_only',
  6 => 'av_account_categories_name',
  7 => 'retirement_plan_type',
  8 => 'schedule',
  9 => 'is_beneficiary_required',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'av_account_categories_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNT_CATEGORIES_NAME',
    'id' => 'ACCOUNT_CATEGORY_ID',
    'width' => '10%',
    'name' => 'av_account_categories_name',
  ),
  'retirement_plan_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_RETIREMENT_PLAN_TYPE',
    'width' => '10%',
    'name' => 'retirement_plan_type',
  ),
  'schedule' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_SCHEDULE',
    'width' => '10%',
    'name' => 'schedule',
  ),
  'is_beneficiary_required' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_IS_BENEFICIARY_REQUIRED',
    'width' => '10%',
    'name' => 'is_beneficiary_required',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
  'favorites_only' => 
  array (
    'name' => 'favorites_only',
    'label' => 'LBL_FAVORITES_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
),
);
