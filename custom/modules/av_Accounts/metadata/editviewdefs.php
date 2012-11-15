<?php
$module_name = 'av_Accounts';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" id="name" name="name" value="Account">',
        ),
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
      'useTabs' => true,
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
            'name' => 'value',
            'label' => 'LBL_VALUE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'av_account_types_av_accounts_1_name',
          ),
          1 => 
          array (
            'name' => 'as_of_c',
            'label' => 'LBL_AS_OF',
          ),
        ),
        2 => 
        array (
          1 => 
          array (
            'name' => 'ownership_c',
            'studio' => 'visible',
            'label' => 'LBL_OWNERSHIP',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'av_accounts_av_companies_1_name',
          ),
          1 => 
          array (
            'name' => 'accounts_av_accounts_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'opened_c',
            'label' => 'LBL_OPENED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'managed_c',
            'studio' => 'visible',
            'label' => 'LBL_MANAGED',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'cost_basis_c',
            'label' => 'LBL_COST_BASIS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'term',
            'comment' => '',
            'label' => 'LBL_TERM',
          ),
        ),
        8 => 
        array (
          0 => 'description',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'av_net_worth_av_accounts_name',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'target_bonds',
            'comment' => '',
            'label' => 'LBL_TARGET_BONDS',
          ),
          1 => 
          array (
            'name' => 'target_return',
            'comment' => '',
            'label' => 'LBL_TARGET_RETURN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'target_cash',
            'comment' => '',
            'label' => 'LBL_TARGET_CASH',
          ),
          1 => 
          array (
            'name' => 'target_stocks',
            'comment' => '',
            'label' => 'LBL_TARGET_STOCKS',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cash_balance',
            'comment' => '',
            'label' => 'LBL_CASH_BALANCE',
          ),
          1 => 
          array (
            'name' => 'cash_balance_date',
            'comment' => '',
            'label' => 'LBL_CASH_BALANCE_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cash_balance_high',
            'comment' => '',
            'label' => 'LBL_CASH_BALANCE_HIGH',
          ),
          1 => 
          array (
            'name' => 'cash_balance_high_percent',
            'comment' => '',
            'label' => 'LBL_CASH_BALANCE_HIGH_PERCENT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cash_balance_low',
            'comment' => '',
            'label' => 'LBL_CASH_BALANCE_LOW',
          ),
          1 => 
          array (
            'name' => 'cash_balance_low_percent',
            'comment' => '',
            'label' => 'LBL_CASH_BALANCE_LOW_PERCENT',
          ),
        ),
      ),
    ),
  ),
);
?>
