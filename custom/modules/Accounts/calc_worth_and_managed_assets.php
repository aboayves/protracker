<?php
require_once('modules/Currencies/Currency.php');

function getManagedAssets($account_id){
	global $db, $sugar_config;
	$sql = "
			SELECT SUM(av_accounts.value) as managed_assets
			FROM av_accounts
			WHERE 
				av_accounts.deleted=0 
				AND 
				av_accounts.accounts_id='{$account_id}'
				AND
				av_accounts.managed_c = 'Yes'
	";
	$result = $db->query($sql);
	$result = $db->fetchByAssoc($result);
	return $sugar_config['default_currency_symbol'].' '.format_number($result['managed_assets'], NULL, 0);//$result['managed_assets'];
}
function getCurrentNetWorth($account_id){
	global $db, $sugar_config;
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
	return $sugar_config['default_currency_symbol'].' '. format_number($result['current_networth'], NULL, 0); //$result['current_networth']
}
?>