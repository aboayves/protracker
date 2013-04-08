<?php
$popupMeta = array (
    'moduleMain' => 'av_Fee_Schedules',
    'varName' => 'av_Fee_Schedules',
    'orderBy' => 'av_fee_schedules.name',
    'whereClauses' => array (
  'name' => 'av_fee_schedules.name',
  'description' => 'av_fee_schedules.description',
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
