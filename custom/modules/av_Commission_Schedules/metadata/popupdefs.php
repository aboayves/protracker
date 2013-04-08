<?php
$popupMeta = array (
    'moduleMain' => 'av_Commission_Schedules',
    'varName' => 'av_Commission_Schedules',
    'orderBy' => 'av_commission_schedules.name',
    'whereClauses' => array (
  'name' => 'av_commission_schedules.name',
  'description' => 'av_commission_schedules.description',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'description',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
),
);
