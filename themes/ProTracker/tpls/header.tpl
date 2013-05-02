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
{include file="_head.tpl" theme_template=true}
<body class="yui-skin-sam">
<div class="wrapper">
	<div class="contentsWrappaer">
    <a name="top"></a>
	{include file="_dcmenu.tpl" theme_template=true}

	<div class="clear"></div>
    <div class="clear"></div>

{literal}
<iframe id='ajaxUI-history-iframe' src='index.php?entryPoint=getImage&imageName=blank.png'  title='empty'  style='display:none'></iframe>
<input id='ajaxUI-history-field' type='hidden'>
<script type='text/javascript'>
if (SUGAR.ajaxUI && !SUGAR.ajaxUI.hist_loaded)
{
	YAHOO.util.History.register('ajaxUILoc', "", SUGAR.ajaxUI.go);
	{/literal}{if $smarty.request.module != "ModuleBuilder"}{* Module builder will init YUI history on its own *}
	YAHOO.util.History.initialize("ajaxUI-history-field", "ajaxUI-history-iframe");
	{/if}{literal}
}

</script>
<script type='text/javascript'>
function setTabCookie(cookieName, cookieValue, nDays) {
	cookieName+='_selectedTab';
	var today = new Date();
	var expire = new Date();

	if (nDays==null || nDays==0)
		nDays=10;

	expire.setTime(today.getTime() + 3600000*24*nDays);
	document.cookie = cookieName+"="+escape(cookieValue) + ";expires="+expire.toGMTString();
}

function getTabCookie(cookieName)
{
	cookieName+='_selectedTab';
	var i,x,y,ARRcookies=document.cookie.split(";");
	for (i=0;i<ARRcookies.length;i++)
	{
	  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
	  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
	  x=x.replace(/^\s+|\s+$/g,"");
	  if (x==cookieName)
		{
		return unescape(y);
		}
	  }
}
$(function(){
	$(".login_more").parent().prepend('<div style=""><a href="index.php?module=Users&action=Login&mobile=1"><u><img src="custom/themes/default/images/mobile.png">Switch to Mobile View</u><a></div>');
});
</script>
{/literal}

{literal}
<script type='text/javascript'>

$(document).ready(function() {
	
	$(".modulesdrager").click(function(){
		$(this).toggleClass("hide");
		$(".moduleListPanel").toggleClass("hide");
	});
   
 });
	
</script>

{/literal}
<script src="custom/include/js/show_recent_records.js"></script>
<script>
var max_tabs = {$max_tabs};
</script>

<div id="main">
    <div id="content">
    {if $AUTHENTICATED}
    <div class="modulesdrager" title="Collapse Navigation Menu"></div>
    {/if}
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
          {if $AUTHENTICATED}
            <td class="moduleListPanel">
            <div class="moduleListPanelData">
            	{include file="_headerModuleList.tpl" theme_template=true}
            </div>
            </td>
            {/if}
            <td class="contentPanel">
            	
                <div class="contentPanelData">
                    <table style="width:100%" id="contentTable"><tr><td>
                
            

        
        
