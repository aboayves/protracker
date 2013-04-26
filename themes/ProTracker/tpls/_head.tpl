{*
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html {$langHeader}>
<head>
<script type="text/javascript" src="custom/include/js/relate_cstm_quickCreate.js"></script>
<link rel="SHORTCUT ICON" href="{$FAVICON_URL}">
<meta http-equiv="Content-Type" content="text/html; charset={$APP.LBL_CHARSET}">
<title>{$SYSTEM_NAME}</title>
{$SUGAR_CSS}
{if $AUTHENTICATED}
<link rel='stylesheet' href='{sugar_getjspath file="include/ytree/TreeView/css/folders/tree.css"}'/>
<link rel='stylesheet' href='{sugar_getjspath file="include/SugarCharts/Jit/css/base.css"}'/>
{/if}
{$SUGAR_JS}
{literal}
<script type="text/javascript">

$(function(){
	($(".listViewBody").parent().children().first().children().eq(1)).children().eq(0).attr("id","create_image");
	($(".listViewBody").parent().children().first().children().eq(1)).children().eq(1).attr("id","create_link");
	var str = $(".moduleTitle").children().eq(0).text();
	if(str.search("Save") != -1){
		$(".moduleTitle").children().eq(1).append("<ul class='clickMenu' ><li id='create_link_li'></li></ul>");
		$(".moduleTitle").children().eq(1).children().eq(0).attr("id","create_image");
		$(".moduleTitle").children().eq(1).children().eq(1).attr("id","create_link");
	}
	$("#create_image").remove();
	var href = $("#create_link").attr('href');
	$("#edit_button").parents(":eq(2)").append("<ul class='clickMenu' ><li id='create_link_li'></li></ul>");
	($(".listViewBody").parent().children().first().children().eq(1)).append("<ul class='clickMenu'><li id='create_link_li'></li></ul>");
	($("#edit_button").parents("table:first").parent().children(".moduleTitle").children().eq(1)).css('display','none');
	$("#CANCEL_HEADER").parent().append('<input type="button" id="create_link" value="Create New" name="create_link" onclick="window.location=\''+href+'\'" class="button">');
	$("#CANCEL_HEADER").parents(":eq(6)").children().first().children().eq(1).remove();
	$("#create_link").text("Create New");
	$("#create_link").appendTo($("#create_link_li"));
});
<!--
SUGAR.themes.theme_name      = '{/literal}{$THEME}{literal}';
SUGAR.themes.hide_image      = '{/literal}{sugar_getimagepath file="hide.gif"}{literal}';
SUGAR.themes.show_image      = '{/literal}{sugar_getimagepath file="show.gif"}{literal}';
SUGAR.themes.loading_image      = '{/literal}{sugar_getimagepath file="img_loading.gif"}{literal}';
if ( YAHOO.env.ua )
    UA = YAHOO.env.ua;
-->


</script>
{/literal}
<!--[if gte IE 9]>
	<link rel='stylesheet' href='{sugar_getjspath file="themes/ProTracker/css/ie9.css"}'/>
<![endif]-->
</head>