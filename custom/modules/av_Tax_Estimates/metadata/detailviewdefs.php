<?php
$module_name = 'av_Tax_Estimates';
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
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
            'name' => 'av_tax_forms_name',
            'label' => 'LBL_AV_TAX_FORMS_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'return_type',
            'comment' => '',
            'label' => 'LBL_RETURN_TYPE',
          ),
          1 => 
          array (
            'name' => 'tax_year',
            'comment' => '',
            'label' => 'LBL_TAX_YEAR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'district',
            'comment' => '',
            'label' => 'LBL_DISTRICT',
          ),
          1 => 
          array (
            'name' => 'residency',
            'comment' => '',
            'label' => 'LBL_RESIDENCY',
          ),
        ),
        4 => 
        array (
          0 => 'description',
          1 => 'team_name',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
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
            'name' => 'q1_amount',
            'comment' => '',
            'label' => 'LBL_Q1_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'date_q1_paid',
            'comment' => '',
            'label' => 'LBL_DATE_Q1_PAID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'q2_amount',
            'comment' => '',
            'label' => 'LBL_Q2_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'date_q2_paid',
            'comment' => '',
            'label' => 'LBL_DATE_Q2_PAID',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'q3_amount',
            'comment' => '',
            'label' => 'LBL_Q3_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'date_q3_paid',
            'comment' => '',
            'label' => 'LBL_DATE_Q3_PAID',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'q4_amount',
            'comment' => '',
            'label' => 'LBL_Q4_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'date_q4_paid',
            'comment' => '',
            'label' => 'LBL_DATE_Q4_PAID',
          ),
        ),
      ),
    ),
  ),
);
?>
