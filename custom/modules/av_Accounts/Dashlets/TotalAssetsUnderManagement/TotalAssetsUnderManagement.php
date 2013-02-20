<?php
 
if(!defined('sugarEntry') ||!sugarEntry) die('Not A Valid Entry Point');
 
require_once('include/Dashlets/Dashlet.php');
require_once('include/Sugar_Smarty.php');
 
class TotalAssetsUnderManagement extends Dashlet {
    function TotalAssetsUnderManagement($id, $def) {
        $this->loadLanguage(TotalAssetsUnderManagement, 'custom/modules/av_Accounts/Dashlets/'); 
        parent::Dashlet($id); 
 
        $this->isConfigurable = false; // dashlet is configurable?
        $this->hasScript = false; // dashlet has javascript attached to it?
        // if no custom title, use default
        if(empty($def['title'])) $this->title = $this->dashletStrings['LBL_TITLE'];
        else $this->title = $def['title'];
    }
 
    //Displays the dashlet
    function display() {
		global $current_user;
        $ss = new Sugar_Smarty();
		global $db;
		$sql="SELECT networth, MONTHNAME(date) as month
			  FROM(
						SELECT  av_net_worth.managed_assets AS networth, av_net_worth.date_entered AS date
						FROM av_net_worth 
						RIGHT JOIN accounts 
						ON(av_net_worth.accounts_id=accounts.id AND accounts.assigned_user_id='1a0d8f4c-b50a-0e6c-3be6-50f92dd8f703' AND accounts.deleted=0)
						WHERE av_net_worth.deleted=0
						GROUP BY MONTH(av_net_worth.date_entered)
						ORDER BY YEAR(av_net_worth.date_entered)DESC, MONTH(av_net_worth.date_entered)ASC, DAY(av_net_worth.date_entered)DESC
			  ) AS networth
			  ORDER BY YEAR(date)DESC, MONTH(date)DESC
			  LIMIT 6";
		$result = $db-> query($sql);
		$data = array();
		while($row = $db -> fetchByAssoc($result)){
			$data[$row['month']] = $row['networth'];
		}
		$data = array_reverse($data); //reversing array for graph
        //assign variables
        $ss->assign('data', $data);
		$ss->assign('min', min(array_values($data)));
		$ss->assign('max', max(array_values($data)));
		$ss->assign('interval', round((max(array_values($data))-min(array_values($data)))/5, 0));
        $str = $ss->fetch('custom/modules/av_Accounts/Dashlets/TotalAssetsUnderManagement/TotalAssetsUnderManagement.tpl');
        return parent::display().$str; // return parent::display for title and such
    }
}
?>