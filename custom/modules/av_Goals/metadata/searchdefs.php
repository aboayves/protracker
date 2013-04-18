<?php
$module_name = 'av_Goals';
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
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
      ),
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
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
      ),
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
      'amount' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_AMOUNT',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'amount',
      ),
      'progress' => 
      array (
        'type' => 'integer',
        'default' => true,
        'label' => 'LBL_PROGRESS',
        'width' => '10%',
        'name' => 'progress',
      ),
      'target_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_TARGET_DATE',
        'width' => '10%',
        'name' => 'target_date',
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
