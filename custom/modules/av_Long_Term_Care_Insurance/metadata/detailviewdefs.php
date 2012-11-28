<?php
$module_name = 'av_Long_Term_Care_Insurance';
$_object_name = 'av_long_term_care_insurance';
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
            'name' => 'issue_date',
            'comment' => '',
            'label' => 'LBL_ISSUE_DATE',
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
            'name' => 'start_date',
            'comment' => '',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'status_id',
            'label' => 'LBL_DOC_STATUS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'accounts_av_long_term_care_insurance_1_name',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'issue_age',
            'comment' => '',
            'label' => 'LBL_ISSUE_AGE',
          ),
          1 => 'team_name',
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
          0 => '',
          1 => 
          array (
            'name' => 'end_date',
            'comment' => '',
            'label' => 'LBL_END_DATE',
          ),
        ),
        2 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'policy_maximum_benefit',
            'comment' => '',
            'label' => 'LBL_POLICY_MAXIMUM_BENEFIT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'accumulation_period',
            'comment' => '',
            'label' => 'LBL_ACCUMULATION_PERIOD',
          ),
          1 => 
          array (
            'name' => 'admittance_levels_of_care',
            'comment' => '',
            'label' => 'LBL_ADMITTANCE_LEVELS_OF_CARE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'adult_daycare_indemnity',
            'comment' => '',
            'label' => 'LBL_ADULT_DAYCARE_INDEMNITY',
          ),
          1 => 
          array (
            'name' => 'adult_daycare_benefit',
            'comment' => '',
            'label' => 'LBL_ADULT_DAYCARE_BENEFIT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'adult_daycare_max',
            'comment' => '',
            'label' => 'LBL_ADULT_DAYCARE_MAX',
          ),
          1 => 
          array (
            'name' => 'assisted_living_facility_benefit',
            'comment' => '',
            'label' => 'LBL_ASSISTED_LIVING_FACILITY_BENEFIT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'assisted_living_facility_indemnity',
            'comment' => '',
            'label' => 'LBL_ASSISTED_LIVING_FACILITY_INDEMNITY',
          ),
          1 => 
          array (
            'name' => 'assisted_living_max',
            'comment' => '',
            'label' => 'LBL_ASSISTED_LIVING_MAX',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'benefit_period',
            'comment' => '',
            'label' => 'LBL_BENEFIT_PERIOD',
          ),
          1 => 
          array (
            'name' => 'elimination_period',
            'comment' => '',
            'label' => 'LBL_ELIMINATION_PERIOD',
          ),
        ),
        8 => 
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
        9 => 
        array (
          0 => 
          array (
            'name' => 'home_health_care_benefit',
            'comment' => '',
            'label' => 'LBL_HOME_HEALTH_CARE_BENEFIT',
          ),
          1 => 
          array (
            'name' => 'home_health_care_indemnity',
            'comment' => '',
            'label' => 'LBL_HOME_HEALTH_CARE_INDEMNITY',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'home_health_care_max',
            'comment' => '',
            'label' => 'LBL_HOME_HEALTH_CARE_MAX',
          ),
          1 => 
          array (
            'name' => 'inflation_increase_levels',
            'comment' => '',
            'label' => 'LBL_INFLATION_INCREASE_LEVELS',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'inflation_protection',
            'comment' => '',
            'label' => 'LBL_INFLATION_PROTECTION',
          ),
          1 => 
          array (
            'name' => 'inflation_rate_and_method',
            'comment' => '',
            'label' => 'LBL_INFLATION_RATE_AND_METHOD',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'mental_illness',
            'comment' => '',
            'label' => 'LBL_MENTAL_ILLNESS',
          ),
          1 => 
          array (
            'name' => 'file_mime_type',
            'label' => 'LBL_MIME',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'nursing_home_care_benefit',
            'comment' => '',
            'label' => 'LBL_NURSING_HOME_CARE_BENEFIT',
          ),
          1 => 
          array (
            'name' => 'nursing_home_indemnity',
            'comment' => '',
            'label' => 'LBL_NURSING_HOME_INDEMNITY',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'nursing_home_max',
            'comment' => '',
            'label' => 'LBL_NURSING_HOME_MAX',
          ),
          1 => 
          array (
            'name' => 'preexisting_conditions',
            'comment' => '',
            'label' => 'LBL_PREEXISTING_CONDITIONS',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'premium_increase_points',
            'comment' => '',
            'label' => 'LBL_PREMIUM_INCREASE_POINTS',
          ),
          1 => 
          array (
            'name' => 'prior_hospitalization',
            'comment' => '',
            'label' => 'LBL_PRIOR_HOSPITALIZATION',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'product_upgrade',
            'comment' => '',
            'label' => 'LBL_PRODUCT_UPGRADE',
          ),
          1 => 
          array (
            'name' => 'renewal_provisions',
            'comment' => '',
            'label' => 'LBL_RENEWAL_PROVISIONS',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'other_provisions',
            'comment' => '',
            'label' => 'LBL_OTHER_PROVISIONS',
          ),
          1 => 
          array (
            'name' => 'waiver_of_premium',
            'comment' => '',
            'label' => 'LBL_WAIVER_OF_PREMIUM',
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
        2 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
