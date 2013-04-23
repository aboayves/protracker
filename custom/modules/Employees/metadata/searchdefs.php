<?php
$searchdefs ['Employees'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
      ),
      1 => 
      array (
        'name' => 'open_only_active_users',
        'label' => 'LBL_ONLY_ACTIVE',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'full_name' => 
      array (
        'type' => 'name',
        'studio' => 
        array (
          'formula' => false,
        ),
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'full_name',
      ),
      'department' => 
      array (
        'name' => 'department',
        'default' => true,
        'width' => '10%',
      ),
      'employee_status' => 
      array (
        'name' => 'employee_status',
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
      'address_street' => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
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
