<?php
$module_name = 'av_Offices';
$_object_name = 'av_offices';
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
          1 => 'description',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'office_name',
            'comment' => '',
            'label' => 'LBL_OFFICE_NAME',
          ),
          1 => 'industry',
        ),
        2 => 
        array (
          0 => 'av_offices_type',
          1 => 'employees',
        ),
        3 => 
        array (
          0 => 'ownership',
          1 => 'rating',
        ),
        4 => 
        array (
          0 => 'ticker_symbol',
          1 => 'team_name',
        ),
        5 => 
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
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 'phone_office',
          1 => 
          array (
            'name' => 'phone_alternate',
            'label' => 'LBL_OTHER_PHONE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'email',
            'comment' => '',
            'label' => 'LBL_EMAIL',
          ),
          1 => 'phone_fax',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'office_address_street',
            'comment' => '',
            'label' => 'LBL_OFFICE_ADDRESS_STREET',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'office_address_city',
            'comment' => '',
            'label' => 'LBL_OFFICE_ADDRESS_CITY',
          ),
          1 => 
          array (
            'name' => 'office_address_state',
            'comment' => '',
            'label' => 'LBL_OFFICE_ADDRESS_STATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'office_address_postalcode',
            'comment' => '',
            'label' => 'LBL_OFFICE_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'office_address_country',
            'comment' => '',
            'label' => 'LBL_OFFICE_ADDRESS_COUNTRY',
          ),
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'mailing_address_street',
            'comment' => '',
            'label' => 'LBL_MAILING_ADDRESS_STREET',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mailing_address_city',
            'comment' => '',
            'label' => 'LBL_MAILING_ADDRESS_CITY',
          ),
          1 => 
          array (
            'name' => 'mailing_address_state',
            'comment' => '',
            'label' => 'LBL_MAILING_ADDRESS_STATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mailing_address_postalcode',
            'comment' => '',
            'label' => 'LBL_MAILING_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'mailing_address_country',
            'comment' => '',
            'label' => 'LBL_MAILING_ADDRESS_COUNTRY',
          ),
        ),
      ),
      'lbl_description_information' => 
      array (
        0 => 
        array (
          0 => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_city',
            'comment' => 'The city used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_CITY',
          ),
          1 => 
          array (
            'name' => 'billing_address_state',
            'comment' => 'The state used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_STATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_postalcode',
            'comment' => 'The postal code used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'billing_address_country',
            'comment' => 'The country used for the billing address',
            'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
          ),
        ),
      ),
      'lbl_email_addresses' => 
      array (
        0 => 
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_city',
            'comment' => 'The city used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_CITY',
          ),
          1 => 
          array (
            'name' => 'shipping_address_state',
            'comment' => 'The state used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_STATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_postalcode',
            'comment' => 'The zip code used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'shipping_address_country',
            'comment' => 'The country used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'email1',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
