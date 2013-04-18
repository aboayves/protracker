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
          0 => 
          array (
            'name' => 'accounts_name',
            'label' => 'LBL_ACCOUNTS_NAME',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
          1 => 
          array (
            'name' => 'av_offices_name',
            'label' => 'LBL_AV_OFFICES_NAME',
          ),
        ),
        2 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'gift_date',
            'comment' => '',
            'label' => 'LBL_GIFT_DATE',
          ),
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
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
