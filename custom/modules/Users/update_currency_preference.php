<?php
	//Run this script to set Currency Significant Digits zero
	global $db;
	$query = "SELECT user_preferences.id, user_preferences.contents FROM user_preferences";
	$db_result = $db->query($query);
	$is_updated = false;
	while ($db_row = $db->fetchByAssoc($db_result)){
		$pref_array = unserialize(base64_decode($db_row['contents']));
		$pref_array['default_currency_significant_digits'] = '0';

		$new_contents = base64_encode(serialize($pref_array));
		$sql = "UPDATE user_preferences SET contents='{$new_contents}' where id='{$db_row['id']}'";
		if($db->query($sql)){
			$is_updated = true;
		}
	}
	if($is_updated){
		echo 'Currency Preference are updated';
	}
?>