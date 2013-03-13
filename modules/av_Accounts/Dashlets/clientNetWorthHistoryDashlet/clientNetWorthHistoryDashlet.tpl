<script type='text/javascript' src='custom/include/js/jquery/jqxcore.js'></script>
<script type='text/javascript' src='custom/include/js/jquery/jqxchart.js'></script>	
<script type='text/javascript' src='custom/include/js/jquery/jqxdata.js'></script>
<script type='text/javascript' src='modules/av_Accounts/Dashlets/clientNetWorthHistoryDashlet/clientNetWorthHistoryDashlet.js'></script>

<div id='chartContainer' style="width:100%; height:400px; text-align:center"/>
<script type="text/javascript">
	var min = {$min};
	var max = {$max};
	var data = {$data};
	var graph_for = '{$graphFor}';
	var interval={$interval};
</script>
{literal}
		<script type='text/javascript'>
		if(min == 0 && max ==0){
			$('#chartContainer').height(40);
			$('#chartContainer').html("No Data");
		}
		else{
				$('#chartContainer').jqxChart( {
							  source: data,															  
							  title: 'For: '+graph_for,
							  categoryAxis:
							  {
								  dataField: 'month',
								  lineWidth: 40, 
							  },
							  colorScheme: 'scheme05',
							  seriesGroups:
							  [
								{
								  type: 'line',
								  valueAxis:
								  {
									unitInterval: interval,
									minValue: 0,
									maxValue: max,
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
			}
$('#svgChart>g>g:nth-child(7)>text').attr('x', parseInt($('#svgChart>g>g:nth-child(7)>text').attr('x'))-33);	         

    </script>
{/literal}