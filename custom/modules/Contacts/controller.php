<?php
	require_once("include/MVC/Controller/SugarController.php");
	
	class ContactsController extends SugarController{
		function action_copy_primary_contact_address()
		{
			$this->view = NULL;
		    echo json_encode($this->bean->email1);
		}
	}
?>