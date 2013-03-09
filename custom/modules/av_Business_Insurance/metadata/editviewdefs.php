<?php
$module_name = 'av_Business_Insurance';
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
      'default' => 
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
            'name' => 'business_name',
            'comment' => '',
            'label' => 'LBL_BUSINESS_NAME',
          ),
        ),
        2 => 
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
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
        ),
        4 => 
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
        5 => 
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'endorsements',
            'comment' => '',
            'label' => 'LBL_ENDORSEMENTS',
          ),
          1 => 'assigned_user_name',
        ),
        7 => 
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
        8 => 
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
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'deductible',
            'comment' => '',
            'label' => 'LBL_DEDUCTIBLE',
          ),
          1 => 
          array (
            'name' => 'coverage_coinsurance',
            'comment' => '',
            'label' => 'LBL_COVERAGE_COINSURANCE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'property',
            'comment' => '',
            'label' => 'LBL_PROPERTY',
          ),
          1 => 
          array (
            'name' => 'covered_locations',
            'comment' => '',
            'label' => 'LBL_COVERED_LOCATIONS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'coverage_buildings',
            'comment' => '',
            'label' => 'LBL_COVERAGE_BUILDINGS',
          ),
          1 => 
          array (
            'name' => 'coverage_employee_dishonesty',
            'comment' => '',
            'label' => 'LBL_COVERAGE_EMPLOYEE_DISHONESTY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'coverage_exterior_signs',
            'comment' => '',
            'label' => 'LBL_COVERAGE_EXTERIOR_SIGNS',
          ),
          1 => 
          array (
            'name' => 'coverage_equipment',
            'comment' => '',
            'label' => 'LBL_COVERAGE_EQUIPMENT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'loss_of_income_rents',
            'comment' => '',
            'label' => 'LBL_LOSS_OF_INCOME_RENTS',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'coverage_personal_property_on_premises',
            'comment' => '',
            'label' => 'LBL_COVERAGE_PERSONAL_PROPERTY_ON_PREMISES',
          ),
          1 => 
          array (
            'name' => 'liability_bodily_injury',
            'comment' => '',
            'label' => 'LBL_LIABILITY_BODILY_INJURY',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'coverage_personal_property_off_premises',
            'comment' => '',
            'label' => 'LBL_COVERAGE_PERSONAL_PROPERTY_OFF_PREMISES',
          ),
          1 => 
          array (
            'name' => 'liability_completed_operations',
            'comment' => '',
            'label' => 'LBL_LIABILITY_COMPLETED_OPERATIONS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'coverage_personal_property_of_others',
            'comment' => '',
            'label' => 'LBL_COVERAGE_PERSONAL_PROPERTY_OF_OTHERS',
          ),
          1 => 
          array (
            'name' => 'liability_independent_contractors',
            'comment' => '',
            'label' => 'LBL_LIABILITY_INDEPENDENT_CONTRACTORS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'money_on_premises',
            'comment' => '',
            'label' => 'LBL_MONEY_ON_PREMISES',
          ),
          1 => 
          array (
            'name' => 'liability_fire_legal',
            'comment' => '',
            'label' => 'LBL_LIABILITY_FIRE_LEGAL',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'money_off_premises',
            'comment' => '',
            'label' => 'LBL_MONEY_OFF_PREMISES',
          ),
          1 => 
          array (
            'name' => 'medical_payments',
            'comment' => '',
            'label' => 'LBL_MEDICAL_PAYMENTS',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
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
      'lbl_editview_panel1' => 
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
