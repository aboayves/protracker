<?php
$module_name = 'av_Companies';
$_object_name = 'av_companies';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'short_name',
            'comment' => '',
            'label' => 'LBL_SHORT_NAME',
          ),
        ),
        1 => 
        array (
          0 => 'website',
          1 => 'email1',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
          ),
          1 => 
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email',
            'comment' => '',
            'label' => 'LBL_EMAIL',
          ),
          1 => 'phone_fax',
        ),
        4 => 
        array (
          0 => 'annual_revenue',
          1 => 
          array (
            'name' => 'rating',
            'comment' => 'An arbitrary rating for this company for use in comparisons with others',
            'label' => 'LBL_RATING',
          ),
        ),
        5 => 
        array (
          0 => 'industry',
          1 => 'av_companies_type',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'av_accounts_av_companies_1_name',
            'label' => 'LBL_AV_ACCOUNTS_AV_COMPANIES_1_FROM_AV_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
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
