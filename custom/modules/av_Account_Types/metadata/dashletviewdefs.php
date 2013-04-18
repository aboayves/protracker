<?php
$dashletData['av_Account_TypesDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'av_account_categories_name' => 
  array (
    'default' => '',
  ),
  'schedule' => 
  array (
    'default' => '',
  ),
  'retirement_plan_type' => 
  array (
    'default' => '',
  ),
  'is_beneficiary_required' => 
  array (
    'default' => '',
  ),
  'description' => 
  array (
    'default' => '',
  ),
);
$dashletData['av_Account_TypesDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'av_account_categories_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNT_CATEGORIES_NAME',
    'id' => 'ACCOUNT_CATEGORY_ID',
    'width' => '10%',
    'default' => true,
  ),
  'schedule' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_SCHEDULE',
    'width' => '10%',
    'name' => 'schedule',
  ),
  'retirement_plan_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_RETIREMENT_PLAN_TYPE',
    'width' => '10%',
    'name' => 'retirement_plan_type',
  ),
  'is_beneficiary_required' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_IS_BENEFICIARY_REQUIRED',
    'width' => '10%',
    'name' => 'is_beneficiary_required',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
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
    'name' => 'modified_by_name',
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
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
    'name' => 'created_by_name',
  ),
  'report_sort' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REPORT_SORT',
    'width' => '10%',
    'name' => 'report_sort',
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
);
