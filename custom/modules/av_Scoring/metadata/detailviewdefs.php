<?php
$module_name = 'av_Scoring';
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'team_name',
        ),
        2 => 
        array (
          0 => 'description',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'score_date',
            'comment' => '',
            'label' => 'LBL_SCORE_DATE',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'primary_client_profile',
            'comment' => '',
            'label' => 'LBL_PRIMARY_CLIENT_PROFILE',
          ),
          1 => 
          array (
            'name' => 'net_worth',
            'comment' => '',
            'label' => 'LBL_NET_WORTH',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'secondary_client_profile',
            'comment' => '',
            'label' => 'LBL_SECONDARY_CLIENT_PROFILE',
          ),
          1 => 
          array (
            'name' => 'net_worth_potential',
            'comment' => '',
            'label' => 'LBL_NET_WORTH_POTENTIAL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'ideal_client_match',
            'comment' => '',
            'label' => 'LBL_IDEAL_CLIENT_MATCH',
          ),
          1 => 
          array (
            'name' => 'future_aum_potential',
            'comment' => '',
            'label' => 'LBL_FUTURE_AUM_POTENTIAL',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'influence_potential',
            'comment' => '',
            'label' => 'LBL_INFLUENCE_POTENTIAL',
          ),
          1 => 
          array (
            'name' => 'profitability',
            'comment' => '',
            'label' => 'LBL_PROFITABILITY',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'satisfaction_level',
            'comment' => '',
            'label' => 'LBL_SATISFACTION_LEVEL',
          ),
          1 => 
          array (
            'name' => 'profitability_potential',
            'comment' => '',
            'label' => 'LBL_PROFITABILITY_POTENTIAL',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'hassle_factor',
            'comment' => '',
            'label' => 'LBL_HASSLE_FACTOR',
          ),
          1 => 
          array (
            'name' => 'portfolio_value',
            'comment' => '',
            'label' => 'LBL_PORTFOLIO_VALUE',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'time_with_firm',
            'comment' => '',
            'label' => 'LBL_TIME_WITH_FIRM',
          ),
          1 => 
          array (
            'name' => 'outside_investments',
            'comment' => '',
            'label' => 'LBL_OUTSIDE_INVESTMENTS',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'source_of_client',
            'comment' => '',
            'label' => 'LBL_SOURCE_OF_CLIENT',
          ),
          1 => 
          array (
            'name' => 'percent_of_aum',
            'comment' => '',
            'label' => 'LBL_PERCENT_OF_AUM',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'time_spent',
            'comment' => '',
            'label' => 'LBL_TIME_SPENT',
          ),
          1 => 
          array (
            'name' => 'referral_history',
            'comment' => '',
            'label' => 'LBL_REFERRAL_HISTORY',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'client_age',
            'comment' => '',
            'label' => 'LBL_CLIENT_AGE',
          ),
          1 => 
          array (
            'name' => 'referral_potential',
            'comment' => '',
            'label' => 'LBL_REFERRAL_POTENTIAL',
          ),
        ),
      ),
    ),
  ),
);
?>
