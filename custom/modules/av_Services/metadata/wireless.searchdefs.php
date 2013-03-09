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
    'advanced_search' => 
    array (
      0 => 'name',
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
