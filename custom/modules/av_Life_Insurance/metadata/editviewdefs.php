<?php
$module_name = 'av_Life_Insurance';
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
      'lbl_editview_panel2' => 
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
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'death_benefit',
            'comment' => '',
            'label' => 'LBL_DEATH_BENEFIT',
          ),
          1 => 
          array (
            'name' => 'term',
            'comment' => '',
            'label' => 'LBL_TERM',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'face_value',
            'comment' => '',
            'label' => 'LBL_FACE_VALUE',
          ),
          1 => 
          array (
            'name' => 'maturity_date',
            'comment' => '',
            'label' => 'LBL_MATURITY_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cash_value',
            'comment' => '',
            'label' => 'LBL_CASH_VALUE',
          ),
          1 => 
          array (
            'name' => 'cash_value_interest_rate',
            'comment' => '',
            'label' => 'LBL_CASH_VALUE_INTEREST_RATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'incontestability_period',
            'comment' => '',
            'label' => 'LBL_INCONTESTABILITY_PERIOD',
          ),
          1 => 
          array (
            'name' => 'last_ledger_date',
            'comment' => '',
            'label' => 'LBL_LAST_LEDGER_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'waiver_of_premium_rider',
            'comment' => '',
            'label' => 'LBL_WAIVER_OF_PREMIUM_RIDER',
          ),
          1 => 
          array (
            'name' => 'provisions',
            'comment' => '',
            'label' => 'LBL_PROVISIONS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'accelerated_benefit_rider',
            'comment' => '',
            'label' => 'LBL_ACCELERATED_BENEFIT_RIDER',
          ),
          1 => 
          array (
            'name' => 'add_rider',
            'comment' => '',
            'label' => 'LBL_ADD_RIDER',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'surrender_value',
            'comment' => '',
            'label' => 'LBL_SURRENDER_VALUE',
          ),
          1 => 
          array (
            'name' => 'surender_value_prior_year',
            'comment' => '',
            'label' => 'LBL_SURENDER_VALUE_PRIOR_YEAR',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'loan_balance',
            'comment' => '',
            'label' => 'LBL_LOAN_BALANCE',
          ),
          1 => 
          array (
            'name' => 'loan_interest_rate',
            'comment' => '',
            'label' => 'LBL_LOAN_INTEREST_RATE',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'dividends',
            'comment' => '',
            'label' => 'LBL_DIVIDENDS',
          ),
          1 => 
          array (
            'name' => 'dividends_prior_year',
            'comment' => '',
            'label' => 'LBL_DIVIDENDS_PRIOR_YEAR',
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
