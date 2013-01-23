<?php
$viewdefs ['Accounts'] = 
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
      'useTabs' => true,
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
            'name' => 'preferred_comm',
            'studio' => 'visible',
            'label' => 'LBL_PREFERRED_COMM',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'av_client_types_name',
          ),
          1 => 
          array (
            'name' => 'priority',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
          ),
          1 => 
          array (
            'name' => 'email1',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'comment' => 'The street address used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'comment' => 'The street address used for for shipping purposes',
            'label' => 'LBL_SHIPPING_ADDRESS_STREET',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'net_worth',
            'label' => 'LBL_NET_WORTH',
          ),
          1 => 
          array (
            'name' => 'client_id',
            'label' => 'LBL_CLIENT_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'client_since',
            'label' => 'LBL_CLIENT_SINCE',
          ),
          1 => 
          array (
            'name' => 'accounting_id',
            'label' => 'LBL_ACCOUNTING_ID',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'married',
            'label' => 'LBL_MARRIED',
          ),
          1 => 
          array (
            'name' => 'last_rebal',
            'label' => 'LBL_LAST_REBAL',
          ),
        ),
      ),
    ),
  ),
);
?>
