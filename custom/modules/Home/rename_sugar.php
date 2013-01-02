<?php
	global $db;
	$query = "SELECT user_preferences.id, user_preferences.contents FROM user_preferences";
	$db_result = $db->query($query);
	$is_updated = false;
	while ($db_row = $db->fetchByAssoc($db_result)){
		$pref_array = unserialize(base64_decode($db_row['contents']));
		$pref_array['subpanel_tabs'] = 'on';
		foreach ($pref_array['pages'] as $key => $page){
			if (isset($page['pageTitle']) && $page['pageTitle'] == "My Sugar"){
				$pref_array['pages'][$key]['pageTitle']="My Protracker";
			}
		}
		foreach ($pref_array['dashlets'] as $key => $page){
			if (isset($page['options']['title']) && $page['options']['title'] == "Sugar News"){
				$pref_array['dashlets'][$key]['options']['title']="ProTracker News";
			}
		}
		$id = $db_row['id'];
		$new_contents = base64_encode(serialize($pref_array));
		$sql = "UPDATE user_preferences SET contents='{$new_contents}' where id='{$id}'";
		if($db->query($sql)){
			$is_updated = true;
		}
	}
	if($is_updated){
		echo 'News, Page Titles and Subpanel Tabs are successfully updated.';
	}
?>