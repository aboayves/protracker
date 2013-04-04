<?php
$popupMeta = array (
    'moduleMain' => 'av_Positions',
    'varName' => 'av_Positions',
    'orderBy' => 'av_positions.name',
    'whereClauses' => array (
  'name' => 'av_positions.name',
  'av_accounts_name' => 'av_positions.av_accounts_name',
  'symbol' => 'av_positions.symbol',
  'type' => 'av_positions.type',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'av_accounts_name',
  5 => 'symbol',
  6 => 'type',
),
    'searchdefs' => array (
  'av_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AV_ACCOUNTS_NAME',
    'id' => 'ASSET_ID',
    'width' => '10%',
    'name' => 'av_accounts_name',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'symbol' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SYMBOL',
    'width' => '10%',
    'name' => 'symbol',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
),
);
