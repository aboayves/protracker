<?php
$popupMeta = array (
    'moduleMain' => 'av_Client_Types',
    'varName' => 'av_Client_Types',
    'orderBy' => 'av_client_types.name',
    'whereClauses' => array (
  'name' => 'av_client_types.name',
  'assigned_user_id' => 'av_client_types.assigned_user_id',
  'favorites_only' => 'av_client_types.favorites_only',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'assigned_user_id',
  5 => 'favorites_only',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
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
