		{php}
			$arr = $GLOBALS['app_list_strings']['category_dropdown_list'];
			if(isset($arr[''])){
				unset($arr['']);
			}
			$this->assign('reportCategories', $arr);
		{/php}
		<li class="{$homeClass}"><a href="index.php?module=Reports&action=index" module="Reports" class="sf-with-ul">Reports</a>
        	<ul class="megamenu">
				<li>
					<div class="megawrapper">
						<div class="megacolumn">
							<div class="megacolumn-content divider">
							<ul class="MMShortcuts">
							<li class="groupLabel">{$APP.LBL_LINK_ACTIONS}</li>
							<li class="">
									<a module="Reports" class="sf-with-ul" id="moduleTab_Reports{$shortcut_item}" href="index.php?module=Reports&action=index" tabindex="-1">View Reports</a>
							</li>
							{foreach from=$reportCategories key=shortcut_value item=shortcut_item}
								<li class="">
									<a module="Reports" class="sf-with-ul" id="moduleTab_Reports{$shortcut_item}" href="index.php?module=Reports&action=index&searchFormTab=advanced_search&query=true&&category[]={$shortcut_value}" tabindex="-1">{$shortcut_item}</a>
								</li>
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