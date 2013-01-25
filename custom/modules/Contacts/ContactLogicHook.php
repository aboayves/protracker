<?php
/**
* contacts logic hook
*/
class ContactLogicHook {
		
		/**
		* set as primary contact id when account has one account means adding first time
		*/
		function relatioshipAdd($bean, $event, $arguments) {
			global $db;
			$sql = "SELECT COUNT(id) as count  FROM accounts_contacts WHERE ".
					" deleted = 0 AND account_id = '{$bean->account_id}'";
		
			$res = $db->query($sql);
			$row = $db->fetchByAssoc($res);
			if($row['count'] == 1){
				$db->query("UPDATE accounts_contacts SET contact_type = 'Primary' WHERE contact_id ='{$bean->id}'  AND account_id = '{$bean->account_id}' ");
			}
		}
}

?>