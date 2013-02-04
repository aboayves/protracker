<?php
require_once('include/MVC/View/views/view.edit.php');

class customav_Group_MembershipViewEdit extends ViewEdit {
	public function preDisplay(){
		$this->bean->name = "Mebership Setting - ". $this->bean->name;
		parent::preDisplay();
	}
	

}
?>