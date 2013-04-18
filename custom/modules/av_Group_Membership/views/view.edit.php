<?php
require_once('custom/include/MVC/View/views/view.edit.php');

class customav_Group_MembershipViewEdit extends CustomViewEdit {
	public function preDisplay(){
		$this->bean->name = "Membership Settings - ". $this->bean->name;
		parent::preDisplay();
	}
	

}
?>