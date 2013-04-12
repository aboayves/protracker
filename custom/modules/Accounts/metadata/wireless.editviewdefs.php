<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '1',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
            'wireless_edit_only' => true,
          ),
        ),
      ),
      1 => 
      array (
        0 => 'assigned_user_name',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'client_salutation',
          'comment' => '',
          'label' => 'LBL_REPORT_SALUTATION',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'av_offices_name',
          'label' => 'LBL_AV_OFFICES_NAME',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'report_name',
          'comment' => '',
          'label' => 'LBL_REPORT_NAME',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'av_client_types_name',
          'label' => 'LBL_AV_CLIENT_TYPES_NAME',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'primary_contact_name',
          'label' => 'LBL_PRIMARY_CONTACT_NAME',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'secondary_contact_name',
          'label' => 'LBL_CO_CLIENT_CONTACT_NAME',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'status',
          'comment' => '',
          'label' => 'LBL_STATUS',
        ),
      ),
      9 => 
      array (
        0 => 
        array (
          'name' => 'priority',
          'comment' => '',
          'label' => 'LBL_PRIORITY',
        ),
      ),
      10 => 
      array (
        0 => 
        array (
          'name' => 'client_since_date',
          'comment' => '',
          'label' => 'LBL_CLIENT_SINCE_DATE',
        ),
      ),
      11 => 
      array (
        0 => 
        array (
          'name' => 'client_number',
          'comment' => '',
          'label' => 'LBL_CLIENT_NUMBER',
        ),
      ),
      12 => 
      array (
        0 => 
        array (
          'name' => 'relationship_type',
          'comment' => '',
          'label' => 'LBL_RELATIONSHIP_TYPE',
        ),
      ),
      13 => 
      array (
        0 => 
        array (
          'name' => 'phase',
          'comment' => '',
          'label' => 'LBL_PHASE',
        ),
      ),
      14 => 
      array (
        0 => 
        array (
          'name' => 'review_group',
          'comment' => '',
          'label' => 'LBL_REVIEW_GROUP',
        ),
      ),
      15 => 
      array (
        0 => 
        array (
          'name' => 'campaign_name',
          'comment' => 'The first campaign name for Account (Meta-data only)',
          'label' => 'LBL_CAMPAIGN',
        ),
      ),
      16 => 
      array (
        0 => 
        array (
          'name' => 'is_investment_client',
          'comment' => '',
          'studio' => 'visible',
          'label' => 'LBL_IS_INVESTMENT_CLIENT',
        ),
      ),
      17 => 
      array (
        0 => 
        array (
          'name' => 'tax_year_end_date',
          'comment' => '',
          'label' => 'LBL_TAX_YEAR_END_DATE',
        ),
      ),
      18 => 
      array (
        0 => 
        array (
          'name' => 'document_path',
          'comment' => '',
          'label' => 'LBL_DOCUMENT_PATH',
        ),
      ),
      19 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
      20 => 
      array (
        0 => 'team_name',
      ),
      21 => 
      array (
        0 => 
        array (
          'name' => 'preferred_communication',
          'comment' => '',
          'label' => 'LBL_PREFERRED_COMMUNICATION',
        ),
      ),
      22 => 
      array (
        0 => 
        array (
          'name' => 'preferred_document_submittal',
          'comment' => '',
          'label' => 'LBL_PREFERRED_DOCUMENT_SUBMITTAL',
        ),
      ),
      23 => 
      array (
        0 => 
        array (
          'name' => 'preferred_calling_time',
          'comment' => '',
          'label' => 'LBL_PREFERRED_CALLING_TIME',
        ),
      ),
      24 => 
      array (
        0 => 
        array (
          'name' => 'preferred_meeting_time',
          'comment' => '',
          'label' => 'LBL_PREFERRED_MEETING_TIME',
        ),
      ),
      25 => 
      array (
        0 => 
        array (
          'name' => 'phone_mobile',
          'comment' => '',
          'label' => 'LBL_PHONE_MOBILE',
        ),
      ),
      26 => 
      array (
        0 => 
        array (
          'name' => 'phone_work',
          'comment' => '',
          'label' => 'LBL_PHONE_WORK',
        ),
      ),
      27 => 
      array (
        0 => 
        array (
          'name' => 'phone_home',
          'comment' => '',
          'label' => 'LBL_PHONE_HOME',
        ),
      ),
      28 => 
      array (
        0 => 
        array (
          'name' => 'phone_fax',
          'comment' => 'The fax phone number of this company',
          'label' => 'LBL_FAX',
        ),
      ),
      29 => 
      array (
        0 => 'email1',
      ),
      30 => 
      array (
        0 => 
        array (
          'name' => 'website',
          'displayParams' => 
          array (
            'type' => 'link',
          ),
        ),
      ),
      31 => 
      array (
        0 => 
        array (
          'name' => 'shipping_address_street',
          'comment' => 'The street address used for for shipping purposes',
          'label' => 'LBL_SHIPPING_ADDRESS_STREET',
        ),
      ),
      32 => 
      array (
        0 => 'billing_address_street',
      ),
    ),
  ),
);
?>
