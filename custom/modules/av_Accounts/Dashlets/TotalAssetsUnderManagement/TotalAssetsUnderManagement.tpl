<script type='text/javascript' src='custom/include/js/jquery/jqxcore.js'></script>
<script type='text/javascript' src='custom/include/js/jquery/jqxchart.js'></script>	
<script type='text/javascript' src='custom/include/js/jquery/jqxdata.js'></script>
<div id='chartContainer' style="width:800px; height: 400px"/>
<script type="text/javascript">
	var sampleData = new Array();
	var min = {$min};
	var max = {$max};
	var interval={$interval};
</script>
{foreach from=$data key=k item=val}
	{literal}
		<script type="text/javascript">
			sampleData.push({Month:{/literal}'{$k}'{literal},networth:{/literal}{$val}{literal}});
		</script>
	{/literal}
{/foreach}
{literal}
	<script type="text/javascript">
            // prepare jqxChart settings
            var settings = {
                title: "Client Net Worth History",
                padding: { left: 5, top: 5, right: 5, bottom: 5 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },
                source: sampleData,
                categoryAxis:
                    {
                        dataField: 'Month',
                        showGridLines: false
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            columnsGapPercent: 100,
                            seriesGapPercent: 0,
                            valueAxis:
                            {
                                minValue: 0,
                                maxValue: max,
                                unitInterval: interval,
                                description: '',
								formatSettings:
								  {
									 thousandsSeparator : ','
								 
								  }
                            },
                            series: [
                                    { dataField: 'networth', displayText: 'Net Worth'},
                                ]
                        }
                    ]
            };
            
            // select the chartContainer DIV element and render the chart.
         
		 $('#chartContainer').jqxChart(settings);

    </script>
{/literal}