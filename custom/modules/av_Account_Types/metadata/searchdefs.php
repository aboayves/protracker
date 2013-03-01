<?php
$module_name = 'av_Account_Types';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'av_account_categories_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNT_CATEGORIES_NAME',
        'id' => 'ACCOUNT_CATEGORY_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'av_account_categories_name',
      ),
      'retirement_plan_type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_RETIREMENT_PLAN_TYPE',
        'width' => '10%',
        'name' => 'retirement_plan_type',
      ),
      'schedule' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_SCHEDULE',
        'width' => '10%',
        'name' => 'schedule',
      ),
      'is_beneficiary_required' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_IS_BENEFICIARY_REQUIRED',
        'width' => '10%',
        'name' => 'is_beneficiary_required',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'av_account_categories_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNT_CATEGORIES_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_CATEGORY_ID',
        'name' => 'av_account_categories_name',
      ),
      'retirement_plan_type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_RETIREMENT_PLAN_TYPE',
        'width' => '10%',
        'name' => 'retirement_plan_type',
      ),
      'schedule' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_SCHEDULE',
        'width' => '10%',
        'name' => 'schedule',
      ),
      'is_beneficiary_required' => 
      array (
        'type' => 'bool',
        'default' => true,
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
        'default' => true,
        'name' => 'description',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
