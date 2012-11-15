<?php
	require_once("include/MVC/Controller/SugarController.php");
	
	class AccountsController extends SugarController{
		function action_printnetworth(){
			die('Here we will generate net worth statement for Client "' . $this->bean->name . '" till date "' . $_REQUEST['net_worth_date'] . '"');
		}
	}
?>