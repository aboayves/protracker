<?php
$module_name = 'av_Account_Types';
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
            'name' => 'schedule',
            'comment' => '',
            'label' => 'LBL_SCHEDULE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'retirement_plan_type',
            'comment' => '',
            'label' => 'LBL_RETIREMENT_PLAN_TYPE',
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
          0 => 'description',
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
