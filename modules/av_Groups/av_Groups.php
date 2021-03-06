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
require_once('modules/av_Groups/av_Groups_sugar.php');
class av_Groups extends av_Groups_sugar {
	
	function av_Groups(){	
		parent::av_Groups_sugar();
	}
	function get_reports_subpanel_query(){
	    $sql="SELECT saved_reports.id, saved_reports.name, saved_reports.module, saved_reports.report_type, saved_reports.assigned_user_id, 'av_groups_reports'panel_name
			  FROM saved_reports
			  INNER JOIN av_groups_reports ON saved_reports.id = av_groups_reports.reports_id
			  AND av_groups_reports.deleted =0
			  INNER JOIN av_groups ON av_groups.id = av_groups_reports.av_groups_id
			  AND av_groups_reports.deleted =0
			  WHERE av_groups_reports.av_groups_id = '{$this->id}'
			  AND saved_reports.deleted =0";
		return $sql;
	}
}
?>