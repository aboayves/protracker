<?php
$module_name = 'av_Pensions';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
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
        2 => 
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
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          0 => 'description',
          1 => '',
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
    ),
  ),
);
?>
