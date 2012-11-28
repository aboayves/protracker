<?php
$module_name = 'av_Health_Insurance';
$_object_name = 'av_health_insurance';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
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
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'link' => 'uploadfile',
              'id' => 'id',
            ),
          ),
        ),
        1 => 
        array (
          0 => 'category_id',
          1 => 'subcategory_id',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'status_id',
            'label' => 'LBL_DOC_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 'active_date',
          1 => 'exp_date',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'accounts_av_health_insurance_1_name',
          ),
          1 => 'team_name',
        ),
        6 => 
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
            'name' => 'agent_name',
            'comment' => '',
            'label' => 'LBL_AGENT_NAME',
          ),
          1 => 
          array (
            'name' => 'agent_phone',
            'comment' => '',
            'label' => 'LBL_AGENT_PHONE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'agent_email',
            'comment' => '',
            'label' => 'LBL_AGENT_EMAIL',
          ),
          1 => 
          array (
            'name' => 'agent_fax',
            'comment' => '',
            'label' => 'LBL_AGENT_FAX',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'copay',
            'comment' => '',
            'label' => 'LBL_COPAY',
          ),
          1 => 
          array (
            'name' => 'coinsurance_percent',
            'comment' => '',
            'label' => 'LBL_COINSURANCE_PERCENT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'copay_office',
            'comment' => '',
            'label' => 'LBL_COPAY_OFFICE',
          ),
          1 => 
          array (
            'name' => 'copay_er',
            'comment' => '',
            'label' => 'LBL_COPAY_ER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'copay_prescription_generic',
            'comment' => '',
            'label' => 'LBL_COPAY_PRESCRIPTION_GENERIC',
          ),
          1 => 
          array (
            'name' => 'copay_prescription_mailorder',
            'comment' => '',
            'label' => 'LBL_COPAY_PRESCRIPTION_MAILORDER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'copay_prescription_namebrand',
            'comment' => '',
            'label' => 'LBL_COPAY_PRESCRIPTION_NAMEBRAND',
          ),
          1 => 
          array (
            'name' => 'copay_specialist',
            'comment' => '',
            'label' => 'LBL_COPAY_SPECIALIST',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'premium',
            'comment' => '',
            'label' => 'LBL_PREMIUM',
          ),
          1 => 
          array (
            'name' => 'premium_due_date',
            'comment' => '',
            'label' => 'LBL_PREMIUM_DUE_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'premium_frequency',
            'comment' => '',
            'label' => 'LBL_PREMIUM_FREQUENCY',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'policy_number',
            'comment' => '',
            'label' => 'LBL_POLICY_NUMBER',
          ),
          1 => 
          array (
            'name' => 'type',
            'comment' => '',
            'label' => 'LBL_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'issue_date',
            'comment' => '',
            'label' => 'LBL_ISSUE_DATE',
          ),
          1 => 'status',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'comment' => '',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'end_date',
            'comment' => '',
            'label' => 'LBL_END_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'endorsements',
            'comment' => '',
            'label' => 'LBL_ENDORSEMENTS',
          ),
          1 => 
          array (
            'name' => 'file_ext',
            'label' => 'LBL_FILE_EXTENSION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'individual_deductible',
            'comment' => '',
            'label' => 'LBL_INDIVIDUAL_DEDUCTIBLE',
          ),
          1 => 
          array (
            'name' => 'family_deductible',
            'comment' => '',
            'label' => 'LBL_FAMILY_DEDUCTIBLE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'lifetime_maximum',
            'comment' => '',
            'label' => 'LBL_LIFETIME_MAXIMUM',
          ),
          1 => 
          array (
            'name' => 'individual_stop_loss_limit',
            'comment' => '',
            'label' => 'LBL_INDIVIDUAL_STOP_LOSS_LIMIT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'family_stop_loss_limit',
            'comment' => '',
            'label' => 'LBL_FAMILY_STOP_LOSS_LIMIT',
          ),
          1 => 
          array (
            'name' => 'file_mime_type',
            'label' => 'LBL_MIME',
          ),
        ),
      ),
    ),
  ),
);
?>
