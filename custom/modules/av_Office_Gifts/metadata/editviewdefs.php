<?php
$module_name = 'av_Office_Gifts';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
          1 => 'assigned_user_name',
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
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'accounts_av_office_gifts_1_name',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'contacts_av_office_gifts_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
