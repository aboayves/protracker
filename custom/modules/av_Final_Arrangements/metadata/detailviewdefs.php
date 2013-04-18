<?php
$module_name = 'av_Final_Arrangements';
$_object_name = 'av_final_arrangements';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
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
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accounts_name',
            'label' => 'LBL_ACCOUNTS_NAME',
          ),
          1 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
          1 => 
          array (
            'name' => 'memo_location',
            'comment' => '',
            'label' => 'LBL_MEMO_LOCATION',
          ),
        ),
        2 => 
        array (
          0 => 'active_date',
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'link' => 'uploadfile',
              'id' => 'id',
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'funeral_home',
            'comment' => '',
            'label' => 'LBL_FUNERAL_HOME',
          ),
          1 => 
          array (
            'name' => 'on_file',
            'comment' => '',
            'label' => 'LBL_ON_FILE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'funeral_description',
            'comment' => '',
            'label' => 'LBL_FUNERAL_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'burial_instructions',
            'comment' => '',
            'label' => 'LBL_BURIAL_INSTRUCTIONS',
          ),
          1 => 
          array (
            'name' => 'body_disposition',
            'comment' => '',
            'label' => 'LBL_BODY_DISPOSITION',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'annuity_company',
            'comment' => '',
            'label' => 'LBL_ANNUITY_COMPANY',
          ),
          1 => 
          array (
            'name' => 'annuity_amount',
            'comment' => '',
            'label' => 'LBL_ANNUITY_AMOUNT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'annuity_date',
            'comment' => '',
            'label' => 'LBL_ANNUITY_DATE',
          ),
          1 => 
          array (
            'name' => 'annuity_interest_rate',
            'comment' => '',
            'label' => 'LBL_ANNUITY_INTEREST_RATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'source_of_payments',
            'comment' => '',
            'label' => 'LBL_SOURCE_OF_PAYMENTS',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
          1 => 'team_name',
        ),
        2 => 
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
