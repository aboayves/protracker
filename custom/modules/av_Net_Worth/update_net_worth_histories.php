<?php
create_net_worth_history_snapshot();
function create_net_worth_history_snapshot() {
	global $db, $timedate;
	$sql="SELECT id FROM accounts WHERE accounts.deleted=0";
	$result = $db->query($sql);
	$now = $timedate->nowDB();
	$flag=false;
	while($row = $db->fetchByAssoc($result)){
		$sql = "
				SELECT SUM(if(av_accounts.is_aum<>0,av_accounts.value,0)) AS managed_assets, SUM(av_accounts.value) AS current_net_worth
				FROM av_accounts
				WHERE 
					av_accounts.deleted=0 
					AND 
					av_accounts.account_id='{$row['id']}'
				GROUP BY av_accounts.account_id
		";
		$client_assets = $db->query($sql);
		$client_assets = $db->fetchByAssoc($client_assets);// current assets of the related client
		$id=create_guid();
		$sql = "INSERT INTO av_net_worth (id, name, grand_total, managed_assets, net_worth_date, account_id)
				VALUES('{$id}', 'Net Worth History', '{$client_assets['current_net_worth']}', 
					  '{$client_assets['managed_assets']}', '{$now}', '{$row['id']}')";
		if($db->query($sql, true)){
			$flag =true;
		}else{
			break;
		}
	}
	if($flag){
		echo "Net Worth Histories have been updated.";
	}
}
?>