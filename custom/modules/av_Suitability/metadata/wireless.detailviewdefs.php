<?php
$module_name = 'av_Suitability';
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
        ),
      ),
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
          'name' => 'suitability_date',
          'comment' => '',
          'label' => 'LBL_SUITABILITY_DATE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'accounts_name',
          'label' => 'LBL_ACCOUNTS_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'contacts_name',
          'label' => 'LBL_CONTACTS_NAME',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'investment_objective',
          'comment' => '',
          'label' => 'LBL_INVESTMENT_OBJECTIVE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'investment_experience',
          'comment' => '',
          'label' => 'LBL_INVESTMENT_EXPERIENCE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'risk_tolerance',
          'comment' => '',
          'label' => 'LBL_RISK_TOLERANCE',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'time_horizon',
          'comment' => '',
          'label' => 'LBL_TIME_HORIZON',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'source_of_assets',
          'comment' => '',
          'label' => 'LBL_SOURCE_OF_ASSETS',
        ),
      ),
    ),
  ),
);
?>
