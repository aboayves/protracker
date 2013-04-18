<?php
$popupMeta = array (
    'moduleMain' => 'av_Offices',
    'varName' => 'av_Offices',
    'orderBy' => 'av_offices.name',
    'whereClauses' => array (
  'name' => 'av_offices.name',
  'address_city' => 'av_offices.address_city',
  'address_state' => 'av_offices.address_state',
  'phone' => 'av_offices.phone',
),
    'searchInputs' => array (
  0 => 'name',
  4 => 'address_city',
  5 => 'address_state',
  6 => 'phone',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'address_city' => 
  array (
    'name' => 'address_city',
    'label' => 'LBL_CITY',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_state' => 
  array (
    'name' => 'address_state',
    'label' => 'LBL_STATE',
    'type' => 'name',
    'width' => '10%',
  ),
  'phone' => 
  array (
    'name' => 'phone',
    'label' => 'LBL_ANY_PHONE',
    'type' => 'name',
    'width' => '10%',
  ),
),
);
