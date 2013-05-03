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
            'customCode' => '<input type="button"  title="View Net Worth Statement" value="View Net Worth Statement"name="GenerateNetworthStatement" id="GenerateNetworthStatement" onclick="$(\'#DialogForDatePicker\' ).dialog({ldelim}width:450{rdelim});"/>',
          ),
		  6 => 
          array (
            'customCode' => '<input onclick="window.location=\'index.php?module=av_Workflow&action=assign&populate_parent_type=Accounts&populate_parent=true&populate_parent_name={$fields.name.value}&populate_parent_id={$fields.id.value}\';" title="Assign Workflow" type="button" name="assignWorkflow" id="assignWorkflow" value="Assign Workflow">',
          ),
		  7 => array(
            'customCode' =>  '<input title="Send to LaserApp" type="button" name="laserapp_button" id="laserapp_button" onclick="window.location=\'index.php?entryPoint=LaserApp&module=Accounts&id={$fields.id.value}\';" value="Send to LaserApp">',
          ),
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
	  'useTabs' => true,
	  'tabDefs' => 
      array (
        'lbl_account_information' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'lbl_editview_panel2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'lbl_editview_panel1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'lbl_editview_panel4' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'lbl_editview_panel5' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
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
            'name' => 'primary_contact_name',
            'label' => 'LBL_PRIMARY_CONTACT_NAME',
          ),
          1 => 
          array (
            'name' => 'secondary_contact_name',
            'label' => 'LBL_CO_CLIENT_CONTACT_NAME',
          ),
		  1 => 
          array (
            'name' => 'secondary_contact_name',
            'label' => 'LBL_CO_CLIENT_CONTACT_NAME',
          ),
        ),
	    2 => 
        array (
          0 => 
          array (
            'name' => 'primary_contact_image',
            'label' => '',
            'displayParams' => 
            array (
              'trimColon' => 1,
            ),
            'customCode' => '
			{if $fields.primary_contact_image.value}
			<input type="hidden" value="$fields.primary_contact_image.value" id="primary_contact_image" class="sugar_field">
				<a href="javascript:SUGAR.image.lightbox(YAHOO.util.Dom.get(\'img_primary_contact_image\').src)">
				<img style="
				border: 1px solid black; 
				width: auto;
				height: 132px;
				float:left;
				margin-right: 5px;
				" src="index.php?entryPoint=download&amp;id={$fields.primary_contact_image.value}&amp;type=SugarFieldImage&amp;isTempFile=1" name="img_primary_contact_image" id="img_primary_contact_image">
				</a>
			{/if}
			
			<span>
				{if $fields.primary_contact_salutation.value}<b>{$fields.primary_contact_salutation.value}</b>{/if}
				{if $fields.primary_contact_birthdate.value}</br>DOB: {$fields.primary_contact_birthdate.value}{/if}
				{if $fields.primary_contact_age.value}</br>Age: {$fields.primary_contact_age.value}{/if}
				{if $fields.primary_contact_ssn.value}</br>SSN: {$fields.primary_contact_ssn.value}{/if}
				{if $fields.primary_contact_employer.value}</br>Employer: {$fields.primary_contact_employer.value}{/if}

			</span>
			',
          ),
          1 => 
          array (
            'name' => 'secondary_contact_image',
            'label' => ' ',
            'customCode' => '
			{if $fields.secondary_contact_image.value}
			<input id="secondary_contact_image" class="sugar_field" type="hidden" value="$fields.secondary_contact_image.value">
				<a href="javascript:SUGAR.image.lightbox(YAHOO.util.Dom.get(\'img_secondary_contact_image\').src)">
				<img 
				id="img_secondary_contact_image" 
				style=" 
				border: 1px solid black;
				width: auto;
				height: 132px;
				float:left;
				margin-right: 5px;
				" src="index.php?entryPoint=download&id={$fields.secondary_contact_image.value}&type=SugarFieldImage&isTempFile=1" name="img_secondary_contact_image">
					</a>
				{/if}

				<span>
				{if $fields.secondary_contact_salutation.value}<b>{$fields.secondary_contact_salutation.value}</b>{/if}
				{if $fields.secondary_contact_birthdate.value}</br>DOB: {$fields.secondary_contact_birthdate.value}{/if}
				{if $fields.secondary_contact_age.value}</br>Age: {$fields.secondary_contact_age.value}{/if}
				{if $fields.secondary_contact_ssn.value}</br>SSN: {$fields.secondary_contact_ssn.value}{/if}
				{if $fields.secondary_contact_employer.value}</br>Employer: {$fields.secondary_contact_employer.value}{/if}
			</span>
				',
          ),
        ),
		3 => 
        array (

          1 => 
          array (
            'name' => 'av_offices_name',
            'label' => 'LBL_AV_OFFICES_NAME',
          ),
        ),
        5 => 
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'relationship_type',
            'comment' => '',
            'label' => 'LBL_RELATIONSHIP_TYPE',
          ),
          1 => 
          array (
            'name' => 'priority',
            'comment' => '',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'av_offices_name',
            'label' => 'LBL_AV_OFFICES_NAME',
          ),
          1 => 
          array (
            'name' => 'client_number',
            'comment' => '',
            'label' => 'LBL_CLIENT_NUMBER',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'is_investment_client',
            'comment' => '',
            'label' => 'LBL_IS_INVESTMENT_CLIENT',
          ),
          1 => 
          array (
            'name' => 'phase',
            'comment' => '',
            'label' => 'LBL_PHASE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'managed_assets',
            'comment' => 'Gets the managed assets.',
            'studio' => 'visible',
            'label' => 'LBL_MANAGED_ASSETS',
          ),
          1 => 'campaign_name',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'current_net_worth',
            'label' => 'LBL_CURRENT_NET_WORTH',
          ),
          1 => 
          array (
            'name' => 'tax_year_end_date',
            'comment' => '',
            'label' => 'LBL_TAX_YEAR_END_DATE',
          ),
        ),
        11 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'document_path',
            'comment' => '',
            'label' => 'LBL_DOCUMENT_PATH',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 'team_name',
        ),
        13 => 
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
            'name' => 'preferred_communication',
          ),
          1 => 
          array (
            'name' => 'preferred_document_submittal',
            'comment' => '',
            'label' => 'LBL_PREFERRED_DOCUMENT_SUBMITTAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'preferred_calling_time',
          ),
          1 => 
          array (
            'name' => 'preferred_meeting_time',
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
            'name' => 'phone_work',
            'comment' => '',
            'label' => 'LBL_PHONE_WORK',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_home',
            'comment' => '',
            'label' => 'LBL_PHONE_HOME',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'The fax phone number of this company',
            'label' => 'LBL_FAX',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
            'displayParams' => 
            array (
              'link_target' => '_blank',
            ),
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'mailing_address_street',
            'comment' => '',
            'label' => 'LBL_MAILING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'mailing',
            ),
          ),
          1 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
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
            'name' => 'billed_custodian_id_name',
            'label' => 'LBL_BILLED_CUSTODIAN_ID_NAME',
          ),
        ),
        2 => 
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
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'billing_rate',
            'comment' => '',
            'label' => 'LBL_BILLING_RATE',
          ),
          1 => 
          array (
            'name' => 'when_billed',
            'comment' => '',
            'label' => 'LBL_WHEN_BILLED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'annual_revenue',
            'comment' => 'Annual revenue for this company',
            'label' => 'LBL_ANNUAL_REVENUE',
          ),
          1 => '',
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
          1 => 
          array (
            'name' => 'termination_date',
            'comment' => '',
            'label' => 'LBL_TERMINATION_DATE',
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
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'successor_advisor',
            'comment' => '',
            'label' => 'LBL_SUCCESSOR_ADVISOR',
          ),
          1 => 
          array (
            'name' => 'successor_transfer_date',
            'comment' => '',
            'label' => 'LBL_SUCCESSOR_TRANSFER_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'successor_info',
            'comment' => '',
            'label' => 'LBL_SUCCESSOR_INFO',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
