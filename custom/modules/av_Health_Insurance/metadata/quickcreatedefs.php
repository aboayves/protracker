<?php
$module_name = 'av_Health_Insurance';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'document_name',
          1 => 
          array (
            'name' => 'accounts_av_health_insurance_1_name',
            'label' => 'LBL_ACCOUNTS_AV_HEALTH_INSURANCE_1_FROM_ACCOUNTS_TITLE',
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'issue_date',
            'comment' => '',
            'label' => 'LBL_ISSUE_DATE',
          ),
          1 => 
          array (
            'name' => 'status',
            'comment' => '',
            'label' => 'LBL_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'displayParams' => 
            array (
              'rows' => 10,
              'cols' => 120,
            ),
          ),
          1 => 'assigned_user_name',
        ),
        5 => 
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
        6 => 
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
        7 => 
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
        8 => 
        array (
          0 => 'active_date',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        9 => 
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
    ),
  ),
);
?>
