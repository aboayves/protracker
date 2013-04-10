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

{$CSS}

{$INSTRUCTION}


<form enctype="multipart/form-data" real_id="importstep3" id="importstep3" name="importstep3" method="POST" action="index.php">
<input type="hidden" name="module" value="Import">
<input type="hidden" name="previous_action" value="Confirm">
<input type="hidden" name="custom_delimiter" value="{$CUSTOM_DELIMITER}">
<input type="hidden" name="custom_enclosure" value="{$CUSTOM_ENCLOSURE}">
<input type="hidden" name="import_type" value="{$TYPE}">
<input type="hidden" name="source" value="{$smarty.request.source}">
<input type="hidden" name="source_id" value="{$smarty.request.source_id}">
<input type="hidden" name="action" value="Step3">
<input type="hidden" name="import_module" value="{$IMPORT_MODULE}">
<input type="hidden" name="has_header" value="{$HAS_HEADER}">
<input type="hidden" name="tmp_file" value="{$TMP_FILE}">
<input type="hidden" name="tmp_file_base" value="{$TMP_FILE}">
<input type="hidden" name="firstrow" value="{$FIRSTROW}">
<input type="hidden" name="columncount" value ="{$COLUMNCOUNT}">
<input type="hidden" name="current_step" value="{$CURRENT_STEP}">
<input type="hidden" name="importlocale_charset" value="{$smarty.request.importlocale_charset}">
<input type="hidden" name="importlocale_dateformat" value="{$smarty.request.importlocale_dateformat}">
<input type="hidden" name="importlocale_timeformat" value="{$smarty.request.importlocale_timeformat}">
<input type="hidden" name="importlocale_timezone" value="{$smarty.request.importlocale_timezone}">
<input type="hidden" name="importlocale_currency" value="{$smarty.request.importlocale_currency}">
<input type="hidden" name="importlocale_default_currency_significant_digits" value="{$smarty.request.importlocale_default_currency_significant_digits}">
<input type="hidden" name="importlocale_num_grp_sep" value="{$smarty.request.importlocale_num_grp_sep}">
<input type="hidden" name="importlocale_dec_sep" value="{$smarty.request.importlocale_dec_sep}">
<input type="hidden" name="importlocale_default_locale_name_format" value="{$smarty.request.importlocale_default_locale_name_format}">
<input type="hidden" name="from_admin_wizard" value="{$smarty.request.from_admin_wizard}">
    
<br>
{if $NOTETEXT != ''}
    <p>
        <input title="{$MOD.LBL_SHOW_ADVANCED_OPTIONS}"  id="toggleNotes" class="button" type="button"
                       name="button" value="  {$MOD.LBL_SHOW_NOTES}  ">
        <div id="importNotes" style="display: none;">
            <ul>
                {$NOTETEXT}
            </ul>
        </div>
    </p>
{/if}

<div class="hr"></div>


<table border="0" cellspacing="0" cellpadding="0" width="100%" id="importTable" class="detail view">
{foreach from=$rows key=key item=item name=rows}
{if $smarty.foreach.rows.first}
<tr>
    {if $HAS_HEADER == 'on'}
    <th style="text-align: left;" scope="col">
        <b>{$MOD.LBL_HEADER_ROW}</b>&nbsp;
        {sugar_help text=$MOD.LBL_HEADER_ROW_HELP}
    </th>
    {/if}
    <th style="text-align: left;" scope="col">
        <b>{$MOD.LBL_DATABASE_FIELD}</b>&nbsp;
        {sugar_help text=$MOD.LBL_DATABASE_FIELD_HELP}
    </th>
    <th style="text-align: left;" scope="col">
        <b>{$MOD.LBL_ROW} 1</b>&nbsp;
        {sugar_help text=$MOD.LBL_ROW_HELP}
    </th>
    {if $HAS_HEADER != 'on'}
    <th style="text-align: left;" scope="col"><b>{$MOD.LBL_ROW} 2</b></td>
    {/if}
    <th scope='col' style="text-align: left;" scope="rcol" id="default_column_header" width="10%">
        <span id="hide_default_link" class="expand">&nbsp;<b id="">{$MOD.LBL_DEFAULT_VALUE}</b>&nbsp;
        {sugar_help text=$MOD.LBL_DEFAULT_VALUE_HELP}</span>
        <span id="default_column_header_span">&nbsp;</span>
    </th>
</tr>
{/if}
<tr>
    {if $HAS_HEADER == 'on'}
    <td id="row_{$smarty.foreach.rows.index}_header">{$item.cell1}</td>
    {/if}
    <td valign="top" align="left" id="row_{$smarty.foreach.rows.index}_col_0">
        <select class='fixedwidth' name="colnum_{$smarty.foreach.rows.index}">
            <option value="-1">{$MOD.LBL_DONT_MAP}</option>
            {$item.field_choices}
        </select>
    </td>
    {if $item.show_remove}
    <td colspan="2">
        <input title="{$MOD.LBL_REMOVE_ROW}" 
            id="deleterow_{$smarty.foreach.rows.index}" class="button" type="button"
            value="  {$MOD.LBL_REMOVE_ROW}  ">
    </td>
    {else}
    {if $HAS_HEADER != 'on'}
    <td id="row_{$smarty.foreach.rows.index}_col_1" scope="row">{$item.cell1}</td>
    {/if}
    <td id="row_{$smarty.foreach.rows.index}_col_2" scope="row" colspan="2">{$item.cell2}</td>
    {/if}
    <td id="defaultvaluepicker_{$smarty.foreach.rows.index}" nowrap="nowrap">
        {$item.default_field}
    </td>
</tr>
{/foreach}
<tr>
    <td align="left" colspan="4">
        <input title="{$MOD.LBL_ADD_ROW}"  id="addrow" class="button" type="button"
            name="button" value="  {$MOD.LBL_ADD_ROW}  "> {sugar_help text=$MOD.LBL_ADD_FIELD_HELP}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </td>
</tr>
</table>

<br />

<table width="100%" cellpadding="2" cellspacing="0" border="0">
<tr>
    <td align="left">
        <input title="{$MOD.LBL_BACK}"  id="goback" class="button" type="submit" name="button" value="  {$MOD.LBL_BACK}  ">&nbsp;
        <input title="{$MOD.LBL_NEXT}"  id="gonext" class="button" type="submit" name="button" value="  {$MOD.LBL_NEXT}  ">
    </td>
</tr>
</table>

{$QS_JS}