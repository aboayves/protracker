<?php
$viewdefs ['Contacts'] = 
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
            'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
          ),
          5 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_NAME}" accessKey="{$MOD.LBL_NAME}" class="button" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\';this.form.action.value=\'Export\'; this.form.return_id.value=\'{$fields.id.value}\'" type="submit" name="button" value="Export">',
          ),
          6 => 
          array (
            'customCode' => '<input title="Quick Envelope" type="button" name="quick_envelope_button" id="quick_envelope_button" onclick="window.location=\'index.php?entryPoint=QuickMerge&module=Contacts&id={$fields.id.value}&template=contact_envelope.docx\';" value="Quick Envelope">',
          ),
          7 => 
          array (
            'customCode' => '<input title="Quick Letter" type="button" name="quick_letter_button" id="quick_letter_button" onclick="window.location=\'index.php?entryPoint=QuickMerge&module=Contacts&id={$fields.id.value}&template=contact_letter.docx\';" value="Quick Letter">',
          ),
          8 => 
          array (
            'customCode' => '<input title="Mail Merge" type="button" name="mail_merge_button" id="mail_merge_button" onclick="window.location=\'index.php?module=MailMerge&action=index&mailmerge_module=Contacts&uid={$fields.id.value}&return_module=Contacts&return_action=DetailView&return_id={$fields.id.value}\';" value="Mail Merge">',
          ),
          9 => 
          array (
            'customCode' => '<input onclick="window.location=\'index.php?module=av_Workflow&action=assign&populate_parent_type=Contacts&populate_parent=true&populate_parent_name={$fields.name.value}&populate_parent_id={$fields.id.value}\';" title="Assign Workflow" type="button" name="assignWorkflow" id="assignWorkflow" value="Assign Workflow">',
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
          'file' => 'modules/Leads/Lead.js',
        ),
      ),
      'syncDetailEditViews' => true,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
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
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'enableConnectors' => true,
              'module' => 'Contacts',
              'connectors' => 
              array (
                0 => 'ext_rest_twitter',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'picture',
            'label' => 'LBL_PICTURE_FILE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'report_salutation',
            'comment' => '',
            'label' => 'LBL_REPORT_SALUTATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'av_offices_name',
            'label' => 'LBL_AV_OFFICES_NAME',
          ),
          1 => 
          array (
            'name' => 'av_contact_types_name',
            'label' => 'LBL_AV_CONTACT_TYPES_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'report_name',
            'comment' => '',
            'label' => 'LBL_REPORT_NAME',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNT_NAME',
            'displayParams' => 
            array (
            ),
          ),
          1 => 
          array (
            'name' => 'contact_priority',
            'label' => 'LBL_CONTACT_PRIORITY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'spouse_name',
            'label' => 'LBL_SPOUSE_NAME',
          ),
          1 => 
          array (
            'name' => 'document_path',
            'comment' => '',
            'label' => 'LBL_DOCUMENT_PATH',
            'customCode' => '<a href="file://{$fields.document_path.value}">{$fields.document_path.value}</a>',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 'team_name',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'label' => 'LBL_MOBILE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_work',
            'label' => 'LBL_OFFICE_PHONE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX_PHONE',
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
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
          1 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'home_address_street',
            'comment' => '',
            'label' => 'LBL_HOME_ADDRESS_STREET',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'home',
            ),
          ),
          1 => 
          array (
            'name' => 'work_address_street',
            'comment' => '',
            'label' => 'LBL_WORK_ADDRESS_STREET',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'work',
            ),
          ),
        ),
        7 => 
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
        8 => 
        array (
          0 => 
          array (
            'name' => 'alt_address_street',
            'label' => 'LBL_ALTERNATE_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
            ),
          ),
          1 => 
          array (
            'name' => 'other_address_street',
            'comment' => 'Street address for other address',
            'displayParams' => 
            array (
              'key' => 'other',
            ),
            'label' => 'LBL_OTHER_ADDRESS_STREET',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_date_start',
            'comment' => '',
            'label' => 'LBL_PRIMARY_ADDRESS_DATE_START',
          ),
          1 => 
          array (
            'name' => 'primary_address_date_end',
            'comment' => '',
            'label' => 'LBL_PRIMARY_ADDRESS_DATE_END',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'comment' => '',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'linkedin_url',
            'comment' => '',
            'label' => 'LBL_LINKEDIN_URL',
            'customCode' => '<a href="{$fields.linkedin_url.value}">{$fields.linkedin_url.value}</a>',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'facebook_url',
            'comment' => '',
            'label' => 'LBL_FACEBOOK_URL',
            'customCode' => '<a href="{$fields.facebook_url.value}">{$fields.facebook_url.value}</a>',
          ),
          1 => 
          array (
            'name' => 'twitter_url',
            'comment' => '',
            'label' => 'LBL_TWITTER_URL',
            'customCode' => '<a href="{$fields.twitter_url.value}">{$fields.twitter_url.value}</a>',
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
          1 => 'age',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'birthplace',
            'comment' => '',
            'label' => 'LBL_BIRTHPLACE',
          ),
          1 => 
          array (
            'name' => 'ssn',
            'label' => 'LBL_SSN',
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
            'name' => 'children',
            'comment' => '',
            'label' => 'LBL_CHILDREN',
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
            'name' => 'date_of_death',
            'comment' => '',
            'label' => 'LBL_DATE_OF_DEATH',
          ),
        ),
        6 => 
        array (
          0 => '',
          1 => '',
        ),
        7 => 
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
        8 => 
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
        9 => 
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
        10 => 
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
        11 => 
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
        12 => 
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
        13 => 
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
            'name' => 'av_companies_name',
            'comment' => '',
            'label' => 'LBL_AV_COMPANIES_NAME',
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
            'name' => 'department',
            'label' => 'LBL_DEPARTMENT',
          ),
          1 => 
          array (
            'name' => 'title',
            'comment' => 'The title of the contact',
            'label' => 'LBL_TITLE',
          ),
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
          1 => '',
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
            'name' => 'referral_name',
            'label' => 'LBL_REFERRAL_NAME',
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
          0 => 
          array (
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
          ),
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
          0 => 
          array (
            'name' => 'is_sec_related',
            'comment' => '',
            'label' => 'LBL_IS_SEC_RELATED',
          ),
          1 => 
          array (
            'name' => 'alias',
            'comment' => '',
            'label' => 'LBL_ALIAS',
          ),
        ),
        5 => 
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
        6 => 
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
        7 => 
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
