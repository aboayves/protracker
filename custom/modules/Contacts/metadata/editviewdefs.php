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
            'name' => 'full_name',
            'studio' => 
            array (
              'listview' => false,
            ),
            'label' => 'LBL_NAME',
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
          1 => 
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
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'middle_name',
            'comment' => '',
            'label' => 'LBL_MIDDLE_NAME',
          ),
          1 => 
          array (
            'name' => 'av_Offices_name',
            'label' => 'LBL_AV_OFFICES_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'suffix',
            'comment' => '',
            'label' => 'LBL_SUFFIX',
          ),
          1 => 
          array (
            'name' => 'av_Contact_Types_name',
            'label' => 'LBL_AV_CONTACT_TYPES_NAME',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'contact_priority',
            'label' => 'LBL_CONTACT_PRIORITY',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'nickname',
            'comment' => '',
            'label' => 'LBL_NICKNAME',
          ),
          1 => 
          array (
            'name' => 'annual_household_income',
            'comment' => '',
            'label' => 'LBL_ANNUAL_HOUSEHOLD_INCOME',
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
          0 => '',
          1 => 
          array (
            'name' => 'report_salutation',
            'comment' => '',
            'label' => 'LBL_REPORT_SALUTATION',
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
          1 => 'team_name',
        ),
        10 => 
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
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'preferred_communication',
            'comment' => '',
            'label' => 'LBL_PREFERRED_COMMUNICATION',
          ),
          1 => 
          array (
            'name' => 'preferred_calling_time',
            'comment' => '',
            'label' => 'LBL_PREFERRED_CALLING_TIME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'preferred_document_submittal',
            'comment' => '',
            'label' => 'LBL_PREFERRED_DOCUMENT_SUBMITTAL',
          ),
          1 => 
          array (
            'name' => 'preferred_meeting_time',
            'comment' => '',
            'label' => 'LBL_PREFERRED_MEETING_TIME',
          ),
        ),
        2 => 
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
          1 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'home_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'home',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'work_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'work',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        4 => 
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
        5 => 
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_work',
            'comment' => 'Work phone number of the contact',
            'label' => 'LBL_OFFICE_PHONE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_MOBILE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_other',
            'comment' => 'Other phone number for the contact',
            'label' => 'LBL_OTHER_PHONE',
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
          1 => 
          array (
            'name' => 'primary_address_date_start',
            'comment' => '',
            'label' => 'LBL_PRIMARY_ADDRESS_DATE_START',
          ),
        ),
        9 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'primary_address_date_end',
            'comment' => '',
            'label' => 'LBL_PRIMARY_ADDRESS_DATE_END',
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ssn',
            'label' => 'LBL_SSN',
          ),
          1 => 
          array (
            'name' => 'birthplace',
            'comment' => '',
            'label' => 'LBL_BIRTHPLACE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'gender',
            'comment' => '',
            'label' => 'LBL_GENDER',
          ),
          1 => 
          array (
            'name' => 'marital_status',
            'studio' => 'visible',
            'label' => 'LBL_MARITAL_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'citizenship',
            'label' => 'LBL_CITIZENSHIP',
          ),
          1 => 
          array (
            'name' => 'anniversary_date',
            'comment' => '',
            'label' => 'LBL_ANNIVERSARY_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'maiden_name',
            'comment' => '',
            'label' => 'LBL_MAIDEN_NAME',
          ),
          1 => 
          array (
            'name' => 'date_of_death',
            'comment' => '',
            'label' => 'LBL_DATE_OF_DEATH',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'mothers_maiden_name',
            'comment' => '',
            'label' => 'LBL_MOTHERS_MAIDEN_NAME',
          ),
          1 => 
          array (
            'name' => 'children',
            'comment' => '',
            'label' => 'LBL_CHILDREN',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'civic',
            'comment' => '',
            'label' => 'LBL_CIVIC',
          ),
          1 => 
          array (
            'name' => 'professional',
            'comment' => '',
            'label' => 'LBL_PROFESSIONAL',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'volunteer',
            'comment' => '',
            'label' => 'LBL_VOLUNTEER',
          ),
          1 => 
          array (
            'name' => 'charities',
            'comment' => '',
            'label' => 'LBL_CHARITIES',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'religion',
            'comment' => '',
            'label' => 'LBL_RELIGION',
          ),
          1 => 
          array (
            'name' => 'politics',
            'comment' => '',
            'label' => 'LBL_POLITICS',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'hobbies',
            'comment' => '',
            'label' => 'LBL_HOBBIES',
          ),
          1 => 
          array (
            'name' => 'military_service',
            'comment' => '',
            'label' => 'LBL_MILITARY_SERVICE',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'health',
            'comment' => '',
            'label' => 'LBL_HEALTH',
          ),
          1 => 
          array (
            'name' => 'level_of_health',
            'comment' => '',
            'label' => 'LBL_LEVEL_OF_HEALTH',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'pets',
            'comment' => '',
            'label' => 'LBL_PETS',
          ),
          1 => 
          array (
            'name' => 'likes',
            'comment' => '',
            'label' => 'LBL_LIKES',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'refreshment',
            'comment' => '',
            'label' => 'LBL_REFRESHMENT',
          ),
          1 => 
          array (
            'name' => 'dislikes',
            'comment' => '',
            'label' => 'LBL_DISLIKES',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'employer',
            'comment' => '',
            'label' => 'LBL_EMPLOYER',
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
          0 => 'department',
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'report_to_name',
            'label' => 'LBL_REPORTS_TO',
          ),
          1 => 
          array (
            'name' => 'employment_status',
            'comment' => '',
            'label' => 'LBL_EMPLOYMENT_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'annual_income',
            'comment' => '',
            'label' => 'LBL_ANNUAL_INCOME',
          ),
          1 => 
          array (
            'name' => 'retirement_date',
            'comment' => '',
            'label' => 'LBL_RETIREMENT_DATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'assistant',
            'comment' => 'Name of the assistant of the contact',
            'label' => 'LBL_ASSISTANT',
          ),
          1 => 
          array (
            'name' => 'assistant_phone',
            'comment' => 'Phone number of the assistant of the contact',
            'label' => 'LBL_ASSISTANT_PHONE',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'education',
            'comment' => '',
            'label' => 'LBL_EDUCATION',
          ),
          1 => 
          array (
            'name' => 'level_of_education',
            'comment' => '',
            'label' => 'LBL_LEVEL_OF_EDUCATION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'school',
            'comment' => '',
            'label' => 'LBL_SCHOOL',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'is_student',
            'comment' => '',
            'label' => 'LBL_IS_STUDENT',
          ),
          1 => 
          array (
            'name' => 'annual_tuition',
            'comment' => '',
            'label' => 'LBL_ANNUAL_TUITION',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'priority',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
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
            'name' => 'referred_by',
            'comment' => '',
            'label' => 'LBL_REFERRED_BY',
          ),
          1 => 
          array (
            'name' => 'do_not_mail',
            'comment' => '',
            'label' => 'LBL_DO_NOT_MAIL',
          ),
        ),
        3 => 
        array (
          0 => 'campaign_name',
          1 => 
          array (
            'name' => 'do_not_email',
            'comment' => '',
            'label' => 'LBL_DO_NOT_EMAIL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'source_date',
            'comment' => '',
            'label' => 'LBL_SOURCE_DATE',
          ),
          1 => 
          array (
            'name' => 'sync_contact',
            'comment' => 'Synch to outlook?  (Meta-Data only)',
            'label' => 'LBL_SYNC_CONTACT',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_compliance_check',
            'comment' => '',
            'label' => 'LBL_DATE_COMPLIANCE_CHECK',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'id_type',
            'comment' => '',
            'label' => 'LBL_ID_TYPE',
          ),
          1 => 
          array (
            'name' => 'id_number',
            'comment' => '',
            'label' => 'LBL_ID_NUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'id_date_issued',
            'comment' => '',
            'label' => 'LBL_ID_DATE_ISSUED',
          ),
          1 => 
          array (
            'name' => 'id_date_expires',
            'comment' => '',
            'label' => 'LBL_ID_DATE_EXPIRES',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'id_issued_by',
            'comment' => '',
            'label' => 'LBL_ID_ISSUED_BY',
          ),
          1 => 
          array (
            'name' => 'id_on_file',
            'comment' => '',
            'label' => 'LBL_ID_ON_FILE',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => '',
        ),
        5 => 
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
        6 => 
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
        7 => 
        array (
          0 => 
          array (
            'name' => 'is_foreign_official',
            'comment' => '',
            'label' => 'LBL_IS_FOREIGN_OFFICIAL',
          ),
          1 => 
          array (
            'name' => 'is_party_to_private_bank',
            'comment' => '',
            'label' => 'LBL_IS_PARTY_TO_PRIVATE_BANK',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'foreign_official_info',
            'comment' => '',
            'label' => 'LBL_FOREIGN_OFFICIAL_INFO',
          ),
          1 => 
          array (
            'name' => 'private_bank_info',
            'comment' => '',
            'label' => 'LBL_PRIVATE_BANK_INFO',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'source_of_funds',
            'comment' => '',
            'label' => 'LBL_SOURCE_OF_FUNDS',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ein',
            'comment' => '',
            'label' => 'LBL_EIN',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'alternate_valuation_date',
            'comment' => '',
            'label' => 'LBL_ALTERNATE_VALUATION_DATE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'form706',
            'comment' => '',
            'label' => 'LBL_FORM706',
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
          1 => '',
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
