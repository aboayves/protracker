<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Users/views/view.edit.php');


class CustomUsersViewEdit extends UsersViewEdit {
    function display() {
        if(empty($this->bean->id) && (!isset($_REQUEST['force_create']) || empty($_REQUEST['force_create']))){
           echo "You are not authorize to create a new user. Please contact your administrator.";
        }else{
			parent::display();
		}
    }
}