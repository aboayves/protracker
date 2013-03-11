<?php
$module_name = 'av_Medicare';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '1',
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
      0 => 
      array (
        0 => 
        array (
          'name' => 'accounts_name',
          'label' => 'LBL_ACCOUNTS_NAME',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'contacts_name',
          'label' => 'LBL_CONTACTS_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'claim_number',
          'comment' => '',
          'label' => 'LBL_CLAIM_NUMBER',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'prescription_plan',
          'comment' => '',
          'label' => 'LBL_PRESCRIPTION_PLAN',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'part_a_effective_date',
          'comment' => '',
          'label' => 'LBL_PART_A_EFFECTIVE_DATE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'part_b_effective_date',
          'comment' => '',
          'label' => 'LBL_PART_B_EFFECTIVE_DATE',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'drug_coverage',
          'comment' => '',
          'label' => 'LBL_DRUG_COVERAGE',
        ),
      ),
    ),
  ),
);
?>
