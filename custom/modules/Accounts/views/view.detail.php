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
FROM `accounts_av_net_worth_c`
LEFT JOIN av_net_worth
	ON
	(
		av_net_worth.deleted=0
		AND
		av_net_worth.id = accounts_av_net_worth_c.accounts_av_net_worthav_net_worth_idb
	)
WHERE 
	accounts_av_net_worth_c.deleted=0 
	AND 
	accounts_av_net_worth_c.accounts_av_net_worthaccounts_ida = '{$this->bean->id}'
GROUP BY YEAR(av_net_worth.date_entered)
ORDER BY av_net_worth.date_entered DESC
		";

		$sql_result = $this->bean->db->query($sql);
		$graph_data = array();
		$min = INF;
		$max = -INF;
		
		while($graph_data_row = $this->bean->db->fetchByAssoc($sql_result))
		{
			$graph_data[$graph_data_row['year']] = array('worth'=>$graph_data_row['worth'],'managed_assets'=>$graph_data_row['managed_assets']);
			
			$max = ($graph_data_row['worth']>=$max) ? $graph_data_row['worth'] : $max;
			$max = ($graph_data_row['managed_assets']>=$max) ? $graph_data_row['managed_assets'] : $max;
			$min =  ($graph_data_row['managed_assets']<$min) ? $graph_data_row['managed_assets'] : $min;
			$min =  ($graph_data_row['worth']<$min) ? $graph_data_row['worth'] : $min;

		}
		$theData = "<div id='divForGraph' style='width:100%; height:400px'></div>";
	//   $theData = "<div style='width:100%; height:400px'></div><div id='divForGraph'></div>";

		$this->dv->ss->assign('theGraph', $theData);
		
		$this->dv->defs['panels']['LBL_GRAPH'] = array(
		  array(
		  	array(
			  'hideLabel' => true,
			  'customCode' => '{$theGraph}',
			)
		  )
		);
		$this->showPrimarySecondaryImage();
	
		
		$test = $graph_data;
		$new_test = array();
		$i = 0;
		foreach($test as $key=>$data){
		    $new_test[$i]['year'] = $key;
			$new_test[$i]['worth'] = $data['worth'];
			$new_test[$i]['managed_assets'] = $data['managed_assets'];
			$i++;
		}
		
		$interval = round(($max - $min)/15);
		if($min >= 10000)
		{
			$min = round($min / 10000) * 10000;
			$interval = round($interval / 10000) * 10000;		
		}
		else if($min >= 5000)
		{
			$min = round($min / 5000) * 5000;
			$interval = round($interval / 5000) * 5000;					
		}
	parent::display();	
		$jsRow = '';
		//the javascript things for the graphs go here...
		echo "
		<script type='text/javascript' src='custom/include/js/jquery/jqxcore.js'></script>
		<script type='text/javascript' src='custom/include/js/jquery/jqxchart.js'></script>	
		<script type='text/javascript' src='custom/include/js/jquery/jqxdata.js'></script>	

		<script type='text/javascript'>
		Accounts_detailview_tabs.selectTab(6);

				$('#divForGraph').jqxChart( {
							  source: ".json_encode($new_test).",															  
							  title: 'Net Worth',
							  categoryAxis:
							  {
								  dataField: 'year'
							  },
							  colorScheme: 'scheme05',
							  seriesGroups:
							  [
								{
								  type: 'line',
								  valueAxis:
								  {
									unitInterval: ".$interval.",
									minValue: ".$min.",
									maxValue: ".$max."
								  },
								  series: [
									{ dataField: 'worth', displayText: 'Net Worth' },
									{ dataField: 'managed_assets', displayText: 'Managed Assets' }
								  ]
								}
							  ]
						});
		setTimeout('Accounts_detailview_tabs.selectTab(0);',2500);
</script>";

	}
	/***
	* show images against primary and secondary
	*/
	public function showPrimarySecondaryImage(){
		global $db;
		if(!empty($this->bean->primary_contact_id) || !empty($this->bean->secondary_contact_id)){
			$sql = "SELECT id,picture FROM contacts WHERE id ='".$this->bean->primary_contact_id."' OR id ='".$this->bean->secondary_contact_id."'";
			$res = $db->query($sql);
			while($row = $db->fetchByAssoc($res)){
				if($row['id'] == $this->bean->primary_contact_id){
					$this->bean->primary_contact_image = $row['picture'];
				}
				else if($row['id'] == $this->bean->secondary_contact_id){
					$this->bean->secondary_contact_image = $row['picture'];
				}
			}
			
		}
		
	}
} 
?>
