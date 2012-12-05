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
    
    	<li class="{$homeClass}"><a href="index.php?module=av_Companies&action=index" module="av_Companies" class="sf-with-ul">Companies</a>
        	<ul class="megamenu">
                            <li>
                                <div class="megawrapper">
                                    <div class="megacolumn">
                                        <div class="megacolumn-content divider">
                                        <ul class="MMShortcuts">
                                        <li class="groupLabel">{$APP.LBL_LINK_ACTIONS}</li>
                                        {assign var='name' value='av_Companies'}
										{foreach from=$shortcutTopMenu.$name item=shortcut_item}
                                          {if $shortcut_item.URL == "-"}
                                            <hr style="margin-top: 2px; margin-bottom: 2px" />
                                          {else}
                                            <li><a id="{$shortcut_item.LABEL|replace:' ':''}{$tabGroupName}" href="{sugar_ajax_url url=$shortcut_item.URL}">{$shortcut_item.LABEL}</a></li>
                                          {/if}
                                        {/foreach}
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="megacolumn">
                                        <div class="megacolumn-content divider">
                                        {if $groupTabId}
                                        <ul id="lastViewedContainer{$tabGroupName}_{$name}" class="MMLastViewed">
                                            <li class="groupLabel">{$APP.LBL_LAST_VIEWED}</li>
                                            <li id="shortCutsLoading{$tabGroupName}_{$name}"><a href="#">&nbsp;</a></li>
                                        </ul>
                                        {else}
                                        <ul id="lastViewedContainer{$name}" class="MMLastViewed">
                                            <li class="groupLabel">{$APP.LBL_LAST_VIEWED}</li>
                                            <li id="shortCutsLoading{$tabGroupName}_{$name}"><a href="#">&nbsp;</a></li>
                                        </ul>
                                        {/if}
                                        </div>
                                    </div>
                                    <div class="megacolumn">
                                        <div class="megacolumn-content">
                                        <ul class="MMFavorites">
                                            <li class="groupLabel">{$APP.LBL_FAVORITES}</li>
                                            <li><a href="javascript: void(0);">&nbsp;</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            </ul>
        </li>
        <li class="{$homeClass}"><a href="index.php?module=Accounts&action=index" module="Accounts" class="sf-with-ul">Clients</a>
        	<ul class="megamenu">
                            <li>
                                <div class="megawrapper">
                                    <div class="megacolumn">
                                        <div class="megacolumn-content divider">
                                        <ul class="MMShortcuts">
                                        <li class="groupLabel">{$APP.LBL_LINK_ACTIONS}</li>
										{assign var='name' value='Accounts'}
                                        {foreach from=$shortcutTopMenu.$name item=shortcut_item}
                                          {if $shortcut_item.URL == "-"}
                                            <hr style="margin-top: 2px; margin-bottom: 2px" />
                                          {else}
                                            <li><a id="{$shortcut_item.LABEL|replace:' ':''}{$tabGroupName}" href="{sugar_ajax_url url=$shortcut_item.URL}">{$shortcut_item.LABEL}</a></li>
                                          {/if}
                                        {/foreach}
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="megacolumn">
                                        <div class="megacolumn-content divider">
                                        {if $groupTabId}
                                        <ul id="lastViewedContainer{$tabGroupName}_{$name}" class="MMLastViewed">
                                            <li class="groupLabel">{$APP.LBL_LAST_VIEWED}</li>
                                            <li id="shortCutsLoading{$tabGroupName}_{$name}"><a href="#">&nbsp;</a></li>
                                        </ul>
                                        {else}
                                        <ul id="lastViewedContainer{$name}" class="MMLastViewed">
                                            <li class="groupLabel">{$APP.LBL_LAST_VIEWED}</li>
                                            <li id="shortCutsLoading{$tabGroupName}_{$name}"><a href="#">&nbsp;</a></li>
                                        </ul>
                                        {/if}
                                        </div>
                                    </div>
                                    <div class="megacolumn">
                                        <div class="megacolumn-content">
                                        <ul class="MMFavorites">
                                            <li class="groupLabel">{$APP.LBL_FAVORITES}</li>
                                            <li><a href="javascript: void(0);">&nbsp;</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            </ul>
        </li>
        <li class="{$homeClass}"><a href="index.php?module=Contacts&action=index" module="Contacts" class="sf-with-ul">Contacts</a>
        	<ul class="megamenu">
                            <li>
                                <div class="megawrapper">
                                    <div class="megacolumn">
                                        <div class="megacolumn-content divider">
                                        <ul class="MMShortcuts">
                                        <li class="groupLabel">{$APP.LBL_LINK_ACTIONS}</li>
										{assign var='name' value='Contacts'}
                                        {foreach from=$shortcutTopMenu.$name item=shortcut_item}
                                          {if $shortcut_item.URL == "-"}
                                            <hr style="margin-top: 2px; margin-bottom: 2px" />
                                          {else}
                                            <li><a id="{$shortcut_item.LABEL|replace:' ':''}{$tabGroupName}" href="{sugar_ajax_url url=$shortcut_item.URL}">{$shortcut_item.LABEL}</a></li>
                                          {/if}
                                        {/foreach}
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="megacolumn">
                                        <div class="megacolumn-content divider">
                                        {if $groupTabId}
                                        <ul id="lastViewedContainer{$tabGroupName}_{$name}" class="MMLastViewed">
                                            <li class="groupLabel">{$APP.LBL_LAST_VIEWED}</li>
                                            <li id="shortCutsLoading{$tabGroupName}_{$name}"><a href="#">&nbsp;</a></li>
                                        </ul>
                                        {else}
                                        <ul id="lastViewedContainer{$name}" class="MMLastViewed">
                                            <li class="groupLabel">{$APP.LBL_LAST_VIEWED}</li>
                                            <li id="shortCutsLoading{$tabGroupName}_{$name}"><a href="#">&nbsp;</a></li>
                                        </ul>
                                        {/if}
                                        </div>
                                    </div>
                                    <div class="megacolumn">
                                        <div class="megacolumn-content">
                                        <ul class="MMFavorites">
                                            <li class="groupLabel">{$APP.LBL_FAVORITES}</li>
                                            <li><a href="javascript: void(0);">&nbsp;</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            </ul>
        </li>
        <li class="{$homeClass}"><a href="index.php?module=av_Groups&action=index" module="av_Groups" class="sf-with-ul">Groups</a>
        	<ul class="megamenu">
                            <li>
                                <div class="megawrapper">
                                    <div class="megacolumn">
                                        <div class="megacolumn-content divider">
                                        <ul class="MMShortcuts">
                                        <li class="groupLabel">{$APP.LBL_LINK_ACTIONS}</li>
										{assign var='name' value='av_Groups'}
                                        {foreach from=$shortcutTopMenu.$name item=shortcut_item}
                                          {if $shortcut_item.URL == "-"}
                                            <hr style="margin-top: 2px; margin-bottom: 2px" />
                                          {else}
                                           <li><a id="{$shortcut_item.LABEL|replace:' ':''}{$tabGroupName}" href="{sugar_ajax_url url=$shortcut_item.URL}">{$shortcut_item.LABEL}</a></li>
                                          {/if}
                                        {/foreach}
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="megacolumn">
                                        <div class="megacolumn-content divider">
                                        {if $groupTabId}
                                        <ul id="lastViewedContainer{$tabGroupName}_{$name}" class="MMLastViewed">
                                            <li class="groupLabel">{$APP.LBL_LAST_VIEWED}</li>
                                            <li id="shortCutsLoading{$tabGroupName}_{$name}"><a href="#">&nbsp;</a></li>
                                        </ul>
                                        {else}
                                        <ul id="lastViewedContainer{$name}" class="MMLastViewed">
                                            <li class="groupLabel">{$APP.LBL_LAST_VIEWED}</li>
                                            <li id="shortCutsLoading{$tabGroupName}_{$name}"><a href="#">&nbsp;</a></li>
                                        </ul>
                                        {/if}
                                        </div>
                                    </div>
                                    <div class="megacolumn">
                                        <div class="megacolumn-content">
                                        <ul class="MMFavorites">
                                            <li class="groupLabel">{$APP.LBL_FAVORITES}</li>
                                            <li><a href="javascript: void(0);">&nbsp;</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            </ul>
        </li>
        <li class="{$homeClass}"><a href="index.php?module=Employees&action=index" module="Employees" class="sf-with-ul">Employees</a>
        	<ul class="megamenu">
                            <li>
                                <div class="megawrapper">
                                    <div class="megacolumn">
                                        <div class="megacolumn-content divider">
                                        <ul class="MMShortcuts">
                                        <li class="groupLabel">{$APP.LBL_LINK_ACTIONS}</li>
										{assign var='name' value='Employees'}
                                        {foreach from=$shortcutTopMenu.$name item=shortcut_item}
                                          {if $shortcut_item.URL == "-"}
                                            <hr style="margin-top: 2px; margin-bottom: 2px" />
                                          {else}
                                            <li><a id="{$shortcut_item.LABEL|replace:' ':''}{$tabGroupName}" href="{sugar_ajax_url url=$shortcut_item.URL}">{$shortcut_item.LABEL}</a></li>
                                          {/if}
                                        {/foreach}
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="megacolumn">
                                        <div class="megacolumn-content divider">
                                        {if $groupTabId}
                                        <ul id="lastViewedContainer{$tabGroupName}_{$name}" class="MMLastViewed">
                                            <li class="groupLabel">{$APP.LBL_LAST_VIEWED}</li>
                                            <li id="shortCutsLoading{$tabGroupName}_{$name}"><a href="#">&nbsp;</a></li>
                                        </ul>
                                        {else}
                                        <ul id="lastViewedContainer{$name}" class="MMLastViewed">
                                            <li class="groupLabel">{$APP.LBL_LAST_VIEWED}</li>
                                            <li id="shortCutsLoading{$tabGroupName}_{$name}"><a href="#">&nbsp;</a></li>
                                        </ul>
                                        {/if}
                                        </div>
                                    </div>
                                    <div class="megacolumn">
                                        <div class="megacolumn-content">
                                        <ul class="MMFavorites">
                                            <li class="groupLabel">{$APP.LBL_FAVORITES}</li>
                                            <li><a href="javascript: void(0);">&nbsp;</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            </ul>
        </li>

