<?php
$module_name = 'av_Companies';
$viewdefs [$module_name] = 
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
        0 => 'name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'short_name',
          'comment' => '',
          'label' => 'LBL_SHORT_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'industry',
          'comment' => 'The company belongs in this industry',
          'label' => 'LBL_INDUSTRY',
        ),
      ),
      3 => 
      array (
        0 => 'phone_office',
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'phone_fax',
          'comment' => 'The fax phone number of this company',
          'label' => 'LBL_FAX',
        ),
      ),
      5 => 
      array (
        0 => 'email1',
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'website',
          'type' => 'link',
        ),
      ),
      7 => 
      array (
        0 => 'assigned_user_name',
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'shipping_address_street',
          'comment' => 'The street address used for for shipping purposes',
          'label' => 'LBL_SHIPPING_ADDRESS_STREET',
        ),
      ),
      9 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
  ),
);
?>
