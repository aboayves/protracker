<?php
// created: 2013-04-10 13:54:26
$viewdefs['Project']['DetailView'] = array (
  'templateMeta' => 
  array (
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
        'file' => 'modules/Project/Project.js',
      ),
    ),
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'customCode' => '<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}"{if $IS_TEMPLATE}onclick="this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesDetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'ProjectTemplatesEditView\';"{else}onclick="this.form.return_module.value=\'Project\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\';" {/if}"/>',
        ),
        1 => 
        array (
          'customCode' => '<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" type="submit" name="Delete" id="delete_button" value="{$APP.LBL_DELETE_BUTTON_LABEL}"{if $IS_TEMPLATE}onclick="this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesListView\'; this.form.action.value=\'Delete\'; return confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\');"{else}onclick="this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ListView\'; this.form.action.value=\'Delete\'; return confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\');" {/if}"/>',
        ),
        2 => 
        array (
          'customCode' => '{if $EDIT_RIGHTS_ONLY}<input title="{$MOD.LBL_VIEW_GANTT_TITLE}" class="button" type="submit" name="EditProjectTasks" id="view_gantt_button" value="  {$MOD.LBL_VIEW_GANTT_TITLE}  " onclick="prep_edit_project_tasks(this.form);" />{/if}',
        ),
        3 => 
        array (
          'customCode' => '<input title="{$SAVE_AS}" class="button" type="submit" name="SaveAsTemplate" value="{$SAVE_AS}"{if $IS_TEMPLATE}onclick="prep_save_as_project(this.form)"{else}onclick="prep_save_as_template(this.form) {/if}"/>',
        ),
        4 => 
        array (
          'customCode' => '<input title="{$MOD.LBL_EXPORT_TO_MS_PROJECT}" class="button" type="submit" name="ExportToProject" value="  {$MOD.LBL_EXPORT_TO_MS_PROJECT}  " onclick="prep_export_to_project(this.form);"/>',
        ),
      ),
    ),
    'useTabs' => true,
    'syncDetailEditViews' => true,
    'tabDefs' => 
    array (
      'LBL_PROJECT_INFORMATION' => 
      array (
        'newTab' => true,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_project_information' => 
    array (
      0 => 
      array (
        0 => 'name',
        1 => 'status',
      ),
      1 => 
      array (
        0 => 'priority',
        1 => 
        array (
          'name' => 'estimated_start_date',
          'label' => 'LBL_DATE_START',
        ),
      ),
      2 => 
      array (
        0 => 'description',
        1 => 
        array (
          'name' => 'estimated_end_date',
          'label' => 'LBL_DATE_END',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'project_manager_c',
          'studio' => 'visible',
          'label' => 'LBL_PROJECT_MANAGER',
        ),
        1 => 
        array (
          'name' => 'billing_type_c',
          'studio' => 'visible',
          'label' => 'LBL_BILLING_TYPE',
        ),
      ),
      4 => 
      array (
        0 => '',
        1 => 
        array (
          'name' => 'service_c',
          'studio' => 'visible',
          'label' => 'LBL_SERVICE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'owner_test',
          'label' => 'LBL_OWNER_TEST',
        ),
        1 => 
        array (
          'name' => 'is_template',
          'comment' => 'Should be checked if the project is a template',
          'label' => 'LBL_IS_TEMPLATE',
        ),
      ),
    ),
  ),
);