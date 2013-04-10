<?php
// created: 2012-07-03 09:43:36
$viewdefs['Notes']['EditView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'enctype' => 'multipart/form-data',
      'headerTpl' => 'modules/Notes/tpls/EditViewHeader.tpl',
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
  ),
  'panels' => 
  array (
    'lbl_note_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'contact_name',
          'label' => 'LBL_CONTACT_NAME',
        ),
        1 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_RELATED_TO',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'size' => 60,
          ),
        ),
        1 => 'filename',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'portal_flag',
          'displayParams' => 
          array (
            'required' => false,
          ),
          'customLabel' => '{if ($PORTAL_ENABLED)}{sugar_translate label="LBL_PORTAL_FLAG" module="Notes"}{/if}',
          'customCode' => ' {if ($PORTAL_ENABLED)}
											  {if $fields.portal_flag.value == "1"}
											  {assign var="checked" value="CHECKED"}
											  {else}
											  {assign var="checked" value=""}
											  {/if}
											  <input type="hidden" name="{$fields.portal_flag.name}" value="0"> 
											  <input type="checkbox" name="{$fields.portal_flag.name}" value="1" tabindex="1" {$checked}>
					        		          {/if}',
        ),
        1 => 
        array (
          'name' => 'team_name',
        ),
      ),
      3 => 
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
    ),
  ),
);