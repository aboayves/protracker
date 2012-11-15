<?php
$module_name = 'av_Office_Gifts';
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
          0 => 'name',
          1 => 
          array (
            'name' => 'accounts_av_office_gifts_1_name',
            'label' => 'LBL_ACCOUNTS_AV_OFFICE_GIFTS_1_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'gift_date',
            'comment' => '',
            'label' => 'LBL_GIFT_DATE',
          ),
          1 => 
          array (
            'name' => 'value',
            'comment' => '',
            'label' => 'LBL_VALUE',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
