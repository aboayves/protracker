<?php
$module_name = 'av_Account_Types';
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
        0 => 'name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'av_account_categories_name',
          'label' => 'LBL_AV_ACCOUNT_CATEGORIES_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'retirement_plan_type',
          'comment' => '',
          'label' => 'LBL_RETIREMENT_PLAN_TYPE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'schedule',
          'comment' => '',
          'label' => 'LBL_SCHEDULE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'is_beneficiary_required',
          'comment' => '',
          'label' => 'LBL_IS_BENEFICIARY_REQUIRED',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'report_sort',
          'comment' => '',
          'label' => 'LBL_REPORT_SORT',
        ),
      ),
      6 => 
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
