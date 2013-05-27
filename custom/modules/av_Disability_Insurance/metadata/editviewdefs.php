<?php
$module_name = 'av_Disability_Insurance';
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
	  'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/include/js/inherit_parent_team.js',
        ),
      ),
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
			 'displayParams' => 
            array (
              'call_back_function' => 'call_back_account_team',
            ),
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'disability_type',
            'comment' => '',
            'label' => 'LBL_DISABILITY_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'guaranteed_renewable',
            'comment' => '',
            'label' => 'LBL_GUARANTEED_RENEWABLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'benefit_reductions',
            'comment' => '',
            'label' => 'LBL_BENEFIT_REDUCTIONS',
          ),
          1 => 
          array (
            'name' => 'benefits_taxable',
            'comment' => '',
            'label' => 'LBL_BENEFITS_TAXABLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'max_benefit_sickness_age',
            'comment' => '',
            'label' => 'LBL_MAX_BENEFIT_SICKNESS_AGE',
          ),
          1 => 
          array (
            'name' => 'elimination_period',
            'comment' => '',
            'label' => 'LBL_ELIMINATION_PERIOD',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'evidence_of_insurability',
            'comment' => '',
            'label' => 'LBL_EVIDENCE_OF_INSURABILITY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'cost_of_living',
            'comment' => '',
            'label' => 'LBL_COST_OF_LIVING',
          ),
          1 => 
          array (
            'name' => 'definition_of_disability',
            'comment' => '',
            'label' => 'LBL_DEFINITION_OF_DISABILITY',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'maximum_benefit',
            'comment' => '',
            'label' => 'LBL_MAXIMUM_BENEFIT',
          ),
          1 => 
          array (
            'name' => 'monthly_benefit',
            'comment' => '',
            'label' => 'LBL_MONTHLY_BENEFIT',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'percent_of_income',
            'comment' => '',
            'label' => 'LBL_PERCENT_OF_INCOME',
          ),
          1 => 
          array (
            'name' => 'max_age',
            'comment' => '',
            'label' => 'LBL_MAX_AGE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'non_cancel',
            'comment' => '',
            'label' => 'LBL_NON_CANCEL',
          ),
          1 => 
          array (
            'name' => 'policy_limitations',
            'comment' => '',
            'label' => 'LBL_POLICY_LIMITATIONS',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'premium_payor',
            'comment' => '',
            'label' => 'LBL_PREMIUM_PAYOR',
          ),
          1 => 
          array (
            'name' => 'renewal_provisions',
            'comment' => '',
            'label' => 'LBL_RENEWAL_PROVISIONS',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'residual_benefits',
            'comment' => '',
            'label' => 'LBL_RESIDUAL_BENEFITS',
          ),
          1 => 
          array (
            'name' => 'waiting_period',
            'comment' => '',
            'label' => 'LBL_WAITING_PERIOD',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'waiver_of_premium',
            'comment' => '',
            'label' => 'LBL_WAIVER_OF_PREMIUM',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
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
      'lbl_editview_panel3' => 
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
    ),
  ),
);
?>
