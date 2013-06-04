<?php
$module_name = 'av_Task_Template';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="av_Workflow_id" id="av_Workflow_id" value="{$fields.av_Workflow_id.value}">',
        ),
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 => 
          array (
            'customCode' => '<input title="Create Dependent Task" class="button" onclick="window.location=\'index.php?module=av_Task_Template&action=EditView&parent_tasks_id={$fields.id.value}&parent_tasks_name={$fields.name.value}&av_Workflow_id={$fields.av_Workflow_id.value}&av_Workflow_name={$fields.av_Workflow_name.value}\'" value="Create Dependent Task" type="button">',
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
      'useTabs' => false,
      'syncDetailEditViews' => true,
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/av_Task_Template/tree.js',
        ),
        1 => 
        array (
          'file' => 'modules/av_Task_Template/delete.js',
        ),
      ),
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'assign_to',
            'studio' => 'visible',
            'label' => 'LBL_ASSIGN_TO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'relate_to',
            'studio' => 'visible',
            'label' => 'LBL_RELATE_TO',
          ),
          1 => 
          array (
            'name' => 'av_activity_types_name',
            'label' => 'LBL_AV_ACTIVITY_TYPES_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'priority',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
          ),
          1 => 'team_name',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'parent_tasks_name',
            'studio' => 'visible',
            'label' => 'LBL_PARENT_TASKS',
          ),
          1 => 
          array (
            'name' => 'private',
            'label' => 'LBL_PRIVATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'days_out',
            'label' => 'LBL_DAYS_OUT',
          ),
          1 => 
          array (
            'name' => 'notify_child_completion',
            'label' => 'LBL_NOTIFY_CHILD_COMPLETION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'av_Workflow_name',
            'studio' => 'visible',
            'label' => 'LBL_WORKFLOW',
          ),
          1 => 'on_task_list',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'assigned_to_client',
            'label' => 'LBL_ASSIGNED_TO_CLIENT',
          ),
          1 => 'client_task',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'customCode' => '<div> {$fields.description.value} <div>',
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
	  'LBL_TREE_VIEW' =>
	  array(
		0 =>
		array(
			0 =>
			array(
				'name' => 'tree',
				'label' => 'LBL_TREE',
				'customCode' => '<div id="tree_plotting_div"></div>',
				'hideLabel' => true,
			),
		),    
	  ), 
    ),
  ),
);
?>
