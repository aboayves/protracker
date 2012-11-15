<?php
$module_name = 'av_Medicare';
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'accounts_av_medicare_1_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'claim_number',
            'comment' => '',
            'label' => 'LBL_CLAIM_NUMBER',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'part_a_effective_date',
            'comment' => '',
            'label' => 'LBL_PART_A_EFFECTIVE_DATE',
          ),
          1 => 
          array (
            'name' => 'drug_coverage',
            'comment' => '',
            'label' => 'LBL_DRUG_COVERAGE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'part_b_effective_date',
            'comment' => '',
            'label' => 'LBL_PART_B_EFFECTIVE_DATE',
          ),
          1 => 
          array (
            'name' => 'prescription_plan',
            'comment' => '',
            'label' => 'LBL_PRESCRIPTION_PLAN',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'monthly_premium',
            'comment' => '',
            'label' => 'LBL_MONTHLY_PREMIUM',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
        6 => 
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
