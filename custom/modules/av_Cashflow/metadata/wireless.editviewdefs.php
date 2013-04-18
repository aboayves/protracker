<?php
$module_name = 'av_Cashflow';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
        0 => 'assigned_user_name',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'document_name',
          'label' => 'LBL_DOC_NAME',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'year',
          'comment' => '',
          'label' => 'LBL_YEAR',
        ),
      ),
      4 => 
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
      5 => 
      array (
        0 => 'active_date',
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'income_per_month',
          'comment' => '',
          'label' => 'LBL_INCOME_PER_MONTH',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'savings_per_month',
          'comment' => '',
          'label' => 'LBL_SAVINGS_PER_MONTH',
        ),
      ),
      9 => 
      array (
        0 => 
        array (
          'name' => 'fixed_expenses_per_month',
          'comment' => '',
          'label' => 'LBL_FIXED_EXPENSES_PER_MONTH',
        ),
      ),
      10 => 
      array (
        0 => 
        array (
          'name' => 'variable_expenses_per_month',
          'comment' => '',
          'label' => 'LBL_VARIABLE_EXPENSES_PER_MONTH',
        ),
      ),
    ),
  ),
);
?>
