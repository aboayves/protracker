<?php
require_once('include/MVC/View/views/view.edit.php');

class av_WorkflowViewAssign extends ViewEdit {
	protected function _getModuleTitleParams($browserTitle = false){
		$arr = parent::_getModuleTitleParams($browserTitle);
		
		$arr[] = $this->bean->name;
		$arr[] = "Assign Workflow";
		
		return $arr;
	}
	
	public function preDisplay(){
		$metadataFile = "modules/av_Workflow/metadata/assignviewdefs.php";
		$this->ev = $this->getEditView();
		$this->ev->ss =& $this->ss;
		$this->ev->setup($this->module, $this->bean, $metadataFile, 'include/EditView/EditView.tpl');
	}
	
	public function display(){
		$this->ev->showVCRControl = false;
		
		//Removing tpl file created by editview
		if(file_exists("cache/modules/" . $this->bean->module_dir . "/EditView.tpl")){
			unlink("cache/modules/" . $this->bean->module_dir . "/EditView.tpl");
		}
		
		 echo 	'<link type="text/css" rel="stylesheet" href="include/javascript/yui/build/treeview/assets/skins/sam/treeview.css">'.
				'<link type="text/css" rel="stylesheet" href="include/javascript/yui/build/calendar/assets/skins/sam/calendar.css">'.
				'<link type="text/css" rel="stylesheet" href="modules/av_Workflow/treeCSS.css">'.
				
				'<script src="include/javascript/yui/build/yahoo-dom-event/yahoo-dom-event.js" ></script>'.
				'<script src="include/javascript/yui/build/animation/animation-min.js" type="text/javascript"></script>'.
				'<script src="include/javascript/yui/build/calendar/calendar-min.js" ></script>'.
				'<script src="include/javascript/yui/build/json/json-min.js" ></script>'.
				'<script src="include/javascript/yui/build/treeview/treeview-min.js" ></script>';
		
		parent::display();
		
		//removing tpl to show correct edit view
		if(file_exists("cache/modules/" . $this->bean->module_dir . "/EditView.tpl")){
			unlink("cache/modules/" . $this->bean->module_dir . "/EditView.tpl");
		}
	}
}
?>