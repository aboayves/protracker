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
            'name' => 'assigned_user_name',
          ),
        ),
        1 => 
        array (
          0 => 'client_salutation',
          1 => 
          array (
            'name' => 'av_offices_name',
            'label' => 'LBL_AV_OFFICES_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'report_name',
            'comment' => '',
            'label' => 'LBL_REPORT_NAME',
          ),
          1 => 
          array (
            'name' => 'av_client_types_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'primary_contact_name',
            'label' => 'LBL_PRIMARY_CONTACT_NAME',
          ),
          1 => 
          array (
            'name' => 'status',
            'comment' => '',
            'label' => 'LBL_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'secondary_contact_name',
            'label' => 'LBL_CO_CLIENT_CONTACT_NAME',
          ),
          1 => 
          array (
            'name' => 'priority',
            'comment' => '',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'client_since',
            'label' => 'LBL_CLIENT_SINCE',
          ),
          1 => 
          array (
            'name' => 'client_number',
            'comment' => '',
            'label' => 'LBL_CLIENT_NUMBER',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'relationship_type',
            'comment' => '',
            'label' => 'LBL_RELATIONSHIP_TYPE',
          ),
          1 => 
          array (
            'name' => 'phase',
            'comment' => '',
            'label' => 'LBL_PHASE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'review_group',
            'comment' => '',
            'label' => 'LBL_REVIEW_GROUP',
          ),
          1 => 
          array (
            'name' => 'campaign_name',
            'comment' => 'The first campaign name for Account (Meta-data only)',
            'label' => 'LBL_CAMPAIGN',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'is_investment_client',
            'comment' => '',
            'studio' => 'visible',
            'label' => 'LBL_IS_INVESTMENT_CLIENT',
          ),
          1 => 
          array (
            'name' => 'tax_year_end_date',
            'comment' => '',
            'label' => 'LBL_TAX_YEAR_END_DATE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'document_path',
            'comment' => '',
            'label' => 'LBL_DOCUMENT_PATH',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'preferred_communication',
            'comment' => '',
            'label' => 'LBL_PREFERRED_COMMUNICATION',
          ),
          1 => 
          array (
            'name' => 'preferred_document_submittal',
            'comment' => '',
            'label' => 'LBL_PREFERRED_DOCUMENT_SUBMITTAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'preferred_calling_time',
            'comment' => '',
            'label' => 'LBL_PREFERRED_CALLING_TIME',
          ),
          1 => 
          array (
            'name' => 'preferred_meeting_time',
            'comment' => '',
            'label' => 'LBL_PREFERRED_MEETING_TIME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'comment' => '',
            'label' => 'LBL_PHONE_MOBILE',
          ),
          1 => 
          array (
            'name' => 'phone_work',
            'comment' => '',
            'label' => 'LBL_PHONE_WORK',
          ),
        ),
        3 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'phone_fax',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'email1',
          ),
          1 => 
          array (
            'name' => 'website',
          ),
        ),
        5 => 
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
