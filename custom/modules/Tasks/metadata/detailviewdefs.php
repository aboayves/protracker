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
          array(
            'customCode' => '<input title="Delete"  class="button"  onclick="this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\';"  name="button"  value="Delete" onclick="confirmDelete();"  type="button">',
          ),
          3 => 
          array (
            'customCode' => '{if $fields.status.value != "Completed"} <input type="hidden" name="isSaveAndNew" value="false">  <input type="hidden" name="status" value="">  <input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  class="button"  onclick="this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value=\'EditView\'; this.form.isDuplicate.value=true; this.form.return_id.value=\'{$fields.id.value}\';"  name="button"  value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  type="submit">{/if}',
          ),
          4 => 
          array (
            'customCode' => '{if $fields.status.value != "Completed"} <input type="hidden" name="isSave" value="false">  <input title="{$APP.LBL_CLOSE_BUTTON_TITLE}"  class="button"  onclick="this.form.status.value=\'Completed\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Tasks\';this.form.isSave.value=true;this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'"  name="button1"  value="{$APP.LBL_CLOSE_BUTTON_TITLE}"  type="submit">{/if}',
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
          1 => 'status',
        ),
        1 => 
        array (
          0 => 'date_start',
          1 => 'priority',
        ),
        2 => 
        array (
          0 => 'private',
          1 => 
          array (
            'name' => 'assigned_to_client_c',
            'label' => 'LBL_ASSIGNED_TO_CLIENT',
          ),
        ),
        3 => 
        array (
          0 => 'date_due',
          1 => 
          array (
            'name' => 'parent_tasks_name',
            'label' => 'LBL_PARENT_TASKS',
          ),
        ),
        4 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'parent_name',
            'customLabel' => '{sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'closed_status',
            'label' => 'LBL_CLOSED_STATUS',
          ),
          1 => 
          array (
            'name' => 'contact_name',
            'label' => 'LBL_CONTACT',
          ),
        ),
		6 => 
		array (
		 0 => 'category',
		 1 => 'date_complete',
		),
        7 => 
        array (
          0 => 'description',
          1 => 'alow_asigne_to_modify',
        ),
      ),
    ),
  ),
);
?>
