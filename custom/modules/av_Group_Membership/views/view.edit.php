<?php
require_once('include/MVC/View/views/view.edit.php');

class customav_Group_MembershipViewEdit extends ViewEdit {
	public function preDisplay(){
		$this->bean->name = "Membership Settings - ". $this->bean->name;
		parent::preDisplay();
	}
	

}
?>