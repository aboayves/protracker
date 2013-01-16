<?php
$module_name = 'av_Cashflow';
$_object_name = 'av_cashflow';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'year',
            'comment' => '',
            'label' => 'LBL_YEAR',
          ),
          1 => 'active_date',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'link' => 'uploadfile',
              'id' => 'id',
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
          1 => 'team_name',
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'income_per_month',
            'comment' => '',
            'label' => 'LBL_INCOME_PER_MONTH',
          ),
          1 => 
          array (
            'name' => 'income_per_year',
            'comment' => '',
            'label' => 'LBL_INCOME_PER_YEAR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'savings_per_month',
            'comment' => '',
            'label' => 'LBL_SAVINGS_PER_MONTH',
          ),
          1 => 
          array (
            'name' => 'savings_per_year',
            'comment' => '',
            'label' => 'LBL_SAVINGS_PER_YEAR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fixed_expenses_per_month',
            'comment' => '',
            'label' => 'LBL_FIXED_EXPENSES_PER_MONTH',
          ),
          1 => 
          array (
            'name' => 'fixed_expenses_per_year',
            'comment' => '',
            'label' => 'LBL_FIXED_EXPENSES_PER_YEAR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'variable_expenses_per_month',
            'comment' => '',
            'label' => 'LBL_VARIABLE_EXPENSES_PER_MONTH',
          ),
          1 => 
          array (
            'name' => 'variable_expenses_per_year',
            'comment' => '',
            'label' => 'LBL_VARIABLE_EXPENSES_PER_YEAR',
          ),
        ),
      ),
    ),
  ),
);
?>
