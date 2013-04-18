<?php
$module_name = 'av_Custom_Fields';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
      2 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
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
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
        'name' => 'current_user_only',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'field_value' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_FIELD_VALUE',
        'width' => '10%',
        'name' => 'field_value',
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
      'av_accounts_av_custom_fields_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNTS_AV_CUSTOM_FIELDS_1_FROM_AV_ACCOUNTS_TITLE',
        'id' => 'AV_ACCOUNTS_AV_CUSTOM_FIELDS_1AV_ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'av_accounts_av_custom_fields_1_name',
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
        'default' => true,
        'width' => '10%',
      ),
      'team_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TEAMS',
        'id' => 'TEAM_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'team_name',
      ),
      'accounts_av_custom_fields_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_AV_CUSTOM_FIELDS_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_AV_CUSTOM_FIELDS_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_av_custom_fields_1_name',
      ),
      'contacts_av_custom_fields_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_AV_CUSTOM_FIELDS_1_FROM_CONTACTS_TITLE',
        'id' => 'CONTACTS_AV_CUSTOM_FIELDS_1CONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_av_custom_fields_1_name',
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
