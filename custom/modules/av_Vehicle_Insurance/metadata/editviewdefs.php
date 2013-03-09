<?php
$module_name = 'av_Vehicle_Insurance';
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
            'name' => 'property',
            'comment' => '',
            'label' => 'LBL_PROPERTY',
          ),
          1 => 
          array (
            'name' => 'vin',
            'comment' => '',
            'label' => 'LBL_VIN',
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
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bodily_injury_per_person',
            'comment' => '',
            'label' => 'LBL_BODILY_INJURY_PER_PERSON',
          ),
          1 => 
          array (
            'name' => 'bodily_injury_per_accident',
            'comment' => '',
            'label' => 'LBL_BODILY_INJURY_PER_ACCIDENT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'property_damage_per_person',
            'comment' => '',
            'label' => 'LBL_PROPERTY_DAMAGE_PER_PERSON',
          ),
          1 => 
          array (
            'name' => 'property_damage_per_accident',
            'comment' => '',
            'label' => 'LBL_PROPERTY_DAMAGE_PER_ACCIDENT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'combined_per_person',
            'comment' => '',
            'label' => 'LBL_COMBINED_PER_PERSON',
          ),
          1 => 
          array (
            'name' => 'combined_per_accident',
            'comment' => '',
            'label' => 'LBL_COMBINED_PER_ACCIDENT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'medical_payment_per_person',
            'comment' => '',
            'label' => 'LBL_MEDICAL_PAYMENT_PER_PERSON',
          ),
          1 => 
          array (
            'name' => 'medical_payment_per_accident',
            'comment' => '',
            'label' => 'LBL_MEDICAL_PAYMENT_PER_ACCIDENT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'um_per_person',
            'comment' => '',
            'label' => 'LBL_UM_PER_PERSON',
          ),
          1 => 
          array (
            'name' => 'um_per_accident',
            'comment' => '',
            'label' => 'LBL_UM_PER_ACCIDENT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'um_property_per_person',
            'comment' => '',
            'label' => 'LBL_UM_PROPERTY_PER_PERSON',
          ),
          1 => 
          array (
            'name' => 'um_property_per_accident',
            'comment' => '',
            'label' => 'LBL_UM_PROPERTY_PER_ACCIDENT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'rental_per_day',
            'comment' => '',
            'label' => 'LBL_RENTAL_PER_DAY',
          ),
          1 => 
          array (
            'name' => 'rental_per_accident',
            'comment' => '',
            'label' => 'LBL_RENTAL_PER_ACCIDENT',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'comprehensive_deductible',
            'comment' => '',
            'label' => 'LBL_COMPREHENSIVE_DEDUCTIBLE',
          ),
          1 => 
          array (
            'name' => 'collision_deductible',
            'comment' => '',
            'label' => 'LBL_COLLISION_DEDUCTIBLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'um_deductible',
            'comment' => '',
            'label' => 'LBL_UM_DEDUCTIBLE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'towing_and_labor',
            'comment' => '',
            'label' => 'LBL_TOWING_AND_LABOR',
          ),
          1 => 
          array (
            'name' => 'theft_additional_coverage',
            'comment' => '',
            'label' => 'LBL_THEFT_ADDITIONAL_COVERAGE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'road_service',
            'comment' => '',
            'label' => 'LBL_ROAD_SERVICE',
          ),
          1 => 
          array (
            'name' => 'lightning',
            'comment' => '',
            'label' => 'LBL_LIGHTNING',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fire',
            'comment' => '',
            'label' => 'LBL_FIRE',
          ),
          1 => 
          array (
            'name' => 'bail_bond',
            'comment' => '',
            'label' => 'LBL_BAIL_BOND',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tort_option',
            'comment' => '',
            'label' => 'LBL_TORT_OPTION',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_party_income_loss',
            'comment' => '',
            'label' => 'LBL_FIRST_PARTY_INCOME_LOSS',
          ),
          1 => 
          array (
            'name' => 'first_party_funeral_expenses',
            'comment' => '',
            'label' => 'LBL_FIRST_PARTY_FUNERAL_EXPENSES',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_party_accidental_death',
            'comment' => '',
            'label' => 'LBL_FIRST_PARTY_ACCIDENTAL_DEATH',
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
