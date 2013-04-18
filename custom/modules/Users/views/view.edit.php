<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Users/views/view.edit.php');


class CustomUsersViewEdit extends UsersViewEdit {
    function display() {
		if((empty($this->bean->id) || $this->ev->isDuplicate) && (!isset($_REQUEST['force_create']) || empty($_REQUEST['force_create']))){
           echo "You are not authorized to perform this action. Please contact your Administrator if you wish to add users.";
        }else{
			parent::display();
		}
    }
}