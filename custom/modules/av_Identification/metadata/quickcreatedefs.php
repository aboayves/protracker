<?php
$module_name = 'av_Identification';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
            'customCode' => '{if $fields.id.value!=""}
            				{assign var="type" value="hidden"}
            		 		{else}
            		 		{assign var="type" value="file"}
            		  		{/if}
            		  		<input name="uploadfile" type = {$type} size="30" maxlength="" onchange="setvalue(this);" value="{$fields.filename.value}">{$fields.filename.value}',
            'displayParams' => 
            array (
              'required' => true,
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
            'displayParams' => 
            array (
              'rows' => 10,
              'cols' => 120,
            ),
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'status_id',
            'label' => 'LBL_DOC_STATUS',
          ),
          1 => 'active_date',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'accounts_av_identification_1_name',
            'label' => 'LBL_ACCOUNTS_AV_IDENTIFICATION_1_FROM_ACCOUNTS_TITLE',
          ),
          1 => 'category_id',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'exp_date',
            'label' => 'LBL_DOC_EXP_DATE',
          ),
          1 => 
          array (
            'name' => 'file_ext',
            'label' => 'LBL_FILE_EXTENSION',
          ),
        ),
        8 => 
        array (
          0 => 'subcategory_id',
          1 => 'assigned_user_name',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'file_mime_type',
            'label' => 'LBL_MIME',
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
        10 => 
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
