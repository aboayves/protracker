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
          0 => 'industry',
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
          ),
          1 => 'phone_fax',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'email',
            'comment' => '',
            'label' => 'LBL_EMAIL',
          ),
          1 => 'website',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_street',
            'comment' => 'The street address used for for shipping purposes',
            'label' => 'LBL_SHIPPING_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'billing_address_street',
            'comment' => 'The street address used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_STREET',
          ),
        ),
      ),
    ),
  ),
);
?>
