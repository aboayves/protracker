<?php
function getManagedAssets($account_id){
	global $db;
	$sql = "
			SELECT SUM(av_accounts.value) as managed_assets
			FROM av_accounts
			WHERE 
				av_accounts.deleted=0 
				AND 
				av_accounts.accounts_id='{$account_id}'
				AND
				av_accounts.managed = 'Yes'
	";
	$result = $db->query($sql);
	$result = $db->fetchByAssoc($result);
	return $result['managed_assets'];
}
function getCurrentNetWorth($account_id){
	global $db;
	$sql = "
			SELECT SUM(av_accounts.value) as current_networth
			FROM av_accounts
			WHERE 
				av_accounts.deleted=0 
				AND 
				av_accounts.accounts_id='{$account_id}'
	";
	$result = $db->query($sql);
	$result = $db->fetchByAssoc($result);
	return $result['current_networth'];
}
?>