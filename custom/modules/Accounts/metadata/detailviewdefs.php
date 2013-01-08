<?php
$viewdefs ['Accounts'] = 
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
          4 => 
          array (
            'customCode' => '
<input type=\'hidden\' value=\'pt\' name=\'query\'>
<input type=\'hidden\' value=\'false\' name=\'to_pdf\'>
<input onclick="this.form.to_pdf.value=\'true\';this.form.action.value=\'CsvExport\';SUGAR.ajaxUI.submitForm(this.form);this.form.to_pdf.value=\'false\';" type=\'button\' name=\'csv_export\' value=\'Export to CSV\' />',
          ),
          5 => 
          array (
            'customCode' => '<input type="button"  title="Generate Networth Statement" value="Generate Networth Statement"name="GenerateNetworthStatement" id="GenerateNetworthStatement" onclick="$(\'#DialogForDatePicker\' ).dialog({ldelim}width:450{rdelim});"/>',
          ),
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
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
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
            'name' => 'report_salutation',
            'comment' => '',
            'label' => 'LBL_REPORT_SALUTATION',
          ),
          1 => 
          array (
            'name' => 'primary_contact_name',
            'label' => 'LBL_PRIMARY_CONTACT_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'av_Offices_name',
            'label' => 'LBL_AV_OFFICES_NAME',
          ),
          1 => 
          array (
            'name' => 'secondary_contact_name',
            'label' => 'LBL_SECONDARY_CONTACT_NAME',
          ),
        ),
        3 => 
        array (
          0 => 'envelope',
          1 => 
          array (
            'name' => 'av_Client_Types_name',
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
            'name' => 'current_net_worth',
            'label' => 'LBL_CURRENT_NET_WORTH',
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
          0 => 
          array (
            'name' => 'managed_assets',
            'comment' => 'Gets the managed assets.',
            'studio' => 'visible',
            'label' => 'LBL_MANAGED_ASSETS',
          ),
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
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 'team_name',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
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
            'comment' => 'The office phone number',
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
            'displayParams' => 
            array (
              'link_target' => '_blank',
            ),
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'The fax phone number of this company',
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
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'label' => 'LBL_SHIPPING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
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
            'name' => 'accounting_id',
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
          1 => 
          array (
            'name' => 'annual_revenue',
            'comment' => 'Annual revenue for this company',
            'label' => 'LBL_ANNUAL_REVENUE',
          ),
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
            'name' => 'is_investment_client',
            'comment' => '',
            'label' => 'LBL_IS_INVESTMENT_CLIENT',
          ),
        ),
        1 => 
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
        2 => 
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
