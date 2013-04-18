<?php
$module_name = 'av_Tax_Returns';
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
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
          1 => 
          array (
            'name' => 'tax_year',
            'comment' => '',
            'label' => 'LBL_TAX_YEAR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'av_tax_forms_name',
            'label' => 'LBL_AV_TAX_FORMS_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'return_type',
            'comment' => '',
            'label' => 'LBL_RETURN_TYPE',
          ),
          1 => 
          array (
            'name' => 'filing_status',
            'comment' => '',
            'label' => 'LBL_FILING_STATUS',
          ),
        ),
        4 => 
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
        5 => 
        array (
          0 => 'description',
          1 => 'team_name',
        ),
        6 => 
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
            'name' => 'total_income',
            'comment' => '',
            'label' => 'LBL_TOTAL_INCOME',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'adjusted_gross_income',
            'comment' => '',
            'label' => 'LBL_ADJUSTED_GROSS_INCOME',
          ),
          1 => 
          array (
            'name' => 'alternative_minimum_tax',
            'comment' => '',
            'label' => 'LBL_ALTERNATIVE_MINIMUM_TAX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'taxable_income',
            'comment' => '',
            'label' => 'LBL_TAXABLE_INCOME',
          ),
          1 => 
          array (
            'name' => 'liability',
            'comment' => '',
            'label' => 'LBL_LIABILITY',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'short_term_loss_carryover',
            'comment' => '',
            'label' => 'LBL_SHORT_TERM_LOSS_CARRYOVER',
          ),
          1 => 
          array (
            'name' => 'short_term_capital_gains',
            'comment' => '',
            'label' => 'LBL_SHORT_TERM_CAPITAL_GAINS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'long_term_loss_carryover',
            'comment' => '',
            'label' => 'LBL_LONG_TERM_LOSS_CARRYOVER',
          ),
          1 => 
          array (
            'name' => 'long_term_capital_gains',
            'comment' => '',
            'label' => 'LBL_LONG_TERM_CAPITAL_GAINS',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_filed',
            'comment' => '',
            'label' => 'LBL_DATE_FILED',
          ),
          1 => 
          array (
            'name' => 'on_file',
            'comment' => '',
            'label' => 'LBL_ON_FILE',
          ),
        ),
      ),
    ),
  ),
);
?>
