<?php
$viewdefs ['Contacts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'salutation',
            'comment' => 'Contact salutation (e.g., Mr, Ms)',
            'label' => 'LBL_SALUTATION',
          ),
          1 => 'picture',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_other',
            'comment' => 'Other phone number for the contact',
            'label' => 'LBL_OTHER_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_work',
            'comment' => 'Work phone number of the contact',
            'label' => 'LBL_OFFICE_PHONE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_MOBILE_PHONE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'comment' => 'The title of the contact',
            'label' => 'LBL_TITLE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'contact_priority',
            'label' => 'LBL_CONTACT_PRIORITY',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'Contact fax number',
            'label' => 'LBL_FAX_PHONE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'comments',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTS',
          ),
          1 => 'envelope',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'av_offices_contacts_1_name',
          ),
          1 => 
          array (
            'name' => 'av_tax_returns_contacts_1_name',
            'label' => 'LBL_AV_TAX_RETURNS_CONTACTS_1_FROM_AV_TAX_RETURNS_TITLE',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'av_account_owners_contacts_1_name',
          ),
          1 => 
          array (
            'name' => 'av_accounts_contacts_1_name',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'accounts_contacts_1_name',
          ),
          1 => 
          array (
            'name' => 'accounts_contacts_2_name',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'accounts_contacts_3_name',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'home_address_street',
            'comment' => '',
            'label' => 'LBL_HOME_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'work_address_street',
            'comment' => '',
            'displayParams' => 
            array (
              'key' => 'work',
            ),
            'label' => 'LBL_WORK_ADDRESS_STREET',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'alt_address_descr',
            'comment' => '',
            'label' => 'LBL_ALT_ADDRESS_DESCR',
          ),
          1 => 
          array (
            'name' => 'other_address_descr',
            'comment' => '',
            'label' => 'LBL_OTHER_ADDRESS_DESCR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'alt_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'label' => 'LBL_ALT_ADDRESS',
            'displayParams' => 
            array (
              'key' => 'alt',
              'copy' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'other_address_street',
            'comment' => 'Street address for other address',
            'hideLabel' => true,
            'displayParams' => 
            array (
              'key' => 'other',
            ),
            'label' => 'LBL_OTHER_ADDRESS_STREET',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'birthdate',
            'comment' => 'The birthdate of the contact',
            'label' => 'LBL_BIRTHDATE',
          ),
          1 => 
          array (
            'name' => 'age',
            'label' => 'LBL_AGE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ssn',
            'label' => 'LBL_SSN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'citizenship',
            'label' => 'LBL_CITIZENSHIP',
          ),
          1 => 
          array (
            'name' => 'marital_status',
            'studio' => 'visible',
            'label' => 'LBL_MARITAL_STATUS',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'priority',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'displayParams' => 
            array (
              'key' => 'billing',
              'copy' => 'primary',
              'billingKey' => 'primary',
              'additionalFields' => 
              array (
                'phone_office' => 'phone_work',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'date_of_hire',
            'comment' => '',
            'label' => 'LBL_DATE_OF_HIRE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'profession',
            'studio' => 'visible',
            'label' => 'LBL_PROFESSION',
          ),
          1 => 
          array (
            'name' => 'previous_employer',
            'comment' => '',
            'label' => 'LBL_PREVIOUS_EMPLOYER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'position',
            'studio' => 'visible',
            'label' => 'LBL_POSITION',
          ),
          1 => 
          array (
            'name' => 'employee_or_firm',
            'label' => 'LBL_EMPLOYEE_OR_FIRM',
          ),
        ),
        3 => 
        array (
          0 => 'department',
          1 => 
          array (
            'name' => 'contribution_apply',
            'label' => 'LBL_CONTRIBUTION_APPLY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'gift_applicable',
            'label' => 'LBL_GIFT_APPLICABLE',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'report_to_name',
            'label' => 'LBL_REPORTS_TO',
          ),
          1 => 
          array (
            'name' => 'sync_contact',
            'comment' => 'Synch to outlook?  (Meta-Data only)',
            'label' => 'LBL_SYNC_CONTACT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'lead_source',
            'comment' => 'How did the contact come about',
            'label' => 'LBL_LEAD_SOURCE',
          ),
          1 => 
          array (
            'name' => 'do_not_call',
            'comment' => 'An indicator of whether contact can be called',
            'label' => 'LBL_DO_NOT_CALL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'do_not_email',
            'comment' => '',
            'label' => 'LBL_DO_NOT_EMAIL',
          ),
        ),
        3 => 
        array (
          0 => 'team_name',
          1 => 
          array (
            'name' => 'do_not_mail',
            'comment' => '',
            'label' => 'LBL_DO_NOT_MAIL',
          ),
        ),
        4 => 
        array (
          0 => 'campaign_name',
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'send_adv_offer',
            'comment' => '',
            'label' => 'LBL_SEND_ADV_OFFER',
          ),
          1 => 
          array (
            'name' => 'alias',
            'comment' => '',
            'label' => 'LBL_ALIAS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'send_privacy_notice',
            'comment' => '',
            'label' => 'LBL_SEND_PRIVACY_NOTICE',
          ),
          1 => 
          array (
            'name' => 'is_sec_related',
            'comment' => '',
            'label' => 'LBL_IS_SEC_RELATED',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'send_birthday_card',
            'comment' => '',
            'label' => 'LBL_SEND_BIRTHDAY_CARD',
          ),
          1 => 
          array (
            'name' => 'send_newsletter_mail',
            'comment' => '',
            'label' => 'LBL_SEND_NEWSLETTER_MAIL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'send_anniversary_card',
            'comment' => '',
            'label' => 'LBL_SEND_ANNIVERSARY_CARD',
          ),
          1 => 
          array (
            'name' => 'send_newsletter_email',
            'comment' => '',
            'label' => 'LBL_SEND_NEWSLETTER_EMAIL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'send_holiday_gift',
            'comment' => '',
            'label' => 'LBL_SEND_HOLIDAY_GIFT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'aux_email',
            'label' => 'LBL_AUX_EMAIL',
          ),
          1 => 
          array (
            'name' => 'aux_mail',
            'label' => 'LBL_AUX_MAIL',
          ),
        ),
      ),
    ),
  ),
);
?>
