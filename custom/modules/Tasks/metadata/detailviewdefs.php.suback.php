<?php
// created: 2012-07-03 09:43:36
$viewdefs['Tasks']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'EDIT',
        1 => 'DUPLICATE',
        2 => 'DELETE',
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
        0 => 'date_due',
        1 => 
        array (
          'name' => 'tasks_tasks_name',
        ),
      ),
      3 => 
      array (
        0 => '',
        1 => 
        array (
          'name' => 'parent_name',
          'customLabel' => '{sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}',
        ),
      ),
      4 => 
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
      5 => 
      array (
        0 => 'description',
      ),
    ),
  ),
);