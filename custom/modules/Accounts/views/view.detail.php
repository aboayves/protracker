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
	$sql = "SELECT *
			FROM
			(	
			SELECT YEAR(av_net_worth.net_worth_date) AS year, MONTH(av_net_worth.net_worth_date) AS month, DAY(av_net_worth.net_worth_date) AS day,  av_net_worth.grand_total AS worth, av_net_worth.managed_assets
			FROM av_net_worth
			WHERE 
				av_net_worth.deleted=0 
				AND 
				av_net_worth.accounts_id = '{$this->bean->id}'
			  ORDER BY av_net_worth.net_worth_date DESC
			) AS a1
			GROUP BY a1.month, a1.year
			ORDER BY a1.year DESC
		";
		
	$sql_result = $this->bean->db->query($sql);
	if($sql_result->num_rows >0)
	{
		$graph_data_db = array();
		$min = INF;
		$max = -INF;
		$year = 0;
		while($graph_data_row = $this->bean->db->fetchByAssoc($sql_result))
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
				$graph_data_db[$year][$i]['worth'] =(empty($graph_data_db[$year][$i]['worth'])) ? $last_value: $graph_data_db[$year][$i]['worth'];
				$graph_data_db[$year][$i]['managed_assets'] =(empty($graph_data_db[$year][$i]['managed_assets'])) ? $last_value_managed : $graph_data_db[$year][$i]['managed_assets'];
				
//				$graph_data[$year][$i] = array('worth'=>$graph_data_db[$year][$i]['worth'],'managed_assets'=>$graph_data_db[$year][$i]['managed_assets']);
				
				$data4graph[$k]['year'] = ($i==1) ? $year : '';
				
				
				$data4graph[$k]['worth'] = $graph_data_db[$year][$i]['worth'];
					$data4graph[$k]['managed_assets'] = $graph_data_db[$year][$i]['managed_assets'];
					$k++;
				$last_value = $graph_data_db[$year][$i]['worth'];
				$last_value_managed = $graph_data_db[$year][$i]['managed_assets'];
			}
		
		}
		$this->dv->defs['panels']['LBL_GRAPH'] = array(
		  array(
		  	array(
			  'hideLabel' => true,
			  'customCode' => '<input title="Print Net Worth" type="button" name="printNetWorthGraph" id="printNetWorthGraph" onclick="window.location=\'index.php?module=Accounts&action=printNetWorthGraph&accounts_id='.$this->bean->id.'\'" value="Create PDF"><div style="float: right;"><img src="themes/ProTracker/images/dashlet-header-refresh.png" onclick="$(\'#divForGraph\').jqxChart(\'refresh\');"/></div><div id="divForGraph" style="width:100%; height:400px">{$theGraph}</div>',
			)
		  )
		);
		$this->showPrimarySecondaryImage();
	
		parent::display();

		$min = ($min>0) ? $min : 0;
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
		//the javascript things for the graphs go here...
		echo "
		<script type='text/javascript' src='custom/include/js/jquery/jqxcore.js'></script>
		<script type='text/javascript' src='custom/include/js/jquery/jqxchart.js'></script>	
		<script type='text/javascript' src='custom/include/js/jquery/jqxdata.js'></script>	

		<script type='text/javascript'>
		Accounts_detailview_tabs.selectTab(5);

				$('#divForGraph').jqxChart( {
							  source: ".json_encode($data4graph).",															  
							  title: 'Net Worth',
							  categoryAxis:
							  {
								  dataField: 'year',
								  lineWidth: 40, 
								  textRotationAngle: -90
							  },
							  colorScheme: 'scheme05',
							  seriesGroups:
							  [
								{
								  type: 'line',
								  valueAxis:
								  {
									unitInterval: ".$interval.",
									minValue: 0,
									maxValue: ".$max.",
									formatSettings:
									  {
										 thousandsSeparator : ','
									 
									  }
								  },
								  
								  series: [
									{ dataField: 'worth', displayText: 'Net Worth' },
									{ dataField: 'managed_assets', displayText: 'Managed Assets' }
								  ]
								}
							  ]
						});
			
		Accounts_detailview_tabs.selectTab(0);
		$('#svgChart>g>g:nth-child(6)>text').attr('x', parseInt($('#svgChart>g>g:nth-child(6)>text').attr('x'))-12);	
		
		</script>";
		echo "<style>";
			".jqx-chart-axis-text{text-align:right !important;}";
		echo "</style>";
   }
   else
   {
		$theData = "<div id='divForGraph' style='width:100%; height:50px;' align='center'><br/>Insufficient data. Please add some Net Worth history.</div>";
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
		parent::display();
	}
		echo "<script>		
		window.onload=function(){
			$('#primary_contact_image').closest('td').prev('td').text('');
			$('#secondary_contact_image').closest('td').prev('td').text('');
		};
		</script>";
		//Date dialog for net worth statement
		echo '<div id="DialogForDatePicker" title="Date Picker" style="display:none">'.
				'<form name="input" action="index.php?module=Accounts&action=PrintNetWorth&record=' . $this->bean->id . '" method="POST">'.
					'<span class="dateTime">'.
						'Select Date: '.
						'<input type="text" maxlength="10" size="11" id="net_worth_date" name="net_worth_date" autocomplete="off" class="date_input"> &nbsp;'.
						'<img border="0" id="net_worth_date_trigger" style="position:relative; top:6px" alt="Enter Date" src="themes/Sugar/images/jscalendar.png">'.
					'</span> &nbsp; &nbsp; &nbsp;'.
					'<input type="submit" value="Generate Net Worth"/>'.
				'</form>'.
			'</div>'.
			'<script type="text/javascript">'.
				'Calendar.setup ({'.
					'inputField : "net_worth_date",'.
					'ifFormat : "%m/%d/%Y %I:%M%P",'.
					'daFormat : "%m/%d/%Y %I:%M%P",'.
					'button : "net_worth_date_trigger",'.
					'singleClick : true,'.
					'dateStr : "",'.
					'startWeekday: 0,'.
					'step : 1,'.
					'weekNumbers:false'.
				'});'.
			'</script>';
}
	/***
	* show images against primary and secondary
	*/
	public function showPrimarySecondaryImage(){
		global $db;
		if(!empty($this->bean->primary_contact_id) || !empty($this->bean->secondary_contact_id)){
			$sql = "SELECT id, picture FROM contacts WHERE deleted=0 and id ='{$this->bean->primary_contact_id}' OR id ='{$this->bean->secondary_contact_id}'";
			$res = $db->query($sql);
			while($row = $db->fetchByAssoc($res)){
				if($row['id'] == $this->bean->primary_contact_id){
					$this->bean->primary_contact_image = $row['picture'];
				    if($this->bean->primary_contact_birthdate && $this->bean->primary_contact_birthdate != '')
					{
						if(strtotime("now") > strtotime($this->bean->primary_contact_birthdate))
						{
							$this->bean->primary_contact_age = floor((strtotime("now")-strtotime($this->bean->primary_contact_birthdate))/3600/24/365);
						}
						$this->bean->primary_contact_birthdate = date("m/d/Y", strtotime($this->bean->primary_contact_birthdate));
					}
				}
				else if($row['id'] == $this->bean->secondary_contact_id){
					$this->bean->secondary_contact_image = $row['picture'];
					if($this->bean->secondary_contact_birthdate && $this->bean->secondary_contact_birthdate != '')
					{
						if(strtotime("now") > strtotime($this->bean->secondary_contact_birthdate))
						{
							$this->bean->secondary_contact_age = floor((strtotime("now")-strtotime($this->bean->secondary_contact_birthdate))/3600/24/365);
						}
						$this->bean->secondary_contact_birthdate = date("m/d/Y", strtotime($this->bean->secondary_contact_birthdate));
					}
				}
			}
			
		}
		
	}
} 
?>
