<?php
 
if(!defined('sugarEntry') ||!sugarEntry) die('Not A Valid Entry Point');
 
require_once('include/Dashlets/DashletGenericChart.php');
require_once('include/Sugar_Smarty.php');
 
class clientNetWorthHistoryDashlet extends DashletGenericChart{
    public $graph_for;
    function clientNetWorthHistoryDashlet($id, $def, $account) {
        $this->loadLanguage(clientNetWorthHistoryDashlet, 'modules/av_Accounts/Dashlets/'); 
        parent::Dashlet($id); 
		  
        $this->isConfigurable = true; // dashlet is configurable?
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
		$min = INF;
		$max = -INF;
		$year = 0;
		while($graph_data_row = $db->fetchByAssoc($sql_result))
		{
			
			
			$graph_data_db[$graph_data_row['year']][$graph_data_row['month']] = array('worth'=>$graph_data_row['worth'],'managed_assets'=>$graph_data_row['managed_assets']);
			if($year == 0)
			{	
				$year = $graph_data_row['year']-5;
		
			}
			$max = ($graph_data_row['worth']>=$max) ? $graph_data_row['worth'] : $max;
			$max = ($graph_data_row['managed_assets']>=$max) ? $graph_data_row['managed_assets'] : $max;
			$min =  ($graph_data_row['managed_assets']<$min) ? $graph_data_row['managed_assets'] : $min;
			$min =  ($graph_data_row['worth']<$min) ? $graph_data_row['worth'] : $min;
		}
		//$graph_data = array();
		$data4graph = array();
		$k=0;
		$last_value = 0;
		$last_value_managed = 0;
		for($j=1; $j<=5; $j++)
		{
			$year++;
			for($i=1; $i<=12; $i++)
			{
				$graph_data_db[$year][$i]['worth'] =($graph_data_db[$year][$i]['worth']=='') ? $last_value: $graph_data_db[$year][$i]['worth'];
				$graph_data_db[$year][$i]['managed_assets'] =($graph_data_db[$year][$i]['managed_assets']=='') ? $last_value_managed : $graph_data_db[$year][$i]['managed_assets'];
	
				$data4graph[$k]['year'] = ($i==1) ? $year : '';
				
				
				$data4graph[$k]['worth'] = $graph_data_db[$year][$i]['worth'];
					$data4graph[$k]['managed_assets'] = $graph_data_db[$year][$i]['managed_assets'];
					$k++;
				$last_value = $graph_data_db[$year][$i]['worth'];
				$last_value_managed = $graph_data_db[$year][$i]['managed_assets'];
			}
		
		}
		if($min == INF || $max == -INF){
			$min=$max=0;
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
		
	
        $ss->assign('data', json_encode($data4graph));
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
		$select_option = array('current_user' => 'Current User', 'specific_user' => 'Select User', 'specific_company' => 'Select Company');
        $query ="SELECT id, name FROM accounts where deleted=0";
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
		$ss->assign('accounts_options', $accounts_options);
		$ss->assign('selected_type', $selected_type);
		$ss->assign('selected_value', $selected_value);
		$ss->assign('select_option', $select_option);
		$ss->assign('users_options', get_user_array());
		return $ss->fetch('modules/av_Accounts/Dashlets/clientNetWorthHistoryDashlet/clientNetWorthHistoryDashletConfigure.tpl');        
    }
	//query on demand
	function constructQuery(){
		global $current_user;
		$dashletDefs = $current_user->getPreference('dashlets','Home'); // load user's dashlets config	
		$sql = " ";
		if (
			isset($dashletDefs[$this->id]['options']['selected_type']) &&
			$dashletDefs[$this->id]['options']['selected_type'] =='specific_company'
		   )
		{
			$sql .=" SELECT *
					 FROM(	
						SELECT YEAR(av_net_worth.date_entered) AS year, MONTH(av_net_worth.date_entered) AS month, 
					            DAY(av_net_worth.date_entered) AS day,  av_net_worth.grand_total AS worth, av_net_worth.managed_assets
						FROM av_net_worth
						WHERE 
						av_net_worth.deleted=0 
						AND 
						av_net_worth.accounts_id = '{$dashletDefs[$this->id]['options']['selected_value']}'
					  ORDER BY av_net_worth.date_entered DESC
					) AS a1
					GROUP BY a1.month, a1.year
					ORDER BY a1.year DESC";	
			$this->graph_for = BeanFactory::getBean('Accounts', $dashletDefs[$this->id]['options']['selected_value'])->name;
		}else{
			if (
			   isset($dashletDefs[$this->id]['options']['selected_type']) &&
			   $dashletDefs[$this->id]['options']['selected_type'] == 'specific_user'
			   )
			{
				$user_id = $dashletDefs[$this->id]['options']['selected_value'];
			}else{
				$user_id = $current_user->id;
			}
			$sql .=" SELECT `year`, `month`, SUM(worth) AS worth, SUM(managed_assets) AS managed_assets
					 FROM( 
						SELECT YEAR(av_net_worth.date_entered) AS year, MONTH(av_net_worth.date_entered) AS month, av_net_worth.grand_total AS worth, av_net_worth.managed_assets, accounts.id 
						FROM av_net_worth 
						RIGHT JOIN accounts ON(accounts.deleted=0 AND accounts.assigned_user_id='{$user_id}' AND accounts.id=av_net_worth.accounts_id) 
						WHERE av_net_worth.deleted=0 
						GROUP BY `year`, `month`, accounts.id
						ORDER BY av_net_worth.date_entered DESC 
					 ) AS net_worth_history
					 GROUP BY net_worth_history.`month`, net_worth_history.`year` 
					 ORDER BY net_worth_history.`year` DESC";
			$this->graph_for = get_user_array()[$user_id];
		}
	
		return $sql;
	}
}
?>