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
			);
			
			
		    echo json_encode($mailing_address);
		}
	}
?>