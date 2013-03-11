<?php
$module_name = 'av_Social_Security';
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
          1 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'year_of_estimate',
            'comment' => '',
            'label' => 'LBL_YEAR_OF_ESTIMATE',
          ),
          1 => '',
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
          0 => '',
          1 => 'assigned_user_name',
        ),
        8 => 
        array (
          0 => 'description',
          1 => 'team_name',
        ),
        9 => 
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
    ),
  ),
);
?>
