<?php
$module_name = 'av_Accounts';
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
            'name' => 'account_number',
            'comment' => '',
            'label' => 'LBL_ACCOUNT_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ownership',
            'comment' => '',
            'label' => 'LBL_OWNERSHIP',
          ),
          1 => 
          array (
            'name' => 'value',
            'label' => 'LBL_VALUE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'av_account_types_av_accounts_1_name',
          ),
          1 => 
          array (
            'name' => 'value_date',
            'comment' => '',
            'label' => 'LBL_VALUE_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'cost_basis',
            'comment' => '',
            'label' => 'LBL_COST_BASIS',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cost_basis_date',
            'comment' => '',
            'label' => 'LBL_COST_BASIS_DATE',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'av_accounts_av_companies_1_name',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_closed',
            'comment' => '',
            'label' => 'LBL_DATE_CLOSED',
          ),
          1 => 
          array (
            'name' => 'accounts_av_accounts_name',
            'label' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        7 => 
        array (
          0 => 'description',
          1 => 'team_name',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'is_aum',
            'comment' => '',
            'label' => 'LBL_IS_AUM',
          ),
          1 => 
          array (
            'name' => 'is_rmd',
            'comment' => '',
            'label' => 'LBL_IS_RMD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'is_discretionary',
            'comment' => '',
            'label' => 'LBL_IS_DISCRETIONARY',
          ),
          1 => 
          array (
            'name' => 'is_withdrawal_asset',
            'comment' => '',
            'label' => 'LBL_IS_WITHDRAWAL_ASSET',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'is_lpoa',
            'comment' => '',
            'label' => 'LBL_IS_LPOA',
          ),
          1 => 
          array (
            'name' => 'is_fpoa',
            'comment' => '',
            'label' => 'LBL_IS_FPOA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'include_on_ips',
            'comment' => '',
            'label' => 'LBL_INCLUDE_ON_IPS',
          ),
          1 => 
          array (
            'name' => 'is_margin',
            'comment' => '',
            'label' => 'LBL_IS_MARGIN',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'is_billed',
            'comment' => '',
            'label' => 'LBL_IS_BILLED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'is_eft',
            'comment' => '',
            'label' => 'LBL_IS_EFT',
          ),
          1 => 
          array (
            'name' => 'is_checkwriting',
            'comment' => '',
            'label' => 'LBL_IS_CHECKWRITING',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'reinvest_capital_gains',
            'comment' => '',
            'label' => 'LBL_REINVEST_CAPITAL_GAINS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'reinvest_dividends',
            'comment' => '',
            'label' => 'LBL_REINVEST_DIVIDENDS',
          ),
          1 => 
          array (
            'name' => 'reinvest_interest',
            'comment' => '',
            'label' => 'LBL_REINVEST_INTEREST',
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
