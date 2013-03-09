<?php
$module_name = 'av_Business_Insurance';
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
          'name' => 'business_name',
          'comment' => '',
          'label' => 'LBL_BUSINESS_NAME',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'av_companies_name',
          'label' => 'LBL_AV_COMPANIES_NAME',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'type',
          'comment' => '',
          'label' => 'LBL_TYPE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'policy_number',
          'comment' => '',
          'label' => 'LBL_POLICY_NUMBER',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'status',
          'comment' => '',
          'label' => 'LBL_STATUS',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'issue_date',
          'comment' => '',
          'label' => 'LBL_ISSUE_DATE',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
  ),
);
?>
