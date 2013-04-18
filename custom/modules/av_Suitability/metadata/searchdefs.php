<?php
$module_name = 'av_Suitability';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'suitability_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_SUITABILITY_DATE',
        'width' => '10%',
        'name' => 'suitability_date',
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
      'investment_objective' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_INVESTMENT_OBJECTIVE',
        'width' => '10%',
        'name' => 'investment_objective',
      ),
    ),
    'advanced_search' => 
    array (
      'suitability_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_SUITABILITY_DATE',
        'width' => '10%',
        'name' => 'suitability_date',
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
      'investment_objective' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_INVESTMENT_OBJECTIVE',
        'width' => '10%',
        'name' => 'investment_objective',
      ),
      'risk_tolerance' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_RISK_TOLERANCE',
        'width' => '10%',
        'name' => 'risk_tolerance',
      ),
      'time_horizon' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TIME_HORIZON',
        'width' => '10%',
        'name' => 'time_horizon',
      ),
      'source_of_assets' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SOURCE_OF_ASSETS',
        'width' => '10%',
        'name' => 'source_of_assets',
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
