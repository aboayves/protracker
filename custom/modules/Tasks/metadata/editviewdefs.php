<?php
$viewdefs ['Tasks'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
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
      'javascript' => '
		<script type="text/javascript" language="Javascript">
{literal}		tinyMCE.init({"convert_urls":false,"valid_children":"+body[style]","height":300,"width":"50%","theme":"advanced","theme_advanced_toolbar_align":"left","theme_advanced_toolbar_location":"top","theme_advanced_buttons1":"code,help,separator,bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,\\r\\n\\t                     \\t\\t\\t\\t\\tjustifyfull,separator,forecolor,backcolor,separator,styleselect,formatselect,fontselect,fontsizeselect,","theme_advanced_buttons2":"cut,copy,paste,pastetext,pasteword,selectall,separator,search,replace,separator,bullist,numlist,separator,outdent,indent,separator,ltr,rtl,separator,undo,redo,separator,link,unlink,anchor,separator,sub,sup,separator,charmap,visualaid","theme_advanced_buttons3":"tablecontrols,separator,advhr,hr,removeformat,separator,insertdate,inserttime,separator","strict_loading_mode":true,"mode":"exact","language":"en","plugins":"advhr,insertdatetime,table,preview,paste,searchreplace,directionality","elements":null,"extended_valid_elements":"style[dir|lang|media|title|type],hr[class|width|size|noshade],@[class|style]","content_css":"include\\/javascript\\/tiny_mce\\/themes\\/advanced\\/skins\\/default\\/content.css","apply_source_formatting":false,"cleanup_on_startup":true,"relative_urls":false});</script>
{/literal}
		<script type="text/javascript" language="Javascript">
			tinyMCE.execCommand("mceAddControl",false,"description");
		</script>
		
	  ',
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/tiny_mce/tiny_mce.js',
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
            'displayParams' => 
            array (
              'required' => true,
            ),
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
        1 => 
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
            'name' => 'priority',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 'notify_child_completion',
        ),
        3 => 
        array (
          0 => 'private',
          1 => 
          array (
            'name' => 'assigned_to_client_c',
            'label' => 'LBL_ASSIGNED_TO_CLIENT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_due',
            'type' => 'datetimecombo',
            'displayParams' => 
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'parent_tasks_name',
            'label' => 'LBL_PARENT_TASKS',
          ),
        ),
        5 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_LIST_RELATED_TO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'closed_status',
            'label' => 'LBL_CLOSED_STATUS',
          ),
          1 => 
          array (
            'name' => 'contact_name',
            'label' => 'LBL_CONTACT_NAME',
          ),
        ),
        7 => 
        array (
          0 => 'category',
          1 => 
          array (
            'name' => 'alow_asigne_to_modify',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
      ),
    ),
  ),
);
?>
