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

<div style='width:100%'>
<form name='configure_{$id}' action="index.php" method="post" onSubmit='save_settings();'>
<input type='hidden' id = "id" name='id' value='{$id}'>
<input type='hidden' name='module' value='Home'>
<input type='hidden' name='action' value='ConfigureDashlet'>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='configure' value='true'>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="edit view" align="center">
<tr>
    <td scope='row'>
        Select Option :
    </td>
    <td>
		<select name='select_option' id='select_option' onchange="hide_show_list(this.value);">
            {html_options options=$select_option selected=$selected_type}
        </select>
    </td>
</tr>
{if $selected_type eq 'specific_company'}
	<tr id="accounts_option">
{else}
	<tr id="accounts_option" style="display:none;">
{/if}
    <td scope='row'>
        Select Specific Company :
    </td>
    <td>
        <select name='selected_account' id='selected_account'>
            {html_options options=$accounts_options selected=$selected_value}
        </select>
    </td>
</tr>
{if $selected_type eq 'specific_user'}
	<tr id="users_option">
{else}
	<tr id="users_option" style="display:none;">
{/if}
    <td scope='row'>
        Select Specific User :
    </td>
    <td>
		<select name='selected_user' id='selected_user'>
            {html_options options=$users_options selected=$selected_value}
        </select>
    </td>
</tr>
<tr>
    <td align="right" colspan="2">
        <input type='submit' class='button' value='{$saveLBL}'>
   	</td>
</tr>
</table>
</form>
</div>