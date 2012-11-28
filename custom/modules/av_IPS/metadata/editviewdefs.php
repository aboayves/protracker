<?php
$module_name = 'av_IPS';
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
      'syncDetailEditViews' => true,
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
          0 => 
          array (
            'name' => 'ips_date',
            'comment' => '',
            'label' => 'LBL_IPS_DATE',
          ),
          1 => 
          array (
            'name' => 'questionnaire_date',
            'comment' => '',
            'label' => 'LBL_QUESTIONNAIRE_DATE',
          ),
        ),
        2 => 
        array (
          0 => 'category_id',
          1 => 'subcategory_id',
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
          1 => 'status_id',
        ),
        4 => 
        array (
          0 => 'active_date',
          1 => 'exp_date',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
          1 => 
          array (
            'name' => 'accounts_av_ips_1_name',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'file_ext',
            'label' => 'LBL_FILE_EXTENSION',
          ),
          1 => 
          array (
            'name' => 'file_mime_type',
            'label' => 'LBL_MIME',
          ),
        ),
        7 => 
        array (
          0 => '',
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
    ),
  ),
);
?>
