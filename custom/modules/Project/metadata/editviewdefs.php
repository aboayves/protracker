<?php
// created: 2013-04-10 13:54:26
$viewdefs['Project']['EditView'] = array (
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
    'form' => 
    array (
      'hidden' => '<input type="hidden" name="is_template" value="{$is_template}" />',
      'buttons' => 
      array (
        0 => 'SAVE',
        1 => 
        array (
          'customCode' => '{if !empty($smarty.request.return_action) && $smarty.request.return_action == "ProjectTemplatesDetailView" && (!empty($fields.id.value) || !empty($smarty.request.return_id)) }<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'ProjectTemplatesDetailView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="Cancel"> {elseif !empty($smarty.request.return_action) && $smarty.request.return_action == "DetailView" && (!empty($fields.id.value) || !empty($smarty.request.return_id)) }<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'DetailView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="Cancel"> {elseif $is_template}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'ProjectTemplatesListView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="Cancel"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'index\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="Cancel"> {/if}',
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
        1 => 'estimated_start_date',
      ),
      2 => 
      array (
        0 => 'description',
        1 => 'estimated_end_date',
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