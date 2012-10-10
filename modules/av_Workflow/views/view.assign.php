<?php
require_once('include/MVC/View/views/view.edit.php');

class av_WorkflowViewAssign extends ViewEdit {
	public function preDisplay(){
		$metadataFile = "modules/av_Workflow/metadata/assignviewdefs.php";
		$this->ev = $this->getEditView();
		$this->ev->ss =& $this->ss;
		$this->ev->setup($this->module, $this->bean, $metadataFile, 'include/EditView/EditView.tpl');
	}
	
	public function display(){
		//Removing tpl file created by editview
		if(file_exists("cache/modules/" . $this->bean->module_dir . "/EditView.tpl")){
			unlink("cache/modules/" . $this->bean->module_dir . "/EditView.tpl");
		}
		
		parent::display();
		
		//removing tpl to show correct edit view
		if(file_exists("cache/modules/" . $this->bean->module_dir . "/EditView.tpl")){
			unlink("cache/modules/" . $this->bean->module_dir . "/EditView.tpl");
		}
	}
}
?>