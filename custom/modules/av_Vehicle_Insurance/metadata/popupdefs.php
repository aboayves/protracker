<?php
$popupMeta = array (
    'moduleMain' => 'av_Vehicle_Insurance',
    'varName' => 'av_Vehicle_Insurance',
    'orderBy' => 'av_vehicle_insurance.name',
    'whereClauses' => array (
  'type' => 'av_vehicle_insurance.type',
  'property' => 'av_vehicle_insurance.property',
  'av_companies_name' => 'av_vehicle_insurance.av_companies_name',
),
    'searchInputs' => array (
  4 => 'type',
  5 => 'property',
  6 => 'av_companies_name',
),
    'searchdefs' => array (
  'type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'property' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROPERTY',
    'width' => '10%',
    'name' => 'property',
  ),
  'av_companies_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_COMPANIES_NAME',
    'id' => 'COMPANY_ID',
    'width' => '10%',
    'name' => 'av_companies_name',
  ),
),
);
