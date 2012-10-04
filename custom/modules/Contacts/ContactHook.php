<?php
	class ContactHook{
		//Function for all before save logics
		function beforeSave(&$bean, $event, $arguments) {
			global $db;
			
			//Removing primary secandry from all other related records if changed
			$bean->contact_priority = trim($bean->contact_priority);
			if($bean->fetched_row['contact_priority'] != $bean->contact_priority && !empty($bean->contact_priority)){
				//for old relationship
				$sql = "UPDATE contacts SET contact_priority='' WHERE contact_priority = '" . $bean->contact_priority . "' AND id IN (".
							"SELECT contact_id ".
							"FROM accounts_contacts ".
							"WHERE account_id='" . $bean->account_id . "'".
						")";
				$db->query($sql);
				
				//for new relationship
				$sql = "UPDATE contacts SET contact_priority='' WHERE contact_priority = '" . $bean->contact_priority . "' AND id IN (".
							"SELECT accounts_contacts_1contacts_idb ".
							"FROM accounts_contacts_1_c ".
							"WHERE accounts_contacts_1accounts_ida='" . $bean->account_id . "'".
						")";
				$db->query($sql);
			}
		}
	}
?>