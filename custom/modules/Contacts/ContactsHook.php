<?php
class ContactsHook
{

	function sync_communicaton_tab($bean, $event, $arguments) {
		 	if (
				$bean->fetched_row['phone_work'] != $bean->phone_work ||
				$bean->fetched_row['phone_fax'] != $bean->phone_fax ||
				$bean->fetched_row['preferred_communication'] != $bean->preferred_communication ||
				$bean->fetched_row['preferred_calling_time'] != $bean->preferred_calling_time ||
				$bean->fetched_row['preferred_meeting_time'] != $bean->preferred_meeting_time ||
				$bean->fetched_row['preferred_document_submittal'] != $bean->preferred_document_submittal
			   )
			{	
				global $db;
				$sql="UPDATE accounts
					  LEFT JOIN accounts_contacts
					  ON(accounts_contacts.contact_type='Primary'
						 AND accounts_contacts.deleted=0
						 AND accounts_contacts.contact_id='{$bean->id}'
						 AND accounts_contacts.account_id=accounts.id
						 )
					  SET phone_office='{$bean->phone_work}', phone_fax='{$bean->phone_fax}',
						  preferred_communication='{$bean->preferred_communication}',
						  preferred_calling_time='{$bean->preferred_calling_time}',
						  preferred_meeting_time='{$bean->preferred_meeting_time}',
						  preferred_document_submittal='{$bean->preferred_document_submittal}'
					  WHERE accounts.deleted=0";
				$db->query($sql, true);
			}
			   
	}
	function sync_email_address($bean, $event, $arguments) {
		global $db;
		$sql =" SELECT id 
				FROM email_addresses 
			    WHERE email_address='{$bean->email1}' AND deleted=0
				LIMIT 1";
		$result = $db->query($sql);
		$row = $db->fetchByAssoc($result);
		if(!isset($row['id']) || empty($row['id']))
		{
			$email_address_id = create_guid();
			$email_capt = strtoupper($bean->email1);
			$sql = "INSERT INTO email_addresses(id, email_address, email_address_caps) 
					VALUES ('{$email_address_id}', '{$bean->email1}', '{$email_capt}')";
			$db->query($sql, true);
		}
		else
			$email_address_id = $row['id'];
		$sql="SELECT accounts_contacts. account_id
			  FROM accounts_contacts
			  WHERE accounts_contacts.contact_type='Primary'
				    AND accounts_contacts.deleted=0
				    AND accounts_contacts.contact_id='{$bean->id}'";
		$result = $db->query($sql);
		while($row = $db->fetchByAssoc($result)){
			$email_addr_bean_rel_id = create_guid();
			$sql = "INSERT INTO email_addr_bean_rel(id, email_address_id, bean_id, bean_module, primary_address) 
					VALUES ('{$email_addr_bean_rel_id}', '{$email_address_id}', '{$row['account_id']}', 'Accounts', '1')";
			$db->query($sql, true);
		}
		
	}
	function delete_multiple_record($bean, $event, $arguments) {
		$bean->delete_multiple_check = "<input id='delete_multiple_check' name='delete_multiple_check' value='{$bean->id}' type='checkbox' class='checkbox'>";
	}
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