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


class av_GroupsController extends SugarController
{
	function action_updateAccountsRelationshipFields(){
		global $db;
		$sql="UPDATE av_groups_accounts_c SET {$_REQUEST['field']}={$_REQUEST['value']} WHERE deleted=0 AND av_groups_accountsav_groups_ida='{$_REQUEST['group_id']}' AND av_groups_accountsaccounts_idb='{$_REQUEST['account_id']}'";
		$db->query($sql);
	}
	function action_updateContactsRelationshipFields()
	{
		global $db;
		$sql="UPDATE av_groups_contacts_c SET {$_REQUEST['field']}={$_REQUEST['value']} WHERE deleted=0 AND av_groups_contactsav_groups_ida='{$_REQUEST['group_id']}' AND av_groups_contactscontacts_idb='{$_REQUEST['contact_id']}'";
		$db->query($sql);
	}
	function action_delete_report(){
		global $db;
		$this->view='';
		$sql="Update av_groups_reports SET deleted=1 WHERE av_groups_id='{$_REQUEST['group_id']}'
			  AND reports_id= '{$_REQUEST['report_id']}'";
		$db->query($sql);
	}
	function action_delete_multi_group_members(){
		global $db;
		$this->view='';
		$record_to_delete_ids = explode(',', $_REQUEST['record_to_delete_ids']);
		$sql="Update av_group_membership SET deleted=1 WHERE parent_id IN('" . implode("','", $record_to_delete_ids) . "') AND parent_type='{$_REQUEST['subpanel_module']}'";
		$db->query($sql);
	}
}
?>