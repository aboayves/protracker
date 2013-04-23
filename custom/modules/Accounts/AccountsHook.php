<?php

class AccountsHook
{
	function sync_communicaton_tab($bean, $event, $arguments) {
		if (
			isset($bean->primary_contact_id) && !empty($bean->primary_contact_id) &&
			($bean->fetched_row['phone_work'] != $bean->phone_work ||
			$bean->fetched_row['phone_home'] != $bean->phone_home ||
			$bean->fetched_row['phone_mobile'] != $bean->phone_mobile ||
			$bean->fetched_row['phone_fax'] != $bean->phone_fax ||
			$bean->fetched_row['preferred_communication'] != $bean->preferred_communication ||
			$bean->fetched_row['preferred_calling_time'] != $bean->preferred_calling_time ||
			$bean->fetched_row['preferred_meeting_time'] != $bean->preferred_meeting_time ||
			$bean->fetched_row['preferred_document_submittal'] != $bean->preferred_document_submittal ||
			$bean->fetched_row['mailing_address_street'] != $bean->mailing_address_street ||
			$bean->fetched_row['mailing_address_city'] != $bean->mailing_address_city ||
			$bean->fetched_row['mailing_address_state'] != $bean->mailing_address_state ||
			$bean->fetched_row['mailing_address_postalcode'] != $bean->mailing_address_postalcode ||
			$bean->fetched_row['mailing_address_country'] != $bean->mailing_address_country ||
			$bean->fetched_row['billing_address_street'] != $bean->billing_address_street ||
			$bean->fetched_row['billing_address_city'] != $bean->billing_address_city ||
			$bean->fetched_row['billing_address_state'] != $bean->billing_address_state ||
			$bean->fetched_row['billing_address_postalcode'] != $bean->billing_address_postalcode ||
			$bean->fetched_row['billing_address_country'] != $bean->billing_address_country
		   )
		  )
		{
			global $db;
			$sql="UPDATE contacts
				  SET 
					  phone_fax='{$bean->phone_fax}',
					  phone_home='{$bean->phone_home}',
					  phone_work='{$bean->phone_work}', 
					  phone_mobile='{$bean->phone_mobile}',
					  primary_address_street='{$bean->mailing_address_street}',
					  primary_address_city='{$bean->mailing_address_city}',
					  primary_address_state='{$bean->mailing_address_state}', 
					  primary_address_postalcode='{$bean->mailing_address_postalcode}', 
					  primary_address_country='{$bean->mailing_address_country}',
					  work_address_street='{$bean->billing_address_street}',
					  work_address_city='{$bean->billing_address_city}',
					  work_address_state='{$bean->billing_address_state}', 
					  work_address_postalcode='{$bean->billing_address_postalcode}', 
					  work_address_country='{$bean->billing_address_country}',
					  preferred_communication='{$bean->preferred_communication}',
					  preferred_calling_time='{$bean->preferred_calling_time}',
					  preferred_meeting_time='{$bean->preferred_meeting_time}',
					  preferred_document_submittal='{$bean->preferred_document_submittal}'
				  WHERE contacts.deleted=0 AND contacts.id='{$bean->primary_contact_id}'";
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
		$email_addr_bean_rel_id = create_guid();
		$sql ="UPDATE email_addr_bean_rel 
			   SET deleted=1
			   WHERE bean_id='{$bean->primary_contact_id}'
					 AND bean_module='Contacts'
					 AND primary_address='1'
					 AND deleted='0'";
		$db->query($sql);
		$sql = "INSERT INTO email_addr_bean_rel(id, email_address_id, bean_id, bean_module, primary_address) 
				VALUES ('{$email_addr_bean_rel_id}', '{$email_address_id}', '{$bean->primary_contact_id}', 'Contacts', '1')";
		$db->query($sql, true);
	}
	
	function delete_multiple_record($bean, $event, $arguments) {
			$bean->delete_multiple_check = "<input id='delete_multiple_check' name='delete_multiple_check' value='{$bean->id}' type='checkbox' class='checkbox'>";
	}
	function setFirstContactToPrimary($bean, $event, $arguments){
		if(isset($arguments['related_module']) && $arguments['related_module'] =='Contacts'){
			global $db;
			$sql = "SELECT count(*) as pk_contact_count from accounts_contacts where account_id='{$bean->id}' AND contact_type='primary' AND deleted=0";
			$result = $db->query($sql);
			$row = $db->fetchByAssoc($result);
			if($row['pk_contact_count'] == '0'){
				$sql="UPDATE accounts_contacts
					  SET contact_type='primary'
					  WHERE contact_id='{$arguments['related_id']}' AND
							account_id='{$bean->id}' AND
							deleted=0";
				$db->query($sql);
			}
		}
	}
}



?>