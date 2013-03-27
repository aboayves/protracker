<?php
$searchdefs ['Prospects'] = 
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
      'phone_home' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_HOME_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_home',
      ),
      'phone_work' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_OFFICE_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_work',
      ),
      'phone_mobile' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_MOBILE_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_mobile',
      ),
      'email' => 
      array (
        'type' => 'email',
        'studio' => 
        array (
          'visible' => false,
          'searchview' => true,
        ),
        'label' => 'LBL_ANY_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email',
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
