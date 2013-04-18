<?php
$module_name = 'av_Transaction_Schedule';
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => '',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'av_accounts_name',
            'label' => 'LBL_AV_ACCOUNTS_NAME',
          ),
          1 => 
          array (
            'name' => 'distribution_type',
            'comment' => '',
            'label' => 'LBL_DISTRIBUTION_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'transaction_type',
            'comment' => '',
            'label' => 'LBL_TRANSACTION_TYPE',
          ),
          1 => 
          array (
            'name' => 'transaction_frequency',
            'comment' => '',
            'label' => 'LBL_TRANSACTION_FREQUENCY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'comment' => '',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'next_transaction_date',
            'comment' => '',
            'label' => 'LBL_NEXT_TRANSACTION_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'related_account',
            'comment' => '',
            'label' => 'LBL_RELATED_ACCOUNT',
          ),
          1 => 
          array (
            'name' => 'related_account_number',
            'comment' => '',
            'label' => 'LBL_RELATED_ACCOUNT_NUMBER',
          ),
        ),
        5 => 
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
        6 => 
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
