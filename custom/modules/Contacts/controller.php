<?php
	require_once("include/MVC/Controller/SugarController.php");
	
	class ContactsController extends SugarController{
		function action_copy_primary_contact_address()
		{
			$this->view = NULL;
			$mailing_address=array(
			
				'primary_address_street' => $this->bean->primary_address_street,
				'primary_address_city' => $this->bean->primary_address_city,
				'primary_address_state' => $this->bean->primary_address_state,
				'primary_address_postalcode' => $this->bean->primary_address_postalcode,
				'primary_address_country' => $this->bean->primary_address_country,
				'work_address_street' => $this->bean->work_address_street,
				'work_address_city' => $this->bean->work_address_city,
				'work_address_state' => $this->bean->work_address_state,
				'work_address_postalcode' => $this->bean->work_address_postalcode,
				'work_address_country' => $this->bean->work_address_country,
				'phone_home' => $this->bean->phone_home,
				'email1' => $this->bean->email1,
				'phone_work' => $this->bean->phone_work,
				'phone_mobile' => $this->bean->phone_mobile,
				'preferred_communication' => $this->bean->preferred_communication,
				'preferred_calling_time' => $this->bean->preferred_calling_time,
				'phone_fax' => $this->bean->phone_fax,
				'preferred_document_submittal' => $this->bean->preferred_document_submittal,
				'preferred_meeting_time' => $this->bean->preferred_meeting_time,				
	
			);
			if(isset($_REQUEST['select_from_subpanel']) && $_REQUEST['select_from_subpanel']){
				$focus = new Account();
				$focus->retrieve($_REQUEST['account_id']);
				
				$focus->mailing_address_street = $mailing_address['primary_address_street'];
				$focus->mailing_address_city = $mailing_address['primary_address_city'];
				$focus->mailing_address_state = $mailing_address['primary_address_state'];
				$focus->mailing_address_postalcode = $mailing_address['primary_address_postalcode'];
				$focus->mailing_address_country = $mailing_address['primary_address_country'];
				
				$focus->billing_address_street = $mailing_address['work_address_street'];
				$focus->billing_address_city = $mailing_address['work_address_city'];
				$focus->billing_address_state = $mailing_address['work_address_state'];
				$focus->billing_address_postalcode = $mailing_address['work_address_postalcode'];
				$focus->billing_address_country = $mailing_address['work_address_country'];
				
				$focus->phone_home = $mailing_address['phone_home'];
				$focus->phone_work = $mailing_address['phone_work'];
				$focus->phone_mobile = $mailing_address['phone_mobile'];
				$focus->preferred_communication = $mailing_address['preferred_communication'];
				$focus->preferred_calling_time = $mailing_address['preferred_calling_time'];
				$focus->phone_fax = $mailing_address['phone_fax'];
				$focus->preferred_document_submittal = $mailing_address['preferred_document_submittal'];
				$focus->preferred_meeting_time = $mailing_address['preferred_meeting_time'];
				$focus->email1 = $mailing_address['email1'];
				
				$focus->save();
				global $db;
				$sql =" SELECT id 
				FROM email_addresses 
			    WHERE email_address='{$this->bean->email1}' AND deleted=0
				LIMIT 1";
				$result = $db->query($sql);
				$row = $db->fetchByAssoc($result);
				$sql ="UPDATE email_addr_bean_rel 
					   SET deleted=1
					   WHERE bean_id='{$_REQUEST['account_id']}'
							      AND bean_module='Accounts'
								  AND primary_address='1'
							   	  AND deleted='0'";
				$db->query($sql);
				$email_addr_bean_rel_id = create_guid();
				$sql = "INSERT INTO email_addr_bean_rel(id, email_address_id, bean_id, bean_module, primary_address) 
						VALUES ('{$email_addr_bean_rel_id}', '{$row['id']}', '{$_REQUEST['account_id']}', 'Accounts', '1')";
				$db->query($sql, true);
				ob_clean();
			}else{
				echo json_encode($mailing_address);
			}
		}
	}
?>