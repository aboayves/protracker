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
            'name' => 'managed_c',
            'studio' => 'visible',
            'label' => 'LBL_MANAGED',
          ),
          1 => 
          array (
            'name' => 'opened_c',
            'label' => 'LBL_OPENED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ownership_c',
            'studio' => 'visible',
            'label' => 'LBL_OWNERSHIP',
          ),
          1 => 
          array (
            'name' => 'as_of_c',
            'label' => 'LBL_AS_OF',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'asset_category_c',
            'studio' => 'visible',
            'label' => 'LBL_ASSET_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'account_number_c',
            'label' => 'LBL_ACCOUNT_NUMBER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'asset_type_c',
            'studio' => 'visible',
            'label' => 'LBL_ASSET_TYPE',
          ),
          1 => 
          array (
            'name' => 'cost_basis_c',
            'label' => 'LBL_COST_BASIS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'account_type_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_TYPE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'institution_c',
            'studio' => 'visible',
            'label' => 'LBL_INSTITUTION',
          ),
          1 => 
          array (
            'name' => 'term',
            'comment' => '',
            'label' => 'LBL_TERM',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'asset_class_c',
            'studio' => 'visible',
            'label' => 'LBL_ASSET_CLASS',
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
            'name' => 'accounts_av_accounts_name',
          ),
        ),
        10 => 
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
