<?PHP
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

/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/av_Group_Membership/av_Group_Membership_sugar.php');
class av_Group_Membership extends av_Group_Membership_sugar {
	function av_Group_Membership(){	
		parent::av_Group_Membership_sugar();
	}
	public function get_envelope($parent_id, $parent_type)
	{
		global $db;
		if(strtolower($parent_type)=='accounts')
			$sql = "SELECT client_salutation AS the_salutation FROM accounts WHERE deleted=0 AND id='{$parent_id}' LIMIT 1";
		else if(strtolower($parent_type)=='contacts')
			$sql = "SELECT report_salutation AS the_salutation FROM contacts WHERE deleted=0 AND id='{$parent_id}' LIMIT 1";
		$res = $db->query($sql);
		$res = $db->fetchByAssoc($res);
		return $res['the_salutation'];
		
	}
}
?>