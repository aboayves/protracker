<?php
$module_name = 'av_Companies';
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
    ),
    'advanced_search' => 
    array (
      0 => 'name',
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
