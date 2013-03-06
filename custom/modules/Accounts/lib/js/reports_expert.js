var reports = {
	config:{
		display_columns: new Array(), 
		SQL: "",
		chart: {
			enable: false,
			type: '',
			showData: true,
			axisIdentifier : new Array(),
			axisDataColumn : new Array(),
		}
	},
	
	jQ: jQuery.noConflict(),
	
	//initializes report configuration
	initialize: function(){
		reports.jQ(document).ready(function(){	
			reports.load_wizard();
			
			reports.jQ('#sql').val(reports.config.SQL);
			reports.jQ('#sql').keypress(function(){
				reports.config.display_columns = new Array();
			});
			
			reports.populate_chart();
		});
	},
	
	//populate Display Columns from Array
	populate_diplay_cols: function(){
		reports.jQ('#sql_loader').show();
		
		reports.jQ.ajax({
			url: "index.php?module=RT_Report&action=fetchColumns",
			type: 'POST',
			contentType: "application/x-www-form-urlencoded",
			dataType: 'json',
			data: "sugar_body_only=true&SQL=" + encodeURIComponent(reports.jQ('#sql').val()),
			async: true,
			success: function(result){
				reports.config.display_columns = result;
				
				reports.jQ('#sql_loader').hide();
				if(reports.config.display_columns.length > 0){
					reports.config.SQL = reports.jQ('#sql').val();
				}else{
					alert("Invalid SQL statement");
				}
			}
		});
	},
	
	//load wizard
	load_wizard: function(){
		reports.jQ('#wizard').smartWizard({
			enableFinishButton: true,
			enableAllSteps: true,
			
			onShowStep: function (obj) {
				switch(parseInt(obj.attr('rel'))){
					case 2:	
						reports.populate_chart();
					break;
				}
				
				reports.show_step_info(parseInt(obj.attr('rel')));
			},
			
			onLeaveStep: function (obj) {
				switch (parseInt(obj.attr('rel'))) {
					case 1:
						return reports.isValidStep1();
					break;
					case 2:	
						return reports.isValidStep2();
				}
				
				return true;
			},
			
			onFinish: function (obj) {
				var valid = reports.isValidStep1();
				valid = reports.isValidStep2() && valid;
				
				if(!valid){
					return false;
				}
				
				//Submitting form
				reports.jQ("#config").val(JSON.stringifyNoSecurity(reports.config));	
				reports.jQ("#EditView").submit();
			}
		});
	},
	
	isValidStep1: function(){
		if(reports.jQ("#name").val() == ""){
			reports.jQ("#name_error").show();
		}else{
			reports.jQ("#name_error").hide();
		}
		
		if(reports.config.display_columns.length == 0){
			reports.jQ("#sql_error").show();
		}else{
			reports.jQ("#sql_error").hide();
		}
		
		if(reports.jQ('#name').val() == "" || reports.config.display_columns.length == 0){							
			reports.jQ('#wizard').smartWizard('setError',{stepnum:1,iserror:true});
			
			return false;
		}else{
			reports.jQ('#wizard').smartWizard('setError',{stepnum:1,iserror:false});
			
			return true;
		}
	},
	
	isValidStep2: function(){
		reports.update_charts_def();
				
		if($("#enable_chart").is(":checked")){
			if(reports.jQ("#data_series_x_axis").val() == null || reports.jQ("#data_series_x_axis").val() == ""){
				reports.jQ("#data_series_x_axis_error").show();
			}else{
				reports.jQ("#data_series_x_axis_error").hide();
			}
			
			if(reports.jQ("#data_series_y_axis").val() == null || reports.jQ("#data_series_y_axis").val() == ""){
				reports.jQ("#data_series_y_axis_error").show();
			}else{
				reports.jQ("#data_series_y_axis_error").hide();
			}
			
			if(
			   reports.jQ('#data_series_x_axis').val() == null || 
			   reports.jQ("#data_series_x_axis").val() == "" || 
			   reports.jQ('#data_series_y_axis').val() == null || 
			   reports.jQ("#data_series_y_axis").val() == ""
			){							
				reports.jQ('#wizard').smartWizard('setError',{stepnum:2,iserror:true});
			
				return false;
			}else{
				reports.jQ('#wizard').smartWizard('setError',{stepnum:2,iserror:false});
			
				return true;
			}
		}
		
		return true;
	},
	
	//populate chart data from Array
	populate_chart: function(){
		var dataSeries = document.getElementById('data_series');
		if(dataSeries != null){
			while(dataSeries.options.length > 0){
				dataSeries.remove(0);
			}
			
			dataSeries.options.add(new Option("None", ""));
			dataSeries.selectedIndex = -1;
		}
		
		var xAxis = document.getElementById('data_series_x_axis');
		if(xAxis != null){
			while(xAxis.options.length > 0){
				xAxis.remove(0);
			}
			
			xAxis.options.add(new Option("None", ""));
			xAxis.selectedIndex = -1;
		}
		
		var yAxis = document.getElementById('data_series_y_axis');
		if(yAxis != null){
			while(yAxis.options.length > 0){
				yAxis.remove(0);
			}
			
			yAxis.options.add(new Option("None", ""));
			yAxis.selectedIndex = -1;
		}
		
		var dsVal = "";
		var xVal = "";
		var yVal = "";
		
		for(var i=0; i<reports.config.chart.axisIdentifier.length; i++){
			//For data series
			if(reports.config.chart.axisIdentifier[i] == "DS"){
				dsVal = reports.config.chart.axisDataColumn[i];
			}
			
			//for x-axis
			if(reports.config.chart.axisIdentifier[i] == "X"){
				xVal = reports.config.chart.axisDataColumn[i];
			}
			
			//for y-axis
			if(reports.config.chart.axisIdentifier[i] == "Y"){
				yVal = reports.config.chart.axisDataColumn[i];
			}
		}
		
		for(var i=0; i<reports.config.display_columns.length; i++){
			var text = val = reports.config.display_columns[i];
									
			if(dataSeries != null){
				dataSeries.options.add(new Option(text, val));
				
				if(val == dsVal){
					dataSeries.selectedIndex = i+1;
				}
			}
			
			if(xAxis != null){
				xAxis.options.add(new Option(text, val));
				
				if(val == xVal){
					xAxis.selectedIndex = i+1;
				}
			}
			
			if(yAxis != null){
				yAxis.options.add(new Option(text, val));
				
				if(val == yVal){
					yAxis.selectedIndex = i+1;
				}
			}
		}
		
		//Setting chart type
		var chartType = document.getElementById('chart_type');
		if(chartType != null){
			var selectedIndex = -1;
			for(var i=0; i<chartType.options.length; i++){
				if(chartType.options[i].value == reports.config.chart.type){
					selectedIndex = i;
				}
			}
			
			if(selectedIndex != -1){
				chartType.selectedIndex = selectedIndex;
			}
		}
		
		//Setting show data checkbox
		var showData = document.getElementById('show_table_data');
		if(showData != null){
			showData.checked = reports.config.chart.showData;
		}
		
		//Setting enable chart checkbox
		var enableChart = document.getElementById('enable_chart');
		if(enableChart != null){
			enableChart.checked = reports.config.chart.enable;
			reports.enable_disable_chart(enableChart.checked);
		}
	},
	
	//Enable disable chart
	enable_disable_chart: function(enable){
		var showData = document.getElementById('show_table_data');
		if(showData != null){
			showData.disabled = !enable;
		}
		
		var chartType = document.getElementById('chart_type');
		if(chartType != null){
			chartType.disabled = !enable;
		}
		
		var dataSeries = document.getElementById('data_series');
		if(dataSeries != null){
			dataSeries.disabled = !enable;
		}
		
		var xAxis = document.getElementById('data_series_x_axis');
		if(xAxis != null){
			xAxis.disabled = !enable;
		}
		
		var yAxis = document.getElementById('data_series_y_axis');
		if(yAxis != null){
			yAxis.disabled = !enable;
		}
	},
	
	//Update Charts Def to post configuration
	update_charts_def: function(){
		var enableChart = document.getElementById('enable_chart');
		var showData = document.getElementById('show_table_data');
		var chartType = document.getElementById('chart_type');
		
		reports.config.chart = {
			enable: (enableChart != null && enableChart.checked) ? true : false,
			type: (chartType != null) ? chartType.options[chartType.selectedIndex].value : '',
			showData: (showData != null && showData.checked) ? true : false,
			axisIdentifier : new Array(),
			axisDataColumn : new Array(),
		};
		
		//Populating axis
		var dataSeries = document.getElementById('data_series');
		var xAxis = document.getElementById('data_series_x_axis');
		var yAxis = document.getElementById('data_series_y_axis');
		
		if(dataSeries != null && typeof(dataSeries.options) != "undefined" && typeof(dataSeries.options[dataSeries.selectedIndex]) != "undefined"){
			reports.config.chart.axisIdentifier.push('DS');
			reports.config.chart.axisDataColumn.push(dataSeries.options[dataSeries.selectedIndex].value);
		}
		
		if(xAxis != null && typeof(xAxis.options) != "undefined" && typeof(xAxis.options[xAxis.selectedIndex]) != "undefined"){
			reports.config.chart.axisIdentifier.push('X');
			reports.config.chart.axisDataColumn.push(xAxis.options[xAxis.selectedIndex].value);
		}
		
		if(yAxis != null && typeof(yAxis.options) != "undefined" && typeof(yAxis.options[yAxis.selectedIndex]) != "undefined"){
			reports.config.chart.axisIdentifier.push('Y');
			reports.config.chart.axisDataColumn.push(yAxis.options[yAxis.selectedIndex].value);
		}
	},
	
	//Dsplays current step
	show_step_info: function(stepNo){
		reports.jQ('.stepContainer').hide();
		reports.jQ('.actionBar').hide();
		
		reports.jQ('.stepInfoDiv').each(function(){
			reports.jQ(this).hide();
		});
		
		reports.jQ('#step_' + stepNo).show();
		
		//Settting height of step info
		reports.jQ('#stepInfo').height("auto");
		if(reports.jQ('#stepInfo').height() < reports.jQ('#stepInfo').parent().height()){
			reports.jQ('#stepInfo').height(reports.jQ('#stepInfo').parent().height());
		}
	},
	
	//Function for cancel Button
	cancelClick: function (){
		if(reports.jQ("#record").val() != ""){
			window.location = "index.php?module=RT_Report&action=DetailView&record=" + reports.jQ("#record").val();
		}else{
			window.location = "index.php?module=RT_Report&action=ListView";
		}
	},
}