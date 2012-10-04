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

	{if $fields.reminder_time}            	
            	
            	{assign var="REMINDER_TIME_OPTIONS" value=$fields.reminder_time.options}
            	{assign var="EMAIL_REMINDER_TIME_OPTIONS" value=$fields.reminder_time.options}	
            	
            	{if !$fields.reminder_checked.value}            		
            		{assign var="REMINDER_TIME" value=-1}
            	{else}
            		{assign var="REMINDER_TIME" value=$fields.reminder_time.value}
            	{/if}
            	{if !$fields.email_reminder_checked.value}            		
            		{assign var="EMAIL_REMINDER_TIME" value=-1}
            	{else}
            		{assign var="EMAIL_REMINDER_TIME" value=$fields.email_reminder_time.value}
            	{/if}
	{/if}
	
	{assign var="REMINDER_TIME_DISPLAY" value="none"}
	{assign var="EMAIL_REMINDER_TIME_DISPLAY" value="none"}
	{if $REMINDER_TIME != -1}
            	{assign var="REMINDER_CHECKED" value="checked"}
            	{assign var="REMINDER_TIME_DISPLAY" value="inline"}	
	{/if}
        {if $EMAIL_REMINDER_TIME != -1}
            	{assign var="EMAIL_REMINDER_CHECKED" value="checked"}
            	{assign var="EMAIL_REMINDER_TIME_DISPLAY" value="inline"}
        {/if}

	{if $view == "EditView" || $view == "QuickCreate" || $view == "QuickEdit" || $view == "wirelessedit"}
		<div>
		    	   	
		    	<input name="reminder_checked" type="hidden" value="0">
		    	<input name="reminder_checked" id="reminder_checked" onclick="toggleReminder(this,'reminder');" type="checkbox" class="checkbox" value="1" {$REMINDER_CHECKED}>
		    	<div style="display: inline-block; width: 42px;">{$MOD.LBL_REMINDER_POPUP}</div>
		    	<div id="reminder_list" style="display: {$REMINDER_TIME_DISPLAY}">
		    		<select tabindex="{$REMINDER_TABINDEX}" name="reminder_time">
					{html_options options=$REMINDER_TIME_OPTIONS selected=$REMINDER_TIME}
				</select>
		    	</div>
            	</div>
            	<div>
		    	
		   	<input name="email_reminder_checked" type="hidden" value="0">
		    	<input name="email_reminder_checked" id="email_reminder_checked" onclick="toggleReminder(this,'email_reminder');" type="checkbox" class="checkbox" value="1" {$EMAIL_REMINDER_CHECKED}>
		    	<div style="display: inline-block; width: 42px;">{$MOD.LBL_REMINDER_EMAIL}</div>
		    	<div id="email_reminder_list" style="display: {$EMAIL_REMINDER_TIME_DISPLAY}">
		    		<select tabindex="{$REMINDER_TABINDEX}" name="email_reminder_time">
					{html_options options=$EMAIL_REMINDER_TIME_OPTIONS selected=$EMAIL_REMINDER_TIME}
				</select>
		    	</div>
		</div>
            	<script type="text/javascript">
            		{literal} 
			function toggleReminder(el,field){
				if(el.checked){
					document.getElementById(field + "_list").style.display = "inline";
				}else{
					document.getElementById(field + "_list").style.display = "none";
				}
			}
			{/literal}
            	</script>
	{else}
		<div>			
			<input type="checkbox" disabled  {$REMINDER_CHECKED}>
			{$MOD.LBL_REMINDER_POPUP}
			{if $REMINDER_TIME != -1}
				{$REMINDER_TIME_OPTIONS[$REMINDER_TIME]}
			{/if}			
		</div>
		<div>			
			<input type="checkbox" disabled  {$EMAIL_REMINDER_CHECKED}>
			{$MOD.LBL_REMINDER_EMAIL}
			{if $EMAIL_REMINDER_TIME != -1}
				{$EMAIL_REMINDER_TIME_OPTIONS[$EMAIL_REMINDER_TIME]}
			{/if}			
		</div>
	{/if}	
