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
require_once('custom/include/MVC/View/views/view.edit.php');
class TasksViewEdit extends CustomViewEdit {

    /**
     * @see SugarView::preDisplay()
     */
    public function preDisplay() {
        if ($_REQUEST['module'] != 'Tasks' && isset($_REQUEST['status']) && empty($_REQUEST['status'])) {
            $this->bean->status = '';
        } //if
        if (!empty($_REQUEST['status']) && ($_REQUEST['status'] == 'Completed')) {
            $this->bean->status = 'Completed';
        }
        parent::preDisplay();
    }

    /**
     * @see SugarView::display()
     */
    public function display() {
        if ($this->ev->isDuplicate) {
            $this->bean->status = $this->bean->getDefaultStatus();
        } //if
        global $current_user;
		$bean = BeanFactory::getBean($this->bean->workflow_parent_type, $this->bean->workflow_parent_id);
		$this->bean->workflow_related_to = $bean->name;
		
		$workFlow_related_to_options = array(
			"Accounts"=>"Client",
			"Contacts"=>"Contact",
			"av_Groups"=>"Group",
		);
		$this->ss->assign("workFlow_related_to_options", $workFlow_related_to_options);
        $isAdmin = is_admin($current_user);
        if ($this->bean->private == '1') {
            if ($this->bean->assigned_user_id == $current_user->id || $isAdmin == true || $this->bean->created_by == $current_user->id) {
                parent::display();
            } else {
                SugarApplication::redirect("index.php?action=DetailView&module={$_REQUEST['module']}&record={$this->bean->id}&error_message=show_error");
            }
        } else {
            parent::display();
        }
    }

}
