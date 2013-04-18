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
          0 => 'description',
          1 => 'team_name',
        ),
        3 => 
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
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'net_worth_range',
            'comment' => '',
            'label' => 'LBL_NET_WORTH_RANGE',
          ),
          1 => 
          array (
            'name' => 'annual_income_range',
            'comment' => '',
            'label' => 'LBL_ANNUAL_INCOME_RANGE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'liquid_net_worth_range',
            'comment' => '',
            'label' => 'LBL_LIQUID_NET_WORTH_RANGE',
          ),
          1 => 
          array (
            'name' => 'source_of_assets',
            'comment' => '',
            'label' => 'LBL_SOURCE_OF_ASSETS',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'investment_objective',
            'comment' => '',
            'label' => 'LBL_INVESTMENT_OBJECTIVE',
          ),
          1 => 
          array (
            'name' => 'need_for_liquidity',
            'comment' => '',
            'label' => 'LBL_NEED_FOR_LIQUIDITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reason_for_investing',
            'comment' => '',
            'label' => 'LBL_REASON_FOR_INVESTING',
          ),
          1 => 
          array (
            'name' => 'time_horizon',
            'comment' => '',
            'label' => 'LBL_TIME_HORIZON',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'risk_tolerance',
            'comment' => '',
            'label' => 'LBL_RISK_TOLERANCE',
          ),
          1 => 
          array (
            'name' => 'tax_bracket_range',
            'comment' => '',
            'label' => 'LBL_TAX_BRACKET_RANGE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'client_communication_level',
            'comment' => '',
            'label' => 'LBL_CLIENT_COMMUNICATION_LEVEL',
          ),
          1 => 
          array (
            'name' => 'level_of_education',
            'comment' => '',
            'label' => 'LBL_LEVEL_OF_EDUCATION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'client_investment_input',
            'comment' => '',
            'label' => 'LBL_CLIENT_INVESTMENT_INPUT',
          ),
          1 => 
          array (
            'name' => 'level_of_health',
            'comment' => '',
            'label' => 'LBL_LEVEL_OF_HEALTH',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'client_acceptance_pattern',
            'comment' => '',
            'label' => 'LBL_CLIENT_ACCEPTANCE_PATTERN',
          ),
          1 => 
          array (
            'name' => 'client_adverse_commitment',
            'comment' => '',
            'label' => 'LBL_CLIENT_ADVERSE_COMMITMENT',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'investment_experience',
            'comment' => '',
            'label' => 'LBL_INVESTMENT_EXPERIENCE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'investment_experience_stocks',
            'comment' => '',
            'label' => 'LBL_INVESTMENT_EXPERIENCE_STOCKS',
          ),
          1 => 
          array (
            'name' => 'investment_experience_partnerships',
            'comment' => '',
            'label' => 'LBL_INVESTMENT_EXPERIENCE_PARTNERSHIPS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'investment_experience_bonds',
            'comment' => '',
            'label' => 'LBL_INVESTMENT_EXPERIENCE_BONDS',
          ),
          1 => 
          array (
            'name' => 'investment_experience_real_estate',
            'comment' => '',
            'label' => 'LBL_INVESTMENT_EXPERIENCE_REAL_ESTATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'investment_experience_mutual_funds',
            'comment' => '',
            'label' => 'LBL_INVESTMENT_EXPERIENCE_MUTUAL_FUNDS',
          ),
          1 => 
          array (
            'name' => 'investment_experience_variable_products',
            'comment' => '',
            'label' => 'LBL_INVESTMENT_EXPERIENCE_VARIABLE_PRODUCTS',
          ),
        ),
      ),
    ),
  ),
);
?>
