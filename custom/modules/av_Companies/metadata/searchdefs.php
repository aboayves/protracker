<?php
$module_name = 'av_Companies';
$_module_name = 'av_companies';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'industry' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_INDUSTRY',
        'width' => '10%',
        'default' => true,
        'name' => 'industry',
      ),
      'address_state' => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'width' => '10%',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'industry' => 
      array (
        'name' => 'industry',
        'default' => true,
        'width' => '10%',
      ),
      'address_street' => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'shipping_address_city' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SHIPPING_ADDRESS_CITY',
        'width' => '10%',
        'default' => true,
        'name' => 'shipping_address_city',
      ),
      'shipping_address_state' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SHIPPING_ADDRESS_STATE',
        'width' => '10%',
        'default' => true,
        'name' => 'shipping_address_state',
      ),
      'ticker_symbol' => 
      array (
        'name' => 'ticker_symbol',
        'default' => true,
        'width' => '10%',
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
