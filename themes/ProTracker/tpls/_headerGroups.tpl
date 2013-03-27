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
									{if $shortcut_item.LABEL|replace:' ':'' == "ViewGroupReports"}
								   <li><a id="{$shortcut_item.LABEL|replace:' ':''}{$tabGroupName}" target="_blank" href="{sugar_ajax_url url=$shortcut_item.URL}">{$shortcut_item.LABEL}</a></li>
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
