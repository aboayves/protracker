<?php 
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
require_once('include/json_config.php'); 
require_once('include/MVC/View/views/view.detail.php'); 
class AccountsViewDetail extends ViewDetail 
{ 
    function AccountsViewDetail() 
	{ 
		parent::ViewDetail(); 
	}
	function display() 
	{
		//this button is now defined in the detailviewdefs now where it should be..
/*		$this->dv->defs['templateMeta']['form']['buttons'][] = array (
			'customCode' => "
<input type='hidden' value='pt' name='query'>
<input type='hidden' value='false' name='to_pdf'>
<input onclick=\"this.form.to_pdf.value='true';this.form.action.value='CsvExport';SUGAR.ajaxUI.submitForm(this.form);this.form.to_pdf.value='false';\" type='button' name='csv_export' value='Export to CSV' />",
		);
*/
		$sql = "
SELECT YEAR(av_net_worth.date_entered) AS year, av_net_worth.grand_total AS worth, av_net_worth.managed_assets
FROM `accounts`
LEFT JOIN accounts_av_net_worth_c 
	ON 
	(
		accounts_av_net_worth_c.deleted=0 
		AND 
		accounts_av_net_worth_c.accounts_av_net_worthaccounts_ida = '{$this->bean->id}'
	)
LEFT JOIN av_net_worth
	ON
	(
		av_net_worth.deleted=0
		AND
		av_net_worth.id = accounts_av_net_worth_c.accounts_av_net_worthav_net_worth_idb
	)
WHERE accounts.deleted=0 AND accounts.id='{$this->bean->id}'
GROUP BY YEAR(av_net_worth.date_entered)
ORDER BY av_net_worth.date_entered DESC
		";

		$sql_result = $this->bean->db->query($sql);
		$graph_data = array();
		while($graph_data_row = $this->bean->db->fetchByAssoc($sql_result))
		{
			$graph_data[$graph_data_row['year']] = array('worth'=>$graph_data_row['worth'],'managed_assets'=>$graph_data_row['managed_assets']);
		}
//		$theData = '<pre>'.print_r($graph_data, true).'</pre>';
		$theData = "<div style='height:50px;width:100%;'></div><div id='divForGraph'></div>";
		$this->dv->ss->assign('theGraph', $theData);
		
		$this->dv->defs['panels']['LBL_GRAPH'] = array(
		  array(
		  	array(
			  'hideLabel' => true,
			  'customCode' => '{$theGraph}',
			)
		  )
		);
		parent::display();
		$jsRow = '';
		//the javascript things for the graphs go here...
		echo "
		<script type='text/javascript' src='custom/include/js/jquery/jquery-1.7.2.js'></script>
		<script type='text/javascript' src='custom/include/js/jquery/jqBarGraph.1.1.js'></script>
		<script type='text/javascript'>
		arrayOfData = new Array(
		";
		unset($graph_data['']);
		foreach($graph_data as $year=>$data)
		{
			$year = empty($year)? '0' : $year;
			$worth = empty($data['worth'])? 0 : $data['worth'];
			$managed_assets = empty($data['managed_assets'])? 0 : $data['managed_assets'];
			echo $jsRow."\r\n";
			$jsRow = "[[{$worth}, {$managed_assets}],'{$year}'],";
		}
		echo rtrim($jsRow, ',');
		echo "
		);
		Accounts_detailview_tabs.selectTab(4);	//just to show off my graph's animation effects.. We go back to out first tab in 3.5 seconds.
		$('#divForGraph').jqBarGraph({ 
										data: arrayOfData,
										colors: ['#437346', '#97D95C'],
										animate: true,
										legends: ['Net Worth', 'Managed'],
										legend: true,
										width: 400,
										type: 'multi'
									});
		setTimeout('Accounts_detailview_tabs.selectTab(0);',3500);	//going back to the first tab after 3.5 seconds.
		</script>";
		
	}
} 
?>
