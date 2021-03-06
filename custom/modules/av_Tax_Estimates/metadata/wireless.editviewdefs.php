<?php
$module_name = 'av_Tax_Estimates';
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
          'name' => 'accounts_name',
          'label' => 'LBL_ACCOUNTS_NAME',
        ),
      ),
      1 => 
      array (
        0 => 'assigned_user_name',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'av_tax_forms_name',
          'label' => 'LBL_AV_TAX_FORMS_NAME',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'tax_year',
          'comment' => '',
          'label' => 'LBL_TAX_YEAR',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'return_type',
          'comment' => '',
          'label' => 'LBL_RETURN_TYPE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'district',
          'comment' => '',
          'label' => 'LBL_DISTRICT',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'residency',
          'comment' => '',
          'label' => 'LBL_RESIDENCY',
        ),
      ),
      7 => 
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
