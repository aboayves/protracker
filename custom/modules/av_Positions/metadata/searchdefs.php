<?php
$module_name = 'av_Positions';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'av_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNTS_NAME',
        'id' => 'ASSET_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'av_accounts_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'symbol' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SYMBOL',
        'width' => '10%',
        'name' => 'symbol',
      ),
    ),
    'advanced_search' => 
    array (
      'av_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACCOUNTS_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'ASSET_ID',
        'name' => 'av_accounts_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'symbol' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SYMBOL',
        'width' => '10%',
        'name' => 'symbol',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
      ),
      'price_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_PRICE_DATE',
        'width' => '10%',
        'name' => 'price_date',
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
