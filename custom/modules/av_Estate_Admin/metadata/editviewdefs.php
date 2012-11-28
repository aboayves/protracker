<?php
$module_name = 'av_Estate_Admin';
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
            'name' => 'accountant',
            'comment' => '',
            'label' => 'LBL_ACCOUNTANT',
          ),
          1 => 
          array (
            'name' => 'attorney',
            'comment' => '',
            'label' => 'LBL_ATTORNEY',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'contacts_av_estate_admin_1_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'accounts_av_estate_admin_1_name',
          ),
          1 => 
          array (
            'name' => 'alternate_valuation_date',
            'comment' => '',
            'label' => 'LBL_ALTERNATE_VALUATION_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_of_death',
            'comment' => '',
            'label' => 'LBL_DATE_OF_DEATH',
          ),
          1 => 
          array (
            'name' => 'ein',
            'comment' => '',
            'label' => 'LBL_EIN',
          ),
        ),
        5 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
