<?php
$module_name = 'av_Transactions';
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
          0 => 
          array (
            'name' => 'av_accounts_name',
            'label' => 'LBL_AV_ACCOUNTS_NAME',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'related_account',
            'comment' => '',
            'label' => 'LBL_RELATED_ACCOUNT',
          ),
          1 => 
          array (
            'name' => 'related_account_number',
            'comment' => '',
            'label' => 'LBL_RELATED_ACCOUNT_NUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'transaction_date',
            'comment' => '',
            'label' => 'LBL_TRANSACTION_DATE',
          ),
          1 => 
          array (
            'name' => 'source',
            'comment' => '',
            'label' => 'LBL_SOURCE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'comment' => '',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'status',
            'comment' => '',
            'label' => 'LBL_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        5 => 
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
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'comment' => '',
            'label' => 'LBL_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'distribution_type',
            'comment' => '',
            'label' => 'LBL_DISTRIBUTION_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'federal_withholding_amount',
            'comment' => '',
            'label' => 'LBL_FEDERAL_WITHHOLDING_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'federal_withholding_percent',
            'comment' => '',
            'label' => 'LBL_FEDERAL_WITHHOLDING_PERCENT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'state_withholding_amount',
            'comment' => '',
            'label' => 'LBL_STATE_WITHHOLDING_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'state_withholding_percent',
            'comment' => '',
            'label' => 'LBL_STATE_WITHHOLDING_PERCENT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'advisor_fee',
            'comment' => '',
            'label' => 'LBL_ADVISOR_FEE',
          ),
          1 => 
          array (
            'name' => 'state',
            'comment' => '',
            'label' => 'LBL_STATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'custodian_fee',
            'comment' => '',
            'label' => 'LBL_CUSTODIAN_FEE',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'net_amount',
            'comment' => '',
            'label' => 'LBL_NET_AMOUNT',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'is_withdrawal_rate',
            'comment' => '',
            'label' => 'LBL_IS_WITHDRAWAL_RATE',
          ),
          1 => 
          array (
            'name' => 'is_contribution',
            'comment' => '',
            'label' => 'LBL_IS_CONTRIBUTION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'is_rmd_withdrawal',
            'comment' => '',
            'label' => 'LBL_IS_RMD_WITHDRAWAL',
          ),
          1 => 
          array (
            'name' => 'is_address_of_record',
            'comment' => '',
            'label' => 'LBL_IS_ADDRESS_OF_RECORD',
          ),
        ),
      ),
    ),
  ),
);
?>
