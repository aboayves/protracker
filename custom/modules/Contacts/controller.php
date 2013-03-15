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
		    echo json_encode($mailing_address);
		}
	}
?>