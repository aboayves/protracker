<?php
$popupMeta = array (
    'moduleMain' => 'av_Activity_Types',
    'varName' => 'av_Activity_Types',
    'orderBy' => 'av_activity_types.name',
    'whereClauses' => array (
  'name' => 'av_activity_types.name',
  'favorites_only' => 'av_activity_types.favorites_only',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'favorites_only',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'favorites_only' => 
  array (
    'name' => 'favorites_only',
    'label' => 'LBL_FAVORITES_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
),
);
