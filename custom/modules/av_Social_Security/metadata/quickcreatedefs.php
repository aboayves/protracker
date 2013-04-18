<?php
$module_name = 'av_Social_Security';
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
          1 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'year_of_estimate',
            'comment' => '',
            'label' => 'LBL_YEAR_OF_ESTIMATE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'retirement_at_age_62',
            'comment' => '',
            'label' => 'LBL_RETIREMENT_AT_AGE_62',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'retirement_at_age_67',
            'comment' => '',
            'label' => 'LBL_RETIREMENT_AT_AGE_67',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'retirement_at_age_70',
            'comment' => '',
            'label' => 'LBL_RETIREMENT_AT_AGE_70',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
