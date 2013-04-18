<?php
$module_name = 'av_Social_Security';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
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
        0 => 
        array (
          'name' => 'contacts_name',
          'label' => 'LBL_CONTACTS_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'year_of_estimate',
          'comment' => '',
          'label' => 'LBL_YEAR_OF_ESTIMATE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'retirement_at_age_62',
          'comment' => '',
          'label' => 'LBL_RETIREMENT_AT_AGE_62',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'retirement_at_age_67',
          'comment' => '',
          'label' => 'LBL_RETIREMENT_AT_AGE_67',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'retirement_at_age_70',
          'comment' => '',
          'label' => 'LBL_RETIREMENT_AT_AGE_70',
        ),
      ),
    ),
  ),
);
?>
