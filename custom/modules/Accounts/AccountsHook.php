<?php

class AccountsHook
{
	function sync_communicaton_tab($bean, $event, $arguments) {
		if (
			$bean->fetched_row['phone_office'] != $bean->phone_office ||
			$bean->fetched_row['phone_fax'] != $bean->phone_fax ||
			$bean->fetched_row['preferred_communication'] != $bean->preferred_communication ||
			$bean->fetched_row['preferred_calling_time'] != $bean->preferred_calling_time ||
			$bean->fetched_row['preferred_meeting_time'] != $bean->preferred_meeting_time ||
			$bean->fetched_row['preferred_document_submittal'] != $bean->preferred_document_submittal
		   )
		{
			$focus = new Contact();
			$focus->retrieve($bean->primary_contact_id);
			$focus->phone_work = $bean->phone_office;
			$focus->phone_fax = $bean->phone_fax;
			$focus->preferred_communication = $bean->preferred_communication;
			$focus->preferred_calling_time = $bean->preferred_calling_time;
			$focus->preferred_meeting_time = $bean->preferred_meeting_time;
			$focus->preferred_document_submittal = $bean->preferred_document_submittal;
			$focus->save();
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
		$email_addr_bean_rel_id = create_guid();
		$sql = "INSERT INTO email_addr_bean_rel(id, email_address_id, bean_id, bean_module, primary_address) 
				VALUES ('{$email_addr_bean_rel_id}', '{$email_address_id}', '{$bean->primary_contact_id}', 'Contacts', '1')";
		$db->query($sql, true);
	}
	
	function delete_multiple_record($bean, $event, $arguments) {
			$bean->delete_multiple_check = "<input id='delete_multiple_check' name='delete_multiple_check' value='{$bean->id}' type='checkbox' class='checkbox'>";
	}
}



?>