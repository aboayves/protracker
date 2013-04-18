<?php
$module_name = 'av_Umbrella_Insurance';
$_object_name = 'av_umbrella_insurance';
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
          0 => '',
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
        3 => 
        array (
          0 => 'status',
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
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
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
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'policy_limit',
            'comment' => '',
            'label' => 'LBL_POLICY_LIMIT',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'deductible',
            'comment' => '',
            'label' => 'LBL_DEDUCTIBLE',
          ),
          1 => 
          array (
            'name' => 'home_personal_liability',
            'comment' => '',
            'label' => 'LBL_HOME_PERSONAL_LIABILITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'home_comprehensive',
            'comment' => '',
            'label' => 'LBL_HOME_COMPREHENSIVE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'auto_property_damage',
            'comment' => '',
            'label' => 'LBL_AUTO_PROPERTY_DAMAGE',
          ),
          1 => 
          array (
            'name' => 'auto_um',
            'comment' => '',
            'label' => 'LBL_AUTO_UM',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'auto_bodily_injury',
            'comment' => '',
            'label' => 'LBL_AUTO_BODILY_INJURY',
          ),
          1 => 
          array (
            'name' => 'auto_bodily_injury_per_accident',
            'comment' => '',
            'label' => 'LBL_AUTO_BODILY_INJURY_PER_ACCIDENT',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
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
