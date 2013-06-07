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
				$bean->fetched_row['preferred_document_submittal'] != $bean->preferred_document_submittal ||
				$bean->fetched_row['phone_home'] != $bean->phone_home ||
				$bean->fetched_row['phone_mobile'] != $bean->phone_mobile ||
				$bean->fetched_row['primary_address_street'] != $bean->primary_address_street ||
				$bean->fetched_row['primary_address_city'] != $bean->primary_address_city ||
				$bean->fetched_row['primary_address_state'] != $bean->primary_address_state ||
				$bean->fetched_row['primary_address_postalcode'] != $bean->primary_address_postalcode ||
				$bean->fetched_row['primary_address_country'] != $bean->primary_address_country ||
				$bean->fetched_row['work_address_street'] != $bean->work_address_street ||
				$bean->fetched_row['work_address_city'] != $bean->work_address_city ||
				$bean->fetched_row['work_address_state'] != $bean->work_address_state ||
				$bean->fetched_row['work_address_postalcode'] != $bean->work_address_postalcode ||
				$bean->fetched_row['work_address_country'] != $bean->work_address_country
			   )
			{	
				global $db;
				$sql="UPDATE accounts
					  RIGHT JOIN accounts_contacts
					  ON(accounts_contacts.contact_type='Primary'
						 AND accounts_contacts.deleted=0
						 AND accounts_contacts.contact_id='{$bean->id}'
						 AND accounts_contacts.account_id=accounts.id
						 )
					  SET 
						  phone_fax='{$bean->phone_fax}',
						  phone_home='{$bean->phone_home}',
						  phone_work='{$bean->phone_work}', 
						  phone_mobile='{$bean->phone_mobile}',
						  mailing_address_street='{$bean->primary_address_street}',
						  mailing_address_city='{$bean->primary_address_city}',
						  mailing_address_state='{$bean->primary_address_state}', 
						  mailing_address_postalcode='{$bean->primary_address_postalcode}', 
						  mailing_address_country='{$bean->primary_address_country}',
						  billing_address_street='{$bean->work_address_street}',
						  billing_address_city='{$bean->work_address_city}',
						  billing_address_state='{$bean->work_address_state}', 
						  billing_address_postalcode='{$bean->work_address_postalcode}', 
						  billing_address_country='{$bean->work_address_country}',
						  preferred_communication='{$bean->preferred_communication}',
						  preferred_calling_time='{$bean->preferred_calling_time}',
						  preferred_meeting_time='{$bean->preferred_meeting_time}',
						  preferred_document_submittal='{$bean->preferred_document_submittal}'
					  WHERE accounts.deleted=0 AND
							accounts_contacts.contact_type='Primary' AND
							accounts_contacts.contact_id='{$bean->id}'";
				$db->query($sql, true);
			}
			//updating office field from Assigned User.
			if(!isset($bean->fetched_row['id']) && empty($bean->fetched_row['id']) && empty($bean->office_id)){
				$user_bean = BeanFactory::getBean("Users", $bean->assigned_user_id);
				$bean->office_id = $user_bean->office_id;
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
			$sql ="UPDATE email_addr_bean_rel 
				   SET deleted=1
				   WHERE bean_id='{$row['account_id']}'
						 AND bean_module='Accounts'
						 AND primary_address='1'
						 AND deleted='0'";
			$db->query($sql);
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