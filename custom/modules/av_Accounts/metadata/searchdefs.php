<?php
$module_name = 'av_Accounts';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNTS_ID',
        'name' => 'accounts_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'av_account_types_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNT_TYPES_NAME',
        'id' => 'ACCOUNT_TYPE_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'av_account_types_name',
      ),
      'custodian' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_CUSTODIAN',
        'width' => '10%',
        'name' => 'custodian',
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
      'account_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_NAME',
        'id' => 'ACCOUNT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'account_name',
      ),
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'default' => true,
        'width' => '10%',
        'label' => 'LBL_NAME',
        'name' => 'name',
      ),
      'av_account_types_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNT_TYPES_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_TYPE_ID',
        'name' => 'av_account_types_name',
      ),
      'account_number' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ACCOUNT_NUMBER',
        'width' => '10%',
        'name' => 'account_number',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'date_opened' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATE_OPENED',
        'width' => '10%',
        'name' => 'date_opened',
      ),
      'ownership_type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_OWNERSHIP_TYPE',
        'width' => '10%',
        'name' => 'ownership_type',
      ),
      'custodian' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_CUSTODIAN',
        'width' => '10%',
        'name' => 'custodian',
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
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
      ),
      'value' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_VALUE',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'value',
      ),
      'value_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_VALUE_DATE',
        'width' => '10%',
        'name' => 'value_date',
      ),
      'is_aum' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_IS_AUM',
        'width' => '10%',
        'name' => 'is_aum',
      ),
      'is_rmd' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_IS_RMD',
        'width' => '10%',
        'name' => 'is_rmd',
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
