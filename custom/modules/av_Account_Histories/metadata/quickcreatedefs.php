<?php
$module_name = 'av_Account_Histories';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
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
            'name' => 'av_Accounts_name',
            'label' => 'LBL_AV_ACCOUNTS_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'value_date',
            'comment' => '',
            'label' => 'LBL_VALUE_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'value',
            'comment' => '',
            'label' => 'LBL_VALUE',
          ),
        ),
      ),
    ),
  ),
);
?>
