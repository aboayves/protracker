<?php
 
if(!defined('sugarEntry') ||!sugarEntry) die('Not A Valid Entry Point');
 
require_once('include/Dashlets/DashletGenericChart.php');
require_once('include/Sugar_Smarty.php');
require_once('custom/modules/Accounts/lib/currencyHelper.php'); 
 
class clientNetWorthHistoryDashlet extends DashletGenericChart{
    public $graph_for;
    function clientNetWorthHistoryDashlet($id, $def) {
		global $current_user;
        $this->loadLanguage('clientNetWorthHistoryDashlet', 'modules/av_Accounts/Dashlets/'); 
        parent::Dashlet($id); 
		if(!$current_user->is_admin){
			$this->isConfigurable = false; // dashlet is configurable?
		}
        $this->hasScript = false; // dashlet has javascript attached to it?
		$this->seedBean = new av_Net_Worth();
        // if no custom title, use default
        if(empty($def['title'])) $this->title = $this->dashletStrings['LBL_TITLE'];
        else $this->title = $def['title'];
    }

    //Displays the dashlet
    function display() {
		global $current_user, $db;
        $ss = new Sugar_Smarty();
		 
		$sql = $this->constructQuery();
		$sql_result = $db->query($sql);
		$graph_data_db = array();
		$min = 0;
		$max = 0;
		$year = 0;
		$first_iteration = true;
		while($graph_data_row = $db->fetchByAssoc($sql_result))	{
			$graph_data_db[$graph_data_row['month']] = array('month'=>$graph_data_row['month'], 'worth'=>$graph_data_row['worth'],'managed_assets'=>$graph_data_row['managed_assets']);
			$max = ($graph_data_row['worth']>=$max) ? $graph_data_row['worth'] : $max;
			$max = ($graph_data_row['managed_assets']>=$max) ? $graph_data_row['managed_assets'] : $max;
			$min = ($graph_data_row['managed_assets']<$min) ? $graph_data_row['managed_assets'] : $min;
			$min = ($graph_data_row['worth']<$min) ? $graph_data_row['worth'] : $min;
		}
		$graph_data =array();
		$i = array_shift(array_keys($graph_data_db))-5;
		if($i <=0){
			$i += 12;
		}
		$graph_data[0]['month'] = $this->monthName($i); 
		$graph_data[0]['worth'] = 0;
		$graph_data[0]['managed_assets'] = 0;
		foreach($graph_data_db as $data){
			if($data['month'] == $i){
				$graph_data[0]['month'] = $this->monthName($i); 
				$graph_data[0]['worth'] = $graph_data_db[$i]['worth'];;
				$graph_data[0]['managed_assets'] = $graph_data_db[$i]['managed_assets']; 
			}
		}
		for($j=1; $j<=5; $j++){
			if(($i+$j)>12){
				$i = 1-$j;
			}
			if(isset($graph_data_db[$i+$j])){
				$graph_data[$j]['month'] = $this->monthName($i+$j); 
				$graph_data[$j]['worth'] = $graph_data_db[$i+$j]['worth'];
				$graph_data[$j]['managed_assets'] = $graph_data_db[$i+$j]['managed_assets']; 
			}else{
				$graph_data[$j]['month'] = $this->monthName($i+$j); 
				$graph_data[$j]['worth'] = $graph_data[$j-1]['worth'];
				$graph_data[$j]['managed_assets'] = $graph_data[$j-1]['managed_assets']; 
			}
		}
		$interval = round(($max - $min)/4);
		if($interval >= 10000)
		{
			$min = round($min / 10000) * 10000;
			$interval = round($interval / 10000) * 10000;		
		}
		else if($interval >= 5000)
		{
			$min = round($min / 5000) * 5000;
			$interval = round($interval / 5000) * 5000;					
		}

        $ss->assign('data', json_encode($graph_data));
		$ss->assign('min', $min);
		$ss->assign('max', $max);
		$ss->assign('interval', $interval);
		$ss->assign('graphFor', $this->graph_for);
        $str = $ss->fetch('modules/av_Accounts/Dashlets/clientNetWorthHistoryDashlet/clientNetWorthHistoryDashlet.tpl');

	    return parent::display().$str; // return parent::display for title and such
    }
	 //overrided
	public function displayOptions() {
		global $current_user, $db;
        $ss = new Sugar_Smarty();
        $ss->assign('titleLBL', translate('LBL_DASHLET_OPT_TITLE', 'Home'));
        $ss->assign('title', $this->title);
        $ss->assign('id', $this->id);
        $ss->assign('saveLBL', $GLOBALS['app_strings']['LBL_SAVE_BUTTON_LABEL']);
        if($this->isAutoRefreshable()) {
       		$ss->assign('isRefreshable', true);
			$ss->assign('autoRefresh', $GLOBALS['app_strings']['LBL_DASHLET_CONFIGURE_AUTOREFRESH']);
			$ss->assign('autoRefreshOptions', $this->getAutoRefreshOptions());
			$ss->assign('autoRefreshSelect', $this->autoRefresh);
		}
		$select_option = array (
								'current_user' => 'Current User', 
								'specific_company' => 'Select Company',
								'specific_user' => 'Select User',
								'for_all' => 'All'
								);
		$query ="SELECT id, name FROM av_offices where deleted=0";
		$result = $db->query($query);
		$accounts_options = array();
		while($row = $db->fetchByAssoc($result)) {
			$accounts_options[$row['id']] = $row['name'];
		}
		$selected_value ='';
		$selected_type ='';
		$dashletDefs = $current_user->getPreference('dashlets','Home'); // load user's dashlets config	
		if (
			isset($dashletDefs[$this->id]['options']['selected_type']) &&
			$dashletDefs[$this->id]['options']['selected_type'] =='current_user'
		   )
		{
			$selected_value = 'current_user';
			$selected_type = 'current_user';
		}else{
			$selected_type = $dashletDefs[$this->id]['options']['selected_type'];
			$selected_value = $dashletDefs[$this->id]['options']['selected_value'];
		}
		$sql = "SELECT users.id, users.last_name
				FROM users
				RIGHT JOIN acl_roles_users ON (acl_roles_users.user_id = users.id AND acl_roles_users.deleted =0)
				RIGHT JOIN acl_roles ON (acl_roles.id = acl_roles_users.role_id AND acl_roles.deleted =0)
				WHERE users.deleted = '0'";
		$result = $db->query($sql, true);
		while($row = $db->fetchByAssoc($result)){
			$users_array_opt[$row['id']] = $row['last_name']; 
		}
		$ss->assign('accounts_options', $accounts_options);
		$ss->assign('selected_type', $selected_type);
		$ss->assign('selected_value', $selected_value);
		$ss->assign('select_option', $select_option);
		$ss->assign('users_options', $users_array_opt);
		ob_clean();
		return $ss->fetch('modules/av_Accounts/Dashlets/clientNetWorthHistoryDashlet/clientNetWorthHistoryDashletConfigure.tpl');        
    }
	//query on demand
	function constructQuery(){
		global $current_user;
		$dashletDefs = $current_user->getPreference('dashlets','Home'); // load user's dashlets config	
		$custom_and =" ";
		$sql = " ";
		if (
			isset($dashletDefs[$this->id]['options']['selected_type']) &&
			$dashletDefs[$this->id]['options']['selected_type'] =='specific_company'
		   )
		{
			$custom_and = " AND accounts.office_id='{$dashletDefs[$this->id]['options']['selected_value']}' ";
			$this->graph_for = BeanFactory::getBean('av_Offices', $dashletDefs[$this->id]['options']['selected_value'])->name;
		}
		elseif(
			isset($dashletDefs[$this->id]['options']['selected_type']) &&
			$dashletDefs[$this->id]['options']['selected_type'] =='for_all'
			)
		{
			$custom_and =" ";
			$this->graph_for = 'All';
		}
		else
		{
			if (
			   isset($dashletDefs[$this->id]['options']['selected_type']) &&
			   $dashletDefs[$this->id]['options']['selected_type'] == 'specific_user'
			   )
			{
				$user_id = $dashletDefs[$this->id]['options']['selected_value'];
			}else{
				$user_id = $current_user->id;
			}
			$custom_and = " AND accounts.assigned_user_id='{$user_id}' ";
			$users_array = get_user_array(); 
			$this->graph_for = $users_array[$user_id];
		}
		$sql .="SELECT `year`, `month`, SUM(worth) AS worth, SUM(managed_assets) AS managed_assets 
					FROM(
						SELECT YEAR(av_net_worth.net_worth_date) as year, MONTH(av_net_worth.net_worth_date) AS month, DAY(av_net_worth.net_worth_date) AS day, av_net_worth.grand_total AS worth, av_net_worth.managed_assets 
						FROM av_net_worth 
						RIGHT JOIN accounts ON(accounts.deleted=0 ".$custom_and." AND accounts.id=av_net_worth.accounts_id) 
						WHERE av_net_worth.deleted=0 
						ORDER BY av_net_worth.net_worth_date DESC
					) AS net_worth_history 
					GROUP BY net_worth_history.month
					ORDER BY net_worth_history.year DESC, net_worth_history.month DESC
					LIMIT 6";
		return $sql;
	}
	function monthName($month_int) {
		$months = array("December","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		return $months[$month_int];
	}
}
?>