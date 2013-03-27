		<li class="{$homeClass}"><a href="index.php?module=Meetings&action=index" module="Meetings" class="sf-with-ul">Meetings</a>
        	<ul class="megamenu">
				<li>
					<div class="megawrapper">
						<div class="megacolumn">
							<div class="megacolumn-content divider">
							<ul class="MMShortcuts">
							<li class="groupLabel">{$APP.LBL_LINK_ACTIONS}</li>
							{assign var='name' value='Meetings'}
							{foreach from=$shortcutTopMenu.$name item=shortcut_item}
							  {if $shortcut_item.URL == "-"}
								<hr style="margin-top: 2px; margin-bottom: 2px" />
							  {else}
							    {if $shortcut_item.LABEL|replace:' ':'' == "ViewCallReports"}
								<li><a id="{$shortcut_item.LABEL|replace:' ':''}{$tabGroupName}" onclick="window.open('{sugar_ajax_url url=$shortcut_item.URL}', '{$shortcut_item.LABEL|replace:' ':''}','height=' + screen.height/2 + ',width=' + screen.width/2 + ',resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes,location=yes');">{$shortcut_item.LABEL}</a></li>
								{else}
								<li><a id="{$shortcut_item.LABEL|replace:' ':''}{$tabGroupName}" href="{sugar_ajax_url url=$shortcut_item.URL}">{$shortcut_item.LABEL}</a></li>
								 {/if}
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