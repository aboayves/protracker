<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
      'maxColumns' => '2',
      'useTabs' => true,
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
        1 => 
        array (
          'file' => 'include/javascript/tiny_mce/tiny_mce.js',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'preferred_comm_c',
            'studio' => 'visible',
            'label' => 'LBL_PREFERRED_COMM',
          ),
        ),
        1 => 
        array (
          0 => 'account_type',
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'client_number',
            'comment' => '',
            'label' => 'LBL_CLIENT_NUMBER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'priority_c',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
          ),
          1 => 
          array (
            'name' => 'client_since_c',
            'label' => 'LBL_CLIENT_SINCE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 'envelope',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'current_net_worth',
            'label' => 'LBL_CURRENT_NET_WORTH',
          ),
          1 => 
          array (
            'name' => 'managed_assets',
            'comment' => 'Gets the managed assets.',
            'studio' => 'visible',
            'label' => 'LBL_MANAGED_ASSETS',
            'type' => 'readonly',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'av_offices_accounts_1_name',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'document_path',
            'comment' => '',
            'label' => 'LBL_DOCUMENT_PATH',
          ),
          1 => 
          array (
            'name' => 'report_name',
            'comment' => '',
            'label' => 'LBL_REPORT_NAME',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'contacts_accounts_1_name',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'net_worth',
            'label' => 'LBL_NET_WORTH',
          ),
          1 => 
          array (
            'name' => 'client_id',
            'label' => 'LBL_CLIENT_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'client_since',
            'label' => 'LBL_CLIENT_SINCE',
          ),
          1 => 
          array (
            'name' => 'accounting_id',
            'label' => 'LBL_ACCOUNTING_ID',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'married',
            'label' => 'LBL_MARRIED',
          ),
          1 => 
          array (
            'name' => 'last_rebal',
            'label' => 'LBL_LAST_REBAL',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'is_billable_client',
            'comment' => '',
            'label' => 'LBL_IS_BILLABLE_CLIENT',
          ),
          1 => 
          array (
            'name' => 'accounting_id_c',
            'label' => 'LBL_ACCOUNTING_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_frequency',
            'comment' => '',
            'label' => 'LBL_BILLING_FREQUENCY',
          ),
          1 => 
          array (
            'name' => 'billing_group',
            'comment' => '',
            'label' => 'LBL_BILLING_GROUP',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_type',
            'comment' => '',
            'label' => 'LBL_BILLING_TYPE',
          ),
          1 => 
          array (
            'name' => 'billing_rate',
            'comment' => '',
            'label' => 'LBL_BILLING_RATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'rate_schedule',
            'comment' => '',
            'label' => 'LBL_RATE_SCHEDULE',
          ),
          1 => 
          array (
            'name' => 'send_bill_to',
            'comment' => '',
            'label' => 'LBL_SEND_BILL_TO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'when_billed',
            'comment' => '',
            'label' => 'LBL_WHEN_BILLED',
          ),
          1 => 'annual_revenue',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'billing_description',
            'comment' => '',
            'label' => 'LBL_BILLING_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'billing_exceptions',
            'comment' => '',
            'label' => 'LBL_BILLING_EXCEPTIONS',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'termination_date',
            'comment' => '',
            'label' => 'LBL_TERMINATION_DATE',
          ),
          1 => 
          array (
            'name' => 'is_terminated',
            'comment' => '',
            'label' => 'LBL_IS_TERMINATED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'termination_reason',
            'comment' => '',
            'label' => 'LBL_TERMINATION_REASON',
          ),
        ),
      ),
    ),
  ),
);
?>
