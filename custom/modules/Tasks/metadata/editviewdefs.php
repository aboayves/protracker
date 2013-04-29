<?php
$viewdefs ['Tasks'] = 
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
          0 => '<input type="hidden" name="isSaveAndNew" value="false">',
          1 => '<input type="hidden" name="attach_to_group_id" value="{$fields.attach_to_group_id.value}">',
        ),
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
          2 => 
          array (
            'customCode' => '{if $fields.status.value != "Completed"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" class="button" onclick="document.getElementById(\'status\').value=\'Completed\'; this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'; if(check_form(\'EditView\'))SUGAR.ajaxUI.submitForm(this.form);" type="button" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
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
          'file' => 'include/javascript/tiny_mce/tiny_mce.js',
        ),
        1 => 
        array (
          'file' => 'custom/modules/Tasks/workflow_load.js',
        ),
        3 => 
        array (
          'file' => 'custom/include/js/inherit_parent_team.js',
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
            'name' => 'parent_name',
            'label' => 'LBL_LIST_RELATED_TO',
            'displayParams' => 
            array (
              'call_back_function' => 'set_return',
            ),
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
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
            'name' => 'description',
            'customCode' => '<textarea id="description" name="description">{$fields.description.value}</textarea>{literal}<script type="text/javascript" language="Javascript" src="include/javascript/tiny_mce/tiny_mce.js?s=d569410bd100799ca3095b1d6561f222&c=1"></script>

<script type="text/javascript" language="Javascript">
<!--
if (!SUGAR.util.isTouchScreen()) {
    tinyMCE.init({"convert_urls":false,"height":600,"width":"100%","theme":"advanced","theme_advanced_toolbar_align":"left","theme_advanced_toolbar_location":"top","theme_advanced_buttons1":"code,help,separator,bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,\\n\\t                     \\t\\t\\t\\t\\tjustifyfull,separator,forecolor,backcolor,separator,styleselect,formatselect,fontselect,fontsizeselect,","theme_advanced_buttons2":"cut,copy,paste,pastetext,pasteword,selectall,separator,search,replace,separator,bullist,numlist,separator,outdent,\\n\\t                     \\t\\t\\t\\t\\tindent,separator,ltr,rtl,separator,undo,redo,separator, link,unlink,anchor,image,separator,sub,sup,separator,charmap,\\n\\t                     \\t\\t\\t\\t\\tvisualaid","theme_advanced_buttons3":"tablecontrols,separator,advhr,hr,removeformat,separator,insertdate,inserttime,separator,preview","strict_loading_mode":true,"mode":"exact","language":"en","plugins":"advhr,insertdatetime,table,preview,paste,searchreplace,directionality","elements":"description","extended_valid_elements":"style,hr[class|width|size|noshade],@[class|style]","content_css":"include\\/javascript\\/tiny_mce\\/themes\\/advanced\\/skins\\/default\\/content.css","cleanup_on_startup":true,"directionality":"ltr"});
		
}
else {    document.getElementById(\'description\').style.width = \'100%\';
    document.getElementById(\'description\').style.height = \'100px\';}
-->
</script>
<script>focus_obj = document.getElementById("description");</script>{/literal}',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'project',
            'studio' => 'visible',
            'label' => 'LBL_PROJECT',
          ),
          1 => 
          array (
            'name' => 'status',
            'displayParams' => 
            array (
              'javascript' => 'onchange="if(this.value==&quot;Completed&quot;) alert(&quot;Completing this tasks will assign all dependent tasks to specified users.&quot;);"',
              'required' => true,
            ),
          ),
        ),
        4 => 
        array (
          0 => 'filename',
          1 => 
          array (
            'name' => 'priority',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_start',
            'type' => 'datetimecombo',
            'displayParams' => 
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'date_due',
            'type' => 'datetimecombo',
            'displayParams' => 
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'parent_tasks_name',
            'label' => 'LBL_PARENT_TASKS',
          ),
          1 => 
          array (
            'name' => 'percent_complete',
            'comment' => '',
            'label' => 'LBL_PERCENT_COMPLETE',
          ),
        ),
        7 => 
        array (
          0 => 'client_task',
          1 => 
          array (
            'name' => 'assigned_to_client_c',
            'label' => 'LBL_ASSIGNED_TO_CLIENT',
          ),
        ),
        8 => 
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
        9 => 
        array (
          0 => 
          array (
            'name' => 'results',
            'comment' => '',
            'label' => 'LBL_RESULTS',
          ),
          1 => 
          array (
            'name' => 'team_name',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'workflow_related_to',
            'customCode' => '
		  {html_options name="workflow_parent_type" id="workflow_parent_type" 
			onchange="document.EditView.workflow_related_to.value=&quot;&quot;;document.EditView.workflow_parent_id.value=&quot;&quot;; changeParentQS(&quot;workflow_related_to&quot;); checkParentType(document.EditView.workflow_parent_type.value, document.EditView.btn_workflow_related_to);"
			options=$workFlow_related_to_options selected=$fields.workflow_parent_type.value}
			<input type="text" autocomplete="off" value="{$fields.workflow_related_to.value}" size="" tabindex="0" class="sqsEnabled sqsEnabledFlex yui-ac-input" id="workflow_related_to" name="workflow_related_to"/>
			<div id="EditView_workflow_related_to_results" class="yui-ac-container">
				<div class="yui-ac-content" style="display: none;">
					<div class="yui-ac-hd" style="display: none;"></div>
					<div class="yui-ac-bd">
						<ul>
							<li style="display: none;"></li>
							<li style="display: none;"></li>
							<li style="display: none;"></li>
							<li style="display: none;"></li>
							<li style="display: none;"></li>
							<li style="display: none;"></li>
							<li style="display: none;"></li>
							<li style="display: none;"></li>
							<li style="display: none;"></li>
							<li style="display: none;"></li>
						</ul>
					</div>
					<div class="yui-ac-ft" style="display: none;"></div>
				</div>
			</div>
			<input type="hidden" value="{$fields.workflow_parent_id.value}" id="workflow_parent_id" name="workflow_parent_id">
			<span class="id-ff multiple">
			<button onclick="work_flow_popup()" value="Select" class="button firstChild" title="Select" tabindex="0" id="btn_workflow_related_to" name="btn_workflow_related_to" type="button"><img src="themes/default/images/id-ff-select.png?v=Iqxa6IL77YUAPOoUnkCMwQ"></button><button value="Clear" onclick="this.form.workflow_related_to.value = ""; this.form.workflow_parent_id.value = "";" class="button lastChild" title="Clear" tabindex="0" id="btn_clr_workflow_related_to" name="btn_clr_workflow_related_to" type="button"><img src="themes/default/images/id-ff-clear.png?v=Iqxa6IL77YUAPOoUnkCMwQ"></button>
			</span>',
          ),
          1 => '',
        ),
        11 => 
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'on_meeting_agenda',
            'comment' => '',
            'label' => 'LBL_ON_MEETING_AGENDA',
          ),
          1 => 
          array (
            'name' => 'on_report_card',
            'comment' => '',
            'label' => 'LBL_ON_REPORT_CARD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'on_client_task_list',
            'comment' => '',
            'label' => 'LBL_ON_CLIENT_TASK_LIST',
          ),
          1 => 
          array (
            'name' => 'on_task_list',
            'label' => 'LBL_ON_TASK_LIST',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'report_sort',
            'comment' => '',
            'label' => 'LBL_REPORT_SORT',
          ),
          1 => 'notify_child_completion',
        ),
      ),
    ),
  ),
);
?>
