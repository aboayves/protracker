<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

/* * *******************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 * ****************************************************************************** */

class TasksViewDetail extends ViewDetail {

    /**
     * @see SugarView::display()
     */
    public function display() {
        if(isset($_GET['error_message']) && $_GET['error_message']=='show_error'){
            echo "<script type='text/javascript'>
					ajaxStatus.flashStatus('You Are Not Authorize to Edit this Record',10000);
				  </script>
				";
        }
        echo '<link type="text/css" rel="stylesheet" href="include/javascript/yui/build/treeview/assets/skins/sam/treeview.css">
                <!-- Optional CSS for for date editing with Calendar-->
                <link type="text/css" rel="stylesheet" href="include/javascript/yui/build/calendar/assets/skins/sam/calendar.css">
				 <link type="text/css" rel="stylesheet" href="custom/modules/Tasks/treeCSS.css">

                <!-- Dependency source file --> 
                <script src="include/javascript/yui/build/yahoo-dom-event/yahoo-dom-event.js" ></script>
                <!-- Optional dependency source file --> 
                <script src="include/javascript/yui/build/animation/animation-min.js" type="text/javascript"></script>
                <!-- Optional dependency source file for date editing with Calendar--> 
                <script src="include/javascript/yui/build/calendar/calendar-min.js" ></script>
                <!-- Optional dependency source file to decode contents of yuiConfig markup attribute--> 
                <script src="include/javascript/yui/build/json/json-min.js" ></script>

                <!-- TreeView source file --> 
                <script src="include/javascript/yui/build/treeview/treeview-min.js" ></script>';
			//getting the tree structure
			$_REQUEST['id'] = $this->bean->id;
			$_REQUEST['name'] = $this->bean->name;
			$_REQUEST['included']=true;
			@require_once('custom/modules/Tasks/getTreeNodes.php');

        parent::display();
    }

}