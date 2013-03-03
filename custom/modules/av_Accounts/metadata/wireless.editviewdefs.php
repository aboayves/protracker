<?php
$module_name = 'av_Accounts';
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
          'name' => 'account_number',
          'comment' => '',
          'label' => 'LBL_ACCOUNT_NUMBER',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'av_account_types_name',
          'label' => 'LBL_AV_ACCOUNT_TYPES_NAME',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'custodian',
          'comment' => '',
          'label' => 'LBL_CUSTODIAN',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'ownership_type',
          'comment' => '',
          'label' => 'LBL_OWNERSHIP_TYPE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'contacts_name',
          'label' => 'LBL_CONTACTS_NAME',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'value',
          'comment' => '',
          'label' => 'LBL_VALUE',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'value_date',
          'comment' => '',
          'label' => 'LBL_VALUE_DATE',
        ),
      ),
    ),
  ),
);
?>
