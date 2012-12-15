<?php
$module_name = 'av_Life_Insurance';
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
          0 => 
          array (
            'name' => 'accounts_av_life_insurance_1_name',
            'label' => 'LBL_ACCOUNTS_AV_LIFE_INSURANCE_1_FROM_ACCOUNTS_TITLE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 'category_id',
          1 => 'subcategory_id',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'policy_number',
            'comment' => '',
            'label' => 'LBL_POLICY_NUMBER',
          ),
          1 => 
          array (
            'name' => 'term',
            'comment' => '',
            'label' => 'LBL_TERM',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'comment' => '',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'maturity_date',
            'comment' => '',
            'label' => 'LBL_MATURITY_DATE',
          ),
        ),
        4 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'status_id',
            'label' => 'LBL_DOC_STATUS',
          ),
        ),
        5 => 
        array (
          0 => 'active_date',
          1 => 
          array (
            'name' => 'exp_date',
            'label' => 'LBL_DOC_EXP_DATE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'comment' => '',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'end_date',
            'comment' => '',
            'label' => 'LBL_END_DATE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'issue_date',
            'comment' => '',
            'label' => 'LBL_ISSUE_DATE',
          ),
          1 => 
          array (
            'name' => 'last_ledger_date',
            'comment' => '',
            'label' => 'LBL_LAST_LEDGER_DATE',
          ),
        ),
        8 => 
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
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'premium',
            'comment' => '',
            'label' => 'LBL_PREMIUM',
          ),
          1 => 
          array (
            'name' => 'premium_due_date',
            'comment' => '',
            'label' => 'LBL_PREMIUM_DUE_DATE',
          ),
        ),
        10 => 
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
        11 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        12 => 
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
