<?php
$module_name = 'av_Identification';
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
            'name' => 'type',
            'comment' => '',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'issued_by',
            'comment' => '',
            'label' => 'LBL_ISSUED_BY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'id_number',
            'comment' => '',
            'label' => 'LBL_ID_NUMBER',
          ),
          1 => 
          array (
            'name' => 'date_issued',
            'comment' => '',
            'label' => 'LBL_DATE_ISSUED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'is_on_file',
            'comment' => '',
            'label' => 'LBL_IS_ON_FILE',
          ),
          1 => 
          array (
            'name' => 'date_expires',
            'comment' => '',
            'label' => 'LBL_DATE_EXPIRES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 'active_date',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'accounts_av_identification_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
