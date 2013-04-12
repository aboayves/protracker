<?php
$module_name = 'av_Companies';
$_object_name = 'av_companies';
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
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
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
          1 => 'team_name',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
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
          0 => 
          array (
            'name' => 'phone_alternate',
            'label' => 'LBL_OTHER_PHONE',
          ),
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
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_street',
            'label' => 'LBL_SHIPPING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
            ),
          ),
          1 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
