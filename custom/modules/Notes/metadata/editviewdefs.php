<?php
$viewdefs ['Notes'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'headerTpl' => 'modules/Notes/tpls/EditViewHeader.tpl',
        'hidden' => 
        array (
          0 => '<input type="hidden" name="attach_to_group_id" value="">',
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
      'javascript' => '<script type="text/javascript" src="include/javascript/dashlets.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script>
function deleteAttachmentCallBack(text) 
	{literal} { {/literal} 
	if(text == \'true\') {literal} { {/literal} 
		document.getElementById(\'new_attachment\').style.display = \'\';
		ajaxStatus.hideStatus();
		document.getElementById(\'old_attachment\').innerHTML = \'\'; 
	{literal} } {/literal} else {literal} { {/literal} 
		document.getElementById(\'new_attachment\').style.display = \'none\';
		ajaxStatus.flashStatus(SUGAR.language.get(\'Notes\', \'ERR_REMOVING_ATTACHMENT\'), 2000); 
	{literal} } {/literal}  
{literal} } {/literal} 
</script>
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>{$tiny}',
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_note_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'size' => 60,
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
            'name' => 'parent_name',
            'label' => 'LBL_RELATED_TO',
          ),
          1 => 
          array (
            'name' => 'av_Activity_Types_name',
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
            'label' => 'LBL_NOTE_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 'filename',
        ),
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
          ),
        ),
        6 => 
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
