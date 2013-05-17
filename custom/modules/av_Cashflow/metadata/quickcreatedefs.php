<?php
$module_name = 'av_Cashflow';
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
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNTS_NAME',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'document_name',
          1 => 
          array (
            'name' => 'year',
            'comment' => '',
            'label' => 'LBL_YEAR',
          ),
        ),
        2 => 
        array (
          0 => 
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
          1 => 'active_date',
        ),
        3 => 
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
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        4 => 
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
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'income_per_month',
            'comment' => '',
            'label' => 'LBL_INCOME_PER_MONTH',
          ),
          1 => 
          array (
            'name' => 'income_per_year',
            'comment' => '',
            'label' => 'LBL_INCOME_PER_YEAR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'savings_per_month',
            'comment' => '',
            'label' => 'LBL_SAVINGS_PER_MONTH',
          ),
          1 => 
          array (
            'name' => 'savings_per_year',
            'comment' => '',
            'label' => 'LBL_SAVINGS_PER_YEAR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fixed_expenses_per_month',
            'comment' => '',
            'label' => 'LBL_FIXED_EXPENSES_PER_MONTH',
          ),
          1 => 
          array (
            'name' => 'fixed_expenses_per_year',
            'comment' => '',
            'label' => 'LBL_FIXED_EXPENSES_PER_YEAR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'variable_expenses_per_month',
            'comment' => '',
            'label' => 'LBL_VARIABLE_EXPENSES_PER_MONTH',
          ),
          1 => 
          array (
            'name' => 'variable_expenses_per_year',
            'comment' => '',
            'label' => 'LBL_VARIABLE_EXPENSES_PER_YEAR',
          ),
        ),
      ),
    ),
  ),
);
?>
