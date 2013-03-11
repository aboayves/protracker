<?php
$module_name = 'av_Health_Insurance';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accounts_name',
            'label' => 'LBL_ACCOUNTS_NAME',
          ),
          1 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'av_companies_name',
            'label' => 'LBL_AV_COMPANIES_NAME',
          ),
          1 => 
          array (
            'name' => 'policy_number',
            'comment' => '',
            'label' => 'LBL_POLICY_NUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'comment' => '',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'comment' => '',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'issue_date',
            'comment' => '',
            'label' => 'LBL_ISSUE_DATE',
          ),
        ),
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'endorsements',
            'comment' => '',
            'label' => 'LBL_ENDORSEMENTS',
          ),
          1 => 'assigned_user_name',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        7 => 
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
      'lbl_editview_panel6' => 
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
            'name' => 'copay_office',
            'comment' => '',
            'label' => 'LBL_COPAY_OFFICE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'copay_er',
            'comment' => '',
            'label' => 'LBL_COPAY_ER',
          ),
          1 => 
          array (
            'name' => 'copay_specialist',
            'comment' => '',
            'label' => 'LBL_COPAY_SPECIALIST',
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
          1 => '',
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'coinsurance_percent',
            'comment' => '',
            'label' => 'LBL_COINSURANCE_PERCENT',
          ),
          1 => 
          array (
            'name' => 'individual_stop_loss_limit',
            'comment' => '',
            'label' => 'LBL_INDIVIDUAL_STOP_LOSS_LIMIT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'family_stop_loss_limit',
            'comment' => '',
            'label' => 'LBL_FAMILY_STOP_LOSS_LIMIT',
          ),
          1 => 
          array (
            'name' => 'lifetime_maximum',
            'comment' => '',
            'label' => 'LBL_LIFETIME_MAXIMUM',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'premium_frequency',
            'comment' => '',
            'label' => 'LBL_PREMIUM_FREQUENCY',
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
            'name' => 'premium',
            'comment' => '',
            'label' => 'LBL_PREMIUM',
          ),
          1 => '',
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'agent_phone',
            'comment' => '',
            'label' => 'LBL_AGENT_PHONE',
          ),
          1 => 
          array (
            'name' => 'agent_fax',
            'comment' => '',
            'label' => 'LBL_AGENT_FAX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'agent_email',
            'comment' => '',
            'label' => 'LBL_AGENT_EMAIL',
          ),
        ),
      ),
    ),
  ),
);
?>
