<?php
$popupMeta = array (
    'moduleMain' => 'av_Services',
    'varName' => 'av_Services',
    'orderBy' => 'av_services.name',
    'whereClauses' => array (
  'service_type' => 'av_services.service_type',
  'frequency' => 'av_services.frequency',
  'report_name' => 'av_services.report_name',
  'report_format' => 'av_services.report_format',
  'current_user_only' => 'av_services.current_user_only',
),
    'searchInputs' => array (
  4 => 'service_type',
  5 => 'frequency',
  6 => 'report_name',
  7 => 'report_format',
  8 => 'current_user_only',
),
    'searchdefs' => array (
  'service_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_SERVICE_TYPE',
    'width' => '10%',
    'name' => 'service_type',
  ),
  'frequency' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_FREQUENCY',
    'width' => '10%',
    'name' => 'frequency',
  ),
  'report_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REPORT_NAME',
    'width' => '10%',
    'name' => 'report_name',
  ),
  'report_format' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REPORT_FORMAT',
    'width' => '10%',
    'name' => 'report_format',
  ),
  'current_user_only' => 
  array (
    'label' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
    'width' => '10%',
    'name' => 'current_user_only',
  ),
),
);
