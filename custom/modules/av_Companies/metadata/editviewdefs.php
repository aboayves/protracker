<?php
$module_name = 'av_Companies';
$_object_name = 'av_companies';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'short_name',
            'comment' => '',
            'label' => 'LBL_SHORT_NAME',
          ),
          1 => 'ticker_symbol',
        ),
        2 => 
        array (
          0 => 'industry',
          1 => 'ownership',
        ),
        3 => 
        array (
          0 => 'employees',
          1 => 'annual_revenue',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'master_account',
            'comment' => '',
            'label' => 'LBL_MASTER_ACCOUNT',
          ),
          1 => 
          array (
            'name' => 'routing_number',
            'comment' => '',
            'label' => 'LBL_ROUTING_NUMBER',
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
      'lbl_email_addresses' => 
      array (
        0 => 
        array (
          0 => 'phone_office',
          1 => 'phone_fax',
        ),
        1 => 
        array (
          0 => 'phone_alternate',
          1 => 
          array (
            'name' => 'email',
            'comment' => '',
            'label' => 'LBL_EMAIL',
          ),
        ),
        2 => 
        array (
          0 => 'email1',
          1 => 'website',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
