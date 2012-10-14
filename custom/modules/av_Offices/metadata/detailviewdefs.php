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
          1 => 'phone_office',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
          ),
          1 => 'phone_fax',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'email',
            'comment' => '',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'phone_alternate',
            'label' => 'LBL_OTHER_PHONE',
          ),
        ),
        3 => 
        array (
          0 => 'av_offices_type',
        ),
        4 => 
        array (
          0 => 'team_name',
          1 => '',
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'office_address_street',
            'comment' => '',
            'label' => 'LBL_OFFICE_ADDRESS_STREET',
          ),
          1 => 
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
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
          1 => 
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
      ),
      'lbl_email_addresses' => 
      array (
        0 => 
        array (
          0 => 'email1',
        ),
      ),
      'lbl_description_information' => 
      array (
        0 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
