<?php
$viewdefs ['Tasks'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 
          array (
            'customCode' => '<input title="Delete"  class="button"  onclick="this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\';"  name="button"  value="Delete" onclick="confirmDelete(\'{$fields.id.value}\');"  type="button">',
          ),
          3 => 
          array (
            'customCode' => '{if $fields.status.value != "Completed"} <input type="hidden" name="isSaveAndNew" value="false">  <input type="hidden" name="status" value="">  <input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  class="button"  onclick="this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value=\'EditView\'; this.form.isDuplicate.value=true; this.form.return_id.value=\'{$fields.id.value}\';"  name="button"  value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  type="submit">{/if}',
          ),
          4 => 
          array (
            'customCode' => '{if $fields.status.value != "Completed"} <input type="hidden" name="isSave" value="false">  <input title="{$APP.LBL_CLOSE_BUTTON_TITLE}"  class="button"  onclick="this.form.status.value=\'Completed\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Tasks\';this.form.isSave.value=true;this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'"  name="button1"  value="{$APP.LBL_CLOSE_BUTTON_TITLE}"  type="submit">{/if}',
          ),
          5 => 
          array (
            'customCode' => '<input title="Create Dependent Task" class="button" onclick="window.location=\'index.php?module=Tasks&action=EditView&parent_tasks_id={$fields.id.value}&parent_tasks_name={$fields.name.value}\'" value="Create Dependent Task" type="button">',
          ),
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
          'file' => 'custom/modules/Tasks/delete.js',
        ),
        1 => 
        array (
          'file' => 'custom/modules/Tasks/tree.js',
        ),
      ),
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_task_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
          ),
          1 => 
          array (
            'name' => 'parent_name',
            'customLabel' => 'Related to - {sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}',
          ),
        ),
        1 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'project',
            'studio' => 'visible',
            'label' => 'LBL_PROJECT',
          ),
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
          1 => 'priority',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'av_activity_types_tasks_1_name',
          ),
          1 => 
          array (
            'name' => 'parent_tasks_name',
            'label' => 'LBL_PARENT_TASKS',
          ),
        ),
        4 => 
        array (
          0 => 'date_start',
          1 => 'date_due',
        ),
        5 => 
        array (
          0 => 'client_task',
          1 => 
          array (
            'name' => 'parent_name',
            'customLabel' => 'Related to:',	// - {sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
            'customCode' => '<div> {$fields.description.value} <div>',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'results',
            'comment' => '',
            'label' => 'LBL_RESULTS',
          ),
        ),
        8 => 
        array (
          0 => 'category',
          1 => 'team_name',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'closed_status',
            'label' => 'LBL_CLOSED_STATUS',
          ),
          1 => 
          array (
            'name' => 'date_complete',
            'label' => 'LBL_DTE_CMP',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'private',
          1 => 
          array (
            'name' => 'on_meeting_agenda',
            'comment' => '',
            'label' => 'LBL_ON_MEETING_AGENDA',
          ),
        ),
        1 => 
        array (
          0 => 'alow_asigne_to_modify',
          1 => 
          array (
            'name' => 'on_report_card',
            'comment' => '',
            'label' => 'LBL_ON_REPORT_CARD',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'on_task_list',
            'label' => 'LBL_ON_TASK_LIST',
          ),
        ),
		),
		'lbl_tree_View' => 
        array( 
		0=>
        array (
          0 => 
          array (
            'name' => 'tree',
			'hideLabel' => true,
            'customCode' => '<div> <div>'.
			                '<input type="checkbox" id="pending_only" {$pending_checked} onclick="disable_ajax=0;generateTree();" /> Hide Pending tasks &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;'.
							'<input type="checkbox" id="more_then_90" {$90_checked} onclick="disable_ajax=0;generateTree();" /> Hide tasks greater than 90 days out <br /><br /><br />'.
							'</div><div id="tree_panel3"></div></div>',
          ),
        ),
      ),
    ),
  ),
);
?>
