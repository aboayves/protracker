<?php 
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
require_once('include/json_config.php'); 
require_once('custom/include/MVC/View/views/view.detail.php'); 
require_once('custom/modules/Accounts/lib/currencyHelper.php'); 
class AccountsViewDetail extends CustomViewDetail 
{ 
    function AccountsViewDetail() 
	{ 
		parent::ViewDetail(); 
	}
	function display() 
	{
		global $tabStructure;
		
		$tabStructure = array('Activities'=>$tabStructure['LBL_TABGROUP_ACTIVITIES']) + $tabStructure;
		$tabStructure['Activities']['label'] = 'Activities';
		$tabStructure['Activities']['modules'][0] = 'Meetings';
		$tabStructure['Activities']['modules'][1] = 'Calls';
		$tabStructure['Activities']['modules'][2] = 'activities';
		unset($tabStructure['LBL_TABGROUP_ACTIVITIES']);
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
				  'customCode' => '<input title="Print Net Worth" type="button" name="printNetWorthGraph" id="printNetWorthGraph" onclick="window.location=\'index.php?module=Accounts&action=printNetWorthGraph&accounts_id='.$this->bean->id.'\'" value="Create PDF"><div style="float: right;"><img src="themes/ProTracker/images/dashlet-header-refresh.png" onclick="$(\'#divForGraph\').jqxChart(\'refresh\');alignTextRight();"/></div><div id="divForGraph" style="width:100%; height:400px">{$theGraph}</div>',
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
				";	
			if(isset($_REQUEST['print']) && $_REQUEST['print'] =='true'){
				echo "<script type='text/javascript'>";
			}else{
				echo "<script type='text/javascript'>Accounts_detailview_tabs.selectTab(5);";
			}
			echo "$('#divForGraph').jqxChart( {
						  source: ".json_encode($data4graph).",															  
						  title: 'Net Worth',
						  categoryAxis:
						  {
							  dataField: 'year',
							  lineWidth: 40, 
							  textRotationAngle: -90,
						  },
						  colorScheme: 'scheme05',
						  seriesGroups:
						  [
							{
							  type: 'line',
							  toolTipFormatFunction: function(value){
								return new_currency_formater(value);
							  },
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
				})</script>";
			if(isset($_REQUEST['print']) && $_REQUEST['print'] =='true'){
				echo "<script type='text/javascript'>";
			}else{
				echo "<script type='text/javascript'>Accounts_detailview_tabs.selectTab(selectedTab);";
			}	
			echo "$('#svgChart>g>g:nth-child(6)>text').attr('x', parseInt($('#svgChart>g>g:nth-child(6)>text').attr('x'))-12);
			//doing axis text right align
			function alignTextRight(){
				var digit_length1 = ($('#svgChart').children().eq(5).children().first()).text().length;
				var digit_length2 = ($('#svgChart').children().eq(6).children().first()).text().length;
				var digit_length3 = ($('#svgChart').children().eq(7).children().first()).text().length;
				var digit_length4 = ($('#svgChart').children().eq(8).children().first()).text().length;
				var digit_length5 = ($('#svgChart').children().eq(9).children().first()).text().length;
				var x1 = (digit_length1-digit_length2)*3;
				var x2 = (digit_length1-digit_length3)*3;
				var x3 = (digit_length1-digit_length4)*3;
				var x4 = (digit_length1-digit_length5)*3;
				($('#svgChart').children().eq(6).children().first()).attr('x', parseInt($('#svgChart').children().eq(6).children().first().attr('x'))+x1);
				($('#svgChart').children().eq(7).children().first()).attr('x', parseInt($('#svgChart').children().eq(7).children().first().attr('x'))+x2);
				($('#svgChart').children().eq(8).children().first()).attr('x', parseInt($('#svgChart').children().eq(8).children().first().attr('x'))+x3);
				($('#svgChart').children().eq(9).children().first()).attr('x', parseInt($('#svgChart').children().eq(9).children().first().attr('x'))+x4);
			}
			alignTextRight();
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
				'<form name="input" target="_blank" action="index.php?module=Accounts&action=PrintNetWorth&record=' . $this->bean->id . '" method="POST">'.
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
		//setting condition for copying mailing addresses from primary contact through subpanel.
		echo "<script>var populate_pc=0;</script>";
		if(!isset($this->bean->primary_contact_id) || empty($this->bean->primary_contact_id)){
			echo "<script>populate_pc=1;</script>";
		}
	}
	/***
	* show images against primary and secondary
	*/
	public function showPrimarySecondaryImage(){
		global $db, $timedate;
		$contact_bean = new Contact();
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
						$this->bean->primary_contact_birthdate =  $timedate->to_display_date($this->bean->primary_contact_birthdate);
					}
					$primary_companies_bean = BeanFactory::getBean("av_Companies", $this->bean->primary_contact_employer);
					$this->bean->primary_contact_employer = $primary_companies_bean->name;
					$this->bean->primary_contact_ssn = $this->applyMaskToSSN($this->bean->primary_contact_ssn, $contact_bean->field_name_map['ssn']['ext3'], $contact_bean->field_name_map['ssn']['ext4']);
				}
				else if($row['id'] == $this->bean->secondary_contact_id){
					$this->bean->secondary_contact_image = $row['picture'];
					if($this->bean->secondary_contact_birthdate && $this->bean->secondary_contact_birthdate != '')
					{
						if(strtotime("now") > strtotime($this->bean->secondary_contact_birthdate))
						{
							$this->bean->secondary_contact_age = floor((strtotime("now")-strtotime($this->bean->secondary_contact_birthdate))/3600/24/365);
						}
						$this->bean->secondary_contact_birthdate = $timedate->to_display_date($this->bean->secondary_contact_birthdate);
					}
					$secondary_companies_bean = BeanFactory::getBean("av_Companies", $this->bean->secondary_contact_employer);
					$this->bean->secondary_contact_employer = $secondary_companies_bean->name;
					$this->bean->secondary_contact_ssn = $this->applyMaskToSSN($this->bean->secondary_contact_ssn, $contact_bean->field_name_map['ssn']['ext3'], $contact_bean->field_name_map['ssn']['ext4']);
				}
			}
			
		}
		
	}
	//Applying mask to SSN Field.
	public function applyMaskToSSN($value, $detailmask, $custommask){
		$returnString="";
		if($detailmask!="") {
			if($detailmask!="X") {
				$y=strlen($value)-strlen($detailmask);
			} else {
				$y=strlen($value);
			}
			for($i = 0; $i < $y; $i++) {
			$character=substr($custommask,$i,1);
				switch ($character) {
					case "@":
					case "#":
					case "*":
					case "A":
					case "a":
						$returnString.="*";
						break;
					default:
						$returnString.=substr($value,$i,1);
				}
			}
			if($detailmask!="X") {
				$returnString.=substr($value,(strlen($value)-strlen($detailmask)),strlen($detailmask));
			}
			return $returnString;
		} else {
			return $value;
		}
	}
} 

?>

