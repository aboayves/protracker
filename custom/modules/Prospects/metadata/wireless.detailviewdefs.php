<?php
$viewdefs ['Prospects'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
      'maxColumns' => '1',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'first_name',
          'comment' => 'First name of the contact',
          'label' => 'LBL_FIRST_NAME',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'last_name',
          'comment' => 'Last name of the contact',
          'label' => 'LBL_LAST_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'phone_home',
          'comment' => 'Home phone number of the contact',
          'label' => 'LBL_HOME_PHONE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'phone_work',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'phone_mobile',
          'comment' => 'Mobile phone number of the contact',
          'label' => 'LBL_MOBILE_PHONE',
        ),
      ),
      5 => 
      array (
        0 => 'email1',
      ),
    ),
  ),
);
?>
