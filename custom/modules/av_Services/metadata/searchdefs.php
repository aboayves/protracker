<?php
$module_name = 'av_Services';
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
        'id' => 'ACCOUNT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_name',
      ),
      'service_type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_SERVICE_TYPE',
        'width' => '10%',
        'name' => 'service_type',
      ),
      'frequency' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_FREQUENCY',
        'width' => '10%',
        'name' => 'frequency',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_ID',
        'name' => 'accounts_name',
      ),
      'service_type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_SERVICE_TYPE',
        'width' => '10%',
        'name' => 'service_type',
      ),
      'frequency' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_FREQUENCY',
        'width' => '10%',
        'name' => 'frequency',
      ),
      'report_name' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REPORT_NAME',
        'width' => '10%',
        'name' => 'report_name',
      ),
      'report_format' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REPORT_FORMAT',
        'width' => '10%',
        'name' => 'report_format',
      ),
      'hourly_rate' => 
      array (
        'type' => 'currency',
        'align' => 'right',
        'default' => true,
        'label' => 'LBL_HOURLY_RATE',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'hourly_rate',
      ),
      'flat_fee' => 
      array (
        'type' => 'currency',
        'align' => 'right',
        'default' => true,
        'label' => 'LBL_FLAT_FEE',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'flat_fee',
      ),
      'date_start' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATE_START',
        'width' => '10%',
        'name' => 'date_start',
      ),
      'date_end' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATE_END',
        'width' => '10%',
        'name' => 'date_end',
      ),
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
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
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
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
