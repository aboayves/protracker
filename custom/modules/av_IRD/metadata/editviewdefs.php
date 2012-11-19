<?php
$module_name = 'av_IRD';
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
      'syncDetailEditViews' => true,
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
            'name' => 'contacts_av_ird_1_name',
            'label' => 'LBL_CONTACTS_AV_IRD_1_FROM_CONTACTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'accounts_av_ird_1_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'income_date',
            'comment' => '',
            'label' => 'LBL_INCOME_DATE',
          ),
          1 => 
          array (
            'name' => 'amount',
            'comment' => '',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
          1 => 'assigned_user_name',
        ),
        4 => 
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
