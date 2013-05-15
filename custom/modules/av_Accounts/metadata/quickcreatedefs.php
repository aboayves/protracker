<?php
$module_name = 'av_Accounts';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" id="name" name="name" value="Account">',
        ),
      ),
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
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'av_Account_Types_name',
            'label' => 'LBL_AV_ACCOUNT_TYPES_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'account_number',
            'comment' => '',
            'label' => 'LBL_ACCOUNT_NUMBER',
          ),
          1 => 
          array (
            'name' => 'ownership_type',
            'comment' => '',
            'label' => 'LBL_OWNERSHIP_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'value',
            'label' => 'LBL_VALUE',
          ),
          1 => 
          array (
            'name' => 'value_date',
            'comment' => '',
            'label' => 'LBL_VALUE_DATE',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
