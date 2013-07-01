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
require_once('modules/av_Account_Histories/av_Account_Histories_sugar.php');
class av_Account_Histories extends av_Account_Histories_sugar {
	
	function av_Account_Histories(){	
		parent::av_Account_Histories_sugar();
	}
	//Filling empty relate field in listview.
	function fill_in_additional_list_fields()
	{
		parent::fill_in_additional_list_fields();
		if(isset($this->av_accounts_id) && !empty($this->av_accounts_id)){
			$av_accounts_bean = BeanFactory::getBean("av_Accounts", $this->av_accounts_id);
			if(isset($av_accounts_bean->account_id) && !empty($av_accounts_bean->account_id)){
				$this->account_id = $av_accounts_bean->account_id;
				$account_bean = BeanFactory::getBean("Accounts", $this->account_id);
				$this->account_name = $account_bean->name;
			}
		}
	}
	//Making Client(non-db relate field) sortable.
	function create_new_list_query($order_by, $where,$filter=array(),$params=array(), $show_deleted = 0,$join_type='', $return_array = false,$parentbean=null, $singleSelect = false, $ifListForExport = false)
	{
		$return_array = parent::create_new_list_query($order_by, $where,$filter,$params, $show_deleted,$join_type, $return_array,$parentbean, $singleSelect, $ifListForExport);
		if($order_by == 'account_name ASC' || $order_by == 'account_name DESC'){
			$return_array['select'] = $return_array['select'].", accounts.name as account_name";
			$return_array['from'] = $return_array['from']. " LEFT JOIN av_accounts ON(av_account_histories.av_accounts_id = av_accounts.id) LEFT JOIN accounts ON(av_accounts.account_id = accounts.id)";
			$return_array['order_by'] = " ORDER BY ".$order_by;
		}
		return $return_array;
	}

	
}
?>