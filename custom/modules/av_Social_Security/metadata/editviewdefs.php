<?php
$module_name = 'av_Social_Security';
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
	  'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/include/js/inherit_parent_team.js',
        ),
      ),
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
			'displayParams' => 
            array (
              'call_back_function' => 'call_back_account_team',
            ),
			
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
            'name' => 'year_of_estimate',
            'comment' => '',
            'label' => 'LBL_YEAR_OF_ESTIMATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'retirement_at_age_62',
            'comment' => '',
            'label' => 'LBL_RETIREMENT_AT_AGE_62',
          ),
          1 => 
          array (
            'name' => 'disability',
            'comment' => '',
            'label' => 'LBL_DISABILITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'retirement_at_age_67',
            'comment' => '',
            'label' => 'LBL_RETIREMENT_AT_AGE_67',
          ),
          1 => 
          array (
            'name' => 'child',
            'comment' => '',
            'label' => 'LBL_CHILD',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'retirement_at_age_70',
            'comment' => '',
            'label' => 'LBL_RETIREMENT_AT_AGE_70',
          ),
          1 => 
          array (
            'name' => 'spouse',
            'comment' => '',
            'label' => 'LBL_SPOUSE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'retired_spouse',
            'comment' => '',
            'label' => 'LBL_RETIRED_SPOUSE',
          ),
          1 => 
          array (
            'name' => 'taxed_social_security_earnings',
            'comment' => '',
            'label' => 'LBL_TAXED_SOCIAL_SECURITY_EARNINGS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'family',
            'comment' => '',
            'label' => 'LBL_FAMILY',
          ),
          1 => 
          array (
            'name' => 'taxed_medicare_earnings',
            'comment' => '',
            'label' => 'LBL_TAXED_MEDICARE_EARNINGS',
          ),
        ),
        7 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        8 => 
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
