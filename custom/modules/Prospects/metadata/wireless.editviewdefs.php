<?php
$viewdefs ['Prospects'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
          'customCode' => '{html_options name="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          'displayParams' => 
          array (
            'wireless_edit_only' => true,
          ),
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'last_name',
          'displayParams' => 
          array (
            'wireless_edit_only' => true,
          ),
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
