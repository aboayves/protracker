<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('custom/include/MVC/View/views/view.detail.php');
class av_WorkflowViewDetail extends CustomViewDetail {
	public function display() {
        echo 	'<link type="text/css" rel="stylesheet" href="include/javascript/yui/build/treeview/assets/skins/sam/treeview.css">'.
				'<link type="text/css" rel="stylesheet" href="include/javascript/yui/build/calendar/assets/skins/sam/calendar.css">'.
				'<link type="text/css" rel="stylesheet" href="modules/av_Workflow/treeCSS.css">'.
				
				'<script src="include/javascript/yui/build/yahoo-dom-event/yahoo-dom-event.js" ></script>'.
				'<script src="include/javascript/yui/build/animation/animation-min.js" type="text/javascript"></script>'.
				'<script src="include/javascript/yui/build/calendar/calendar-min.js" ></script>'.
				'<script src="include/javascript/yui/build/json/json-min.js" ></script>'.
				'<script src="modules/av_Workflow/treeview-min.js" ></script>';

        parent::display();
    }

}