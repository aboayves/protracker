<?php
$module_name = 'av_Suitability';
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
          0 => 
          array (
            'name' => 'accounts_name',
            'label' => 'LBL_ACCOUNTS_NAME',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
          1 => 
          array (
            'name' => 'suitability_date',
            'comment' => '',
            'label' => 'LBL_SUITABILITY_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'investment_objective',
            'comment' => '',
            'label' => 'LBL_INVESTMENT_OBJECTIVE',
          ),
          1 => 
          array (
            'name' => 'investment_experience',
            'comment' => '',
            'label' => 'LBL_INVESTMENT_EXPERIENCE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'risk_tolerance',
            'comment' => '',
            'label' => 'LBL_RISK_TOLERANCE',
          ),
          1 => 
          array (
            'name' => 'net_worth_range',
            'comment' => '',
            'label' => 'LBL_NET_WORTH_RANGE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'time_horizon',
            'comment' => '',
            'label' => 'LBL_TIME_HORIZON',
          ),
          1 => 
          array (
            'name' => 'source_of_assets',
            'comment' => '',
            'label' => 'LBL_SOURCE_OF_ASSETS',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
