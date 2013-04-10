<?php
function getManagedAssets($account_id)
{
	global $db;
	$sql = "
		SELECT SUM(av_accounts.value) as managed_assets
		FROM `accounts_av_accounts_c`
		LEFT JOIN av_accounts
			ON
			(
				av_accounts.deleted=0
				AND
				av_accounts.id = accounts_av_accounts_c.accounts_av_accountsav_accounts_idb
			)
		RIGHT JOIN av_accounts_cstm
			ON
			(
				av_accounts_cstm.id_c = av_accounts.id
				AND
				av_accounts_cstm.managed_c = 'Yes'
			)
		WHERE 
			accounts_av_accounts_c.deleted=0 
			AND 
			accounts_av_accounts_c.accounts_av_accountsaccounts_ida='{$account_id}'
			AND
			av_accounts_cstm.managed_c = 'Yes'
		GROUP BY accounts_av_accounts_c.accounts_av_accountsaccounts_ida
	";
	$result = $db->query($sql);
	$result = $db->fetchByAssoc($result);
	return $result['managed_assets'];
}

?>