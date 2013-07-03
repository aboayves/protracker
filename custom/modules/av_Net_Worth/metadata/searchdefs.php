<?php
$module_name = 'av_Net_Worth';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'account_name' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNTS_NAME',
        'id' => 'ACCOUNT_ID',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'account_name',
      ),
      'grand_total' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_GRAND_TOTAL',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'grand_total',
      ),
      'managed_assets' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MANAGED_ASSETS',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'managed_assets',
      ),
      'net_worth_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_NET_WORTH_DATE',
        'width' => '10%',
        'name' => 'net_worth_date',
      ),
    ),
    'advanced_search' => 
    array (
      'account_name' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNTS_NAME',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_ID',
        'name' => 'account_name',
      ),
      'grand_total' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_GRAND_TOTAL',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'grand_total',
      ),
      'managed_assets' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MANAGED_ASSETS',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'managed_assets',
      ),
      'net_worth_date' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_NET_WORTH_DATE',
        'width' => '10%',
        'name' => 'net_worth_date',
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
