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
        2 => 
        array (
          'file' => 'custom/modules/Accounts/copy_primary_contact_address.js',
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
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'client_salutation',
            'comment' => '',
            'label' => 'LBL_CLIENT_SALUTATION',
          ),
          1 => 
          array (
            'name' => 'primary_contact_name',
            'displayParams' => 
            array (
              'call_back_function' => 'set_location_querystring',
              'field' => 
              array (
                'onChange' => 'populateEmail();',
              ),
            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'av_Offices_name',
            'label' => 'LBL_AV_OFFICES_NAME',
          ),
          1 => 'secondary_contact_name',
        ),
        3 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'av_client_types_name',
            'label' => 'LBL_AV_CLIENT_TYPES_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'client_since_date',
            'comment' => '',
            'label' => 'LBL_CLIENT_SINCE_DATE',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'married',
            'label' => 'LBL_MARRIED',
          ),
          1 => 
          array (
            'name' => 'priority',
            'comment' => '',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        6 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'client_number',
            'comment' => '',
            'label' => 'LBL_CLIENT_NUMBER',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'current_net_worth',
            'label' => 'LBL_CURRENT_NET_WORTH',
          ),
          1 => 
          array (
            'name' => 'phase',
            'comment' => '',
            'label' => 'LBL_PHASE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'managed_assets',
            'comment' => 'Gets the managed assets.',
            'studio' => 'visible',
            'label' => 'LBL_MANAGED_ASSETS',
            'type' => 'readonly',
          ),
          1 => 
          array (
            'name' => 'relationship_type',
            'comment' => '',
            'label' => 'LBL_RELATIONSHIP_TYPE',
          ),
        ),
        9 => 
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
        10 => 
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
        11 => 
        array (
          0 => 
          array (
            'name' => 'last_rebal',
            'label' => 'LBL_LAST_REBAL',
          ),
          1 => 
          array (
            'name' => 'is_investment_client',
            'comment' => '',
            'label' => 'LBL_IS_INVESTMENT_CLIENT',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
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
        13 => 
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
            'name' => 'phone_home',
            'comment' => '',
            'label' => 'LBL_PHONE_HOME',
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
            'name' => 'phone_work',
            'comment' => '',
            'label' => 'LBL_PHONE_WORK',
          ),
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'comment' => '',
            'label' => 'LBL_PHONE_MOBILE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'preferred_communication',
            'comment' => '',
            'label' => 'LBL_PREFERRED_COMMUNICATION',
          ),
          1 => 
          array (
            'name' => 'preferred_document_submittal',
            'comment' => '',
            'label' => 'LBL_PREFERRED_DOCUMENT_SUBMITTAL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'preferred_calling_time',
            'comment' => '',
            'label' => 'LBL_PREFERRED_CALLING_TIME',
          ),
          1 => 
          array (
            'name' => 'preferred_meeting_time',
            'comment' => '',
            'label' => 'LBL_PREFERRED_MEETING_TIME',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'mailing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'mailing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
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
            'name' => 'accounting_id',
            'label' => 'LBL_ACCOUNTING_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'send_bill_to',
            'comment' => '',
            'label' => 'LBL_SEND_BILL_TO',
          ),
          1 => 
          array (
            'name' => 'billed_custodian',
            'comment' => '',
            'label' => 'LBL_BILLED_CUSTODIAN',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 'annual_revenue',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_group',
            'comment' => '',
            'label' => 'LBL_BILLING_GROUP',
          ),
          1 => 
          array (
            'name' => 'billing_frequency',
            'comment' => '',
            'label' => 'LBL_BILLING_FREQUENCY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'billing_type',
            'comment' => '',
            'label' => 'LBL_BILLING_TYPE',
          ),
          1 => 
          array (
            'name' => 'rate_schedule',
            'comment' => '',
            'label' => 'LBL_RATE_SCHEDULE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'when_billed',
            'comment' => '',
            'label' => 'LBL_WHEN_BILLED',
          ),
          1 => 
          array (
            'name' => 'billing_rate',
            'comment' => '',
            'label' => 'LBL_BILLING_RATE',
          ),
        ),
        6 => 
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
            'name' => 'is_terminated',
            'comment' => '',
            'label' => 'LBL_IS_TERMINATED',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'termination_date',
            'comment' => '',
            'label' => 'LBL_TERMINATION_DATE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'termination_reason',
            'comment' => '',
            'label' => 'LBL_TERMINATION_REASON',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
