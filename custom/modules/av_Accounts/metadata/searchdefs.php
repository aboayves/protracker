<?php
$module_name = 'av_Accounts';
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
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
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
        'default' => true,
        'width' => '10%',
      ),
      'accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_NAME',
        'id' => 'ACCOUNTS_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_name',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'team_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TEAMS',
        'width' => '10%',
        'default' => true,
        'id' => 'TEAM_ID',
        'name' => 'team_name',
      ),
      'account_number' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ACCOUNT_NUMBER',
        'width' => '10%',
        'name' => 'account_number',
      ),
      'date_opened' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATE_OPENED',
        'width' => '10%',
        'name' => 'date_opened',
      ),
      'asset_class' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_ASSET_CLASS',
        'width' => '10%',
        'name' => 'asset_class',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
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
      'is_qualified_plan' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_IS_QUALIFIED_PLAN',
        'width' => '10%',
        'name' => 'is_qualified_plan',
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
