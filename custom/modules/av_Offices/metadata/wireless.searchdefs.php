<?php
$module_name = 'av_Offices';
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
      'phone_office' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE_OFFICE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_office',
      ),
      'office_address_city' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_OFFICE_ADDRESS_CITY',
        'width' => '10%',
        'name' => 'office_address_city',
      ),
      'office_address_state' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_OFFICE_ADDRESS_STATE',
        'width' => '10%',
        'name' => 'office_address_state',
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
