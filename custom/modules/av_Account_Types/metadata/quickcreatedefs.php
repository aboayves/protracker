<?php
$module_name = 'av_Account_Types';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
      ),
    ),
  ),
);
?>
