<?php
$module_name = 'av_Offices';
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
        0 => 
        array (
          'name' => 'office_name',
          'comment' => '',
          'label' => 'LBL_OFFICE_NAME',
        ),
      ),
      1 => 
      array (
        0 => 'name',
      ),
      2 => 
      array (
        0 => 'phone_office',
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'phone_fax',
          'comment' => 'The fax phone number of this company',
          'label' => 'LBL_FAX',
        ),
      ),
      4 => 
      array (
        0 => 'email1',
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'website',
          'type' => 'link',
        ),
      ),
      6 => 
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
