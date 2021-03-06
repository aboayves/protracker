<?php
$module_name = 'av_Pensions';
$viewdefs [$module_name] = 
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
          0 => 'name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'single_monthly_benefit',
            'comment' => '',
            'label' => 'LBL_SINGLE_MONTHLY_BENEFIT',
          ),
          1 => 
          array (
            'name' => 'single_annual_benefit',
            'comment' => '',
            'label' => 'LBL_SINGLE_ANNUAL_BENEFIT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'joint_monthly_benefit',
            'comment' => '',
            'label' => 'LBL_JOINT_MONTHLY_BENEFIT',
          ),
          1 => 
          array (
            'name' => 'joint_annual_benefit',
            'comment' => '',
            'label' => 'LBL_JOINT_ANNUAL_BENEFIT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'benefit_start_date',
            'comment' => '',
            'label' => 'LBL_BENEFIT_START_DATE',
          ),
          1 => 
          array (
            'name' => 'annual_increase',
            'comment' => '',
            'label' => 'LBL_ANNUAL_INCREASE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'statement_date',
            'comment' => '',
            'label' => 'LBL_STATEMENT_DATE',
          ),
          1 => 
          array (
            'name' => 'period_certainty',
            'comment' => '',
            'label' => 'LBL_PERIOD_CERTAINTY',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'other_benefits',
            'comment' => '',
            'label' => 'LBL_OTHER_BENEFITS',
          ),
          1 => 
          array (
            'name' => 'survivor_benefits',
            'comment' => '',
            'label' => 'LBL_SURVIVOR_BENEFITS',
          ),
        ),
        7 => 
        array (
          0 => '',
          1 => 'assigned_user_name',
        ),
        8 => 
        array (
          0 => 'description',
          1 => 'team_name',
        ),
        9 => 
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
    ),
  ),
);
?>
