<?php
$module_name = 'av_Final_Arrangements';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'document_name',
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
        ),
        1 => 
        array (
          0 => 'category_id',
          1 => 'subcategory_id',
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
        ),
        3 => 
        array (
          0 => 'active_date',
          1 => 'exp_date',
        ),
        4 => 
        array (
          0 => 'status_id',
          1 => 
          array (
            'name' => 'file_ext',
            'label' => 'LBL_FILE_EXTENSION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
          1 => 
          array (
            'name' => 'contacts_av_final_arrangements_1_name',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'file_mime_type',
            'label' => 'LBL_MIME',
          ),
          1 => 
          array (
            'name' => 'memo_location',
            'comment' => '',
            'label' => 'LBL_MEMO_LOCATION',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'accounts_av_final_arrangements_1_name',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        8 => 
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'funeral_description',
            'comment' => '',
            'label' => 'LBL_FUNERAL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'funeral_home',
            'comment' => '',
            'label' => 'LBL_FUNERAL_HOME',
          ),
        ),
        1 => 
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
          1 => 
          array (
            'name' => 'on_file',
            'comment' => '',
            'label' => 'LBL_ON_FILE',
          ),
        ),
      ),
    ),
  ),
);
?>
