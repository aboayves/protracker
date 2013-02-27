<?php
/*********************************************************************************
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
 ********************************************************************************/


class av_AccountsController extends SugarController
{
	function action_configure_net_worth_dashlet(){
		global $current_user, $app_strings, $mod_strings;
		$this -> view ='';
		if(!empty($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$dashletDefs = $current_user->getPreference('dashlets','Home'); // load user's dashlets config	
			$dashletLocation = $dashletDefs[$id]['fileLocation'];
			require_once($dashletDefs[$id]['fileLocation']);

			$dashlet = new $dashletDefs[$id]['className']($id, (isset($dashletDefs[$id]['options']) ? $dashletDefs[$id]['options'] : array()));
			$dashletDefs[$id]['options']['selected_type'] = $_REQUEST['selected_type'];
			$dashletDefs[$id]['options']['selected_value'] = $_REQUEST['selected_value'];
			$current_user->setPreference('dashlets', $dashletDefs, 0, 'Home');
		}
		else {
			return '0';
		}
	}
}
?>