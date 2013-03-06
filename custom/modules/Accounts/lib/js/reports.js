var reports = {
	textOptions:[{
		text: SUGAR.language.get('RT_Report', 'LBL_EQUALS'),
		value: '='
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NOT_EQUALS'),
		value: '!='
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_LIKE'),
		value: 'LIKE'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NOT_LIKE'),
		value: 'NOT LIKE'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NULL'),
		value: 'IS NULL'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NOT_NULL'),
		value: 'IS NOT NULL'
	}],
	
	intOptions:[{
		text: SUGAR.language.get('RT_Report', 'LBL_EQUALS'),
		value: '='
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NOT_EQUALS'),
		value: '!='
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_LESS_THAN'),
		value: '<'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_GREATER_THAN'),
		value: '>'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_BETWEEN'),
		value: 'BETWEEN'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NULL'),
		value: 'IS NULL'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NOT_NULL'),
		value: 'IS NOT NULL'
	}],
	
	enumOptions:[{
		text: SUGAR.language.get('RT_Report', 'LBL_EQUALS'),
		value: '='
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NOT_EQUALS'),
		value: '!='
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_IN'),
		value: 'IN'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NOT_IN'),
		value: 'NOT IN'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NULL'),
		value: 'IS NULL'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NOT_NULL'),
		value: 'IS NOT NULL'
	}],
	
	boolOptions:[{
		text: SUGAR.language.get('RT_Report', 'LBL_YES'),
		value: '='
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NO'),
		value: '='
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NULL'),
		value: 'IS NULL'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NOT_NULL'),
		value: 'IS NOT NULL'
	}],
	
	dateOptions:[{
		text: SUGAR.language.get('RT_Report', 'LBL_NULL'),
		value: 'IS NULL'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NOT_NULL'),
		value: 'IS NOT NULL'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_ON'),
		value: '='
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NOT_ON'),
		value: '!='
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_BEFORE'),
		value: '<'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_AFTER'),
		value: '>'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_BETWEEN'),
		value: 'BETWEEN'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_YESTERDAY'),
		value: 'tp_yesterday'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_TODAY'),
		value: 'tp_today'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_TOMORROW'),
		value: 'tp_tomorrow'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_LAST_7_DAYS'),
		value: 'tp_last_7_days'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NEXT_7_DAYS'),
		value: 'tp_next_7_days'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_LAST_MONTH'),
		value: 'tp_last_month'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_THIS_MONTH'),
		value: 'tp_this_month'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NEXT_MONTH'),
		value: 'tp_next_month'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_LAST_30_DAYS'),
		value: 'tp_last_30_days'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NEXT_30_DAYS'),
		value: 'tp_next_30_days'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_THIS_QUARTER'),
		value: 'tp_this_quarter'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_LAST_YEAR'),
		value: 'tp_last_year'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_THIS_YEAR'),
		value: 'tp_this_year'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_NEXT_YEAR'),
		value: 'tp_next_year'
	}],
	
	intFunctionOptions : [{
		text : 'None',
		value: ''
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_SUM'),
		value: 'SUM'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_COUNT'),
		value: 'COUNT'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_MAX'),
		value: 'MAX'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_MIN'),
		value: 'MIN'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_AVG'),
		value: 'AVG'
	}],
	
	dateFunctionOptions : [{
		text : 'None',
		value: ''
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_COUNT'),
		value: 'COUNT'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_MAX'),
		value: 'MAX'
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_MIN'),
		value: 'MIN'
	}],
	
	otherFunctionOptions : [{
		text : 'None',
		value: ''
	},{
		text: SUGAR.language.get('RT_Report', 'LBL_COUNT'),
		value: 'COUNT'
	}],
	
	config:{
		display_columns: new Array(), 
		order_by: {name: '', dir: 'ASC', link: ''},
		filters_def: {
			operator: "",
			fields: new Array(),
			sub_filters: new Array()
		},
		group_by: new Array(),
		chart: {
			enable: false,
			type: '',
			showData: true,
			axisIdentifier : new Array(),
			axisDataColumn : new Array(),
		}
	},
	
	addFieldsScope: '',
	orderById: null,
	tree: null,
	filtersMenu: null,
	filters: new Array(),
	fieldDataAdapter: null,
	mousePos: {x: 0, y: 0},
	
	jQ: jQuery.noConflict(),
	
	populateTree: function (){
		if(reports.tree != null){
			return;
		}
		
		var module = reports.jQ("#module_name").val();
		
		if(typeof(module) != "undefined" && module != "undefined" && module != ""){
			reports.tree = new YAHOO.widget.TreeView("tree_panel"); 
			reports.tree.setDynamicLoad(reports.loadTreeChilds);
			
			var label = SUGAR.language.get(module, 'LBL_MODULE_NAME');
			label = typeof(label) == "undefined" || label == "undefined" ? module : label;
			
			new YAHOO.widget.TextNode(
				{
					label: label,
					href: "javascript:reports.populateFields('" + module + "','root', '', '" + label + "');",
					title:  label,
					link_name:  'root',
					parentNode:  '',
					Combo:  label,
					module:  module,
					expanded: true
				},reports.tree.getRoot(), true
			);
			reports.tree.draw();
			
			reports.populateFields(module, 'root', '', label);
		}else{
			return false;
		}
	},
	
	loadTreeChilds: function(node, fnLoadComplete)  {
		reports.jQ.ajax({
			url: "index.php?module=RT_Report&action=getTreeNodes",
			type: 'POST',
			contentType: "application/x-www-form-urlencoded",
			dataType: 'json',
			data: "sugar_body_only=true&module_name=" + encodeURI(node.data.module) + "&parentNode=" + encodeURI(node.data.parentNode) + "&parentCombo=" + encodeURI(node.data.Combo) + "&parentLink=" + encodeURI(node.data.link_name) + "",
			async: true,
			success: function(result){
				if(result.length > 0){;
					for (var i=0, j=result.length; i<j; i++){
						var tempNode = new YAHOO.widget.TextNode({
							label: result[i].text,
							href: result[i].href,
							isLeaf: result[i].leaf,
							title: result[i].text,
							link_name: result[i].link_name,
							parentNode: result[i].parentNode,
							Combo: result[i].Combo,
							module:  result[i].module_name,
							expanded: false
						}, node, false);
					}
				}
				fnLoadComplete();
			}
		});
	},
	
	// Add module's fields in a grid through ajax.
	populateFields : function (module, link_name, parentNode, Combo){
		//Clearing grid
		reports.jQ("#fields_panel").jqxGrid('clear');
		
		//Showing loading message
		reports.jQ(".jqx-grid-empty-cell").find("span").each(function(index, domEle){
			reports.jQ(domEle).html('<div style="text-align:center"><img src="index.php?entryPoint=getImage&imageName=loading.gif" /> <br /> Loading data ...</div>');
		});
		
		//Reloading Grid
		reports.jQ.ajax({
			url: 'index.php?module=RT_Report&action=getModuleFields',
			type: 'POST',
			contentType: 'application/x-www-form-urlencoded',
			dataType: 'json',
			data: 'sugar_body_only=true&populateFields=true&module_name=' + encodeURI(module) + '&link_name=' + encodeURI(link_name) + '&parent_module=' + encodeURI(parentNode) + '&Combo=' + encodeURI(Combo),
			async: true,
			success : function (result){
				reports.jQ("#fields_panel").unbind('rowclick'); // unbind pervious events.
				
				var source = {
					datatype: 'json',
					localdata: eval(result),
					datafields:[{name: 'field_label'}]
				};					
				
				reports.fieldDataAdapter = result;					
				
				reports.jQ("#fields_panel").jqxGrid({
					source: new reports.jQ.jqx.dataAdapter(source),
					width: "100%",					
					treeGrid: true,					
					showfilterrow: true,
					filterable: true,
					sortable: true,
					columns: [
						{ text: 'Field Name', filtercondition: 'starts_with', datafield: 'field_label'}
					]
				}).bind('rowclick', function (event) {
					var data = reports.jQ('#fields_panel').jqxGrid('getrowdata', event.args.rowindex);
					reports.addField(reports.fieldDataAdapter[data.uid]);				
				});
			}
		});
	},
	
	//Add field to display column or filters
	addField : function (data){
		if(reports.addFieldsScope == 'filters'){
			reports.addFieldToFilters(data);
		}else if(reports.addFieldsScope == 'cols'){			
			reports.addFieldToDisplayCols(data);
		}else if(reports.addFieldsScope == 'grp'){			
			reports.addFieldToGroups(data);
		}
	},
	
	//Add field to main filter if there is no sub filter otherwise shows menu
	addFieldToFilters: function(data){
		var subFiltersTable = document.getElementById('mainSubFilters');		
		if(subFiltersTable.rows.length > 0){
			reports.showMenu(data);
		}else{
			reports.addInFilters('mainFilters', data);
		}
	},
	
	//Display menu to select filter to add fields
	showMenu: function(data, e){		
		var items = [{
						text: SUGAR.language.get('RT_Report', 'LBL_MAIN_FILTERS'),
						id:  'mainFilters',
						parentid: -1
					}];
					
		subItems = reports.getSubFiltersForMenu('', 'mainSubFilters', data);
		items = items.concat(subItems);	
		
		if(reports.filtersMenu != null){
			reports.filtersMenu.destroy();
		}
		
		var source = {
			datatype: "json",
			datafields: [
							{ name: 'id' },
							{ name: 'parentid' },
							{ name: 'text' }				
						],
			id: 'id',
			localdata: items
		};
		
		// create data adapter.
		var dataAdapter = new reports.jQ.jqx.dataAdapter(source);
        
		// perform Data Binding.
        dataAdapter.dataBind();
		
		var records = dataAdapter.getRecordsHierarchy('id', 'parentid', 'items', [{ name: 'text', map: 'label'}]);
		var contextMenu = reports.jQ("#jqxWidget").jqxMenu({source: records, height: 'auto', autoOpenPopup: false, enableHover: false, mode: 'popup'});
		
		contextMenu.jqxMenu('open', reports.mousePos.x, reports.mousePos.y);
		
		//Setting height width of menu
		reports.jQ("#jqxWidget").css("height", (items.length * 27.5) + "px");
		reports.jQ("#jqxWidget").css("min-width", "110px");
		reports.jQ("#jqxWidget").css("width", "");
		
		contextMenu.unbind('itemclick');
        contextMenu.bind('itemclick', function (event) {
			// Block addInFilters on 'Select Filter'			
			reports.jQ('#jqxWidget').jqxMenu('close');
			reports.addInFilters(event.args.id, data);
		});
	},
	
	//Returns sub filters for the provided parent filter
	getSubFiltersForMenu: function(spaces, subFiltersTableId, data){
		var subFiltersTable = document.getElementById(subFiltersTableId);

		var items = [];
		spaces += '';
		for(var i=0; i<subFiltersTable.rows.length; i++){
			var row = subFiltersTable.rows[i];
			var filterId = row.id.replace('Row_','');
			var filterMeta = reports.filters[filterId];
			
			var subItems = reports.getSubFiltersForMenu(spaces, filterMeta.subFilterId, data);
			var menuItem = {
				id:	filterId,
				text: spaces + SUGAR.language.get('RT_Report', 'LBL_FILTERS') + filterMeta.index,
				parentid: -1
			};
			items.push(menuItem);
			items = items.concat(subItems);
		}
		
		return items;
	},
	
	//Add field to main filter if there is no sub filter otherwise shows menu
	addInFilters: function(targetId, record){	
		var field_defs = record.field_defs;		
		var table = document.getElementById(targetId);
		var rowcount = 0;
		if(table.rows.length > 0){
			rowcount = parseInt(table.rows[table.rows.length-1].id.replace(targetId + '_Row_', '')) + 1;
		}
		var rowId = targetId + '_Row_' + rowcount;
		var row = table.insertRow(table.rows.length);
		row.setAttribute('id', rowId);
		
		var colLabel = record.comboLabel;
		if(typeof(record.value) == "undefined"){
			colLabel += " > " + record.field_label;
		}
		
		var cell = row.insertCell(0);
		cell.setAttribute('scope', 'row');
		cell.innerHTML = 	"<input type='hidden' id='" + rowId + "_module' value='" + record.module_name + "' />" + 
							"<input type='hidden' id='" + rowId + "_link' value='" + record.link_name + "' />" + 
							"<input type='hidden' id='" + rowId + "_field' value='" + record.field_name + "' />" + 
							"<input type='hidden' id='" + rowId + "_col_name' value='" + colLabel + "' />" + 
							"<input type='hidden' id='" + rowId + "_operator' value='" + (typeof(record.operator) != "undefined" ? record.operator : "") + "' />" + 
							"<input type='hidden' id='" + rowId + "_value' value='" + (typeof(record.value) != "undefined" ? record.value : "") + "' />" + 
							"<input type='hidden' id='" + rowId + "_defs' value='" + JSON.stringifyNoSecurity(field_defs) + "' />";
							
		cell = row.insertCell(1);
		cell.setAttribute('scope', 'row');
		cell.innerHTML=colLabel;
		
		cell = row.insertCell(2);
		cell.setAttribute('scope', 'row');
		var selectEl = document.createElement('select');
		
		if(typeof(field_defs) != "undefined"){
			var selectOptions = reports.textOptions;
			if(field_defs.type.indexOf('date') >= 0){
				selectOptions = reports.dateOptions;
			}else if(field_defs.type == "bool"){
				selectOptions = reports.boolOptions;
			}else if(field_defs.type.indexOf('enum') >= 0){
				selectOptions = reports.enumOptions;
			}else if(field_defs.type == 'int' || field_defs.type == 'float' || field_defs.type == 'decimal' || field_defs.type == 'currency' || field_defs.type == 'num'){
				selectOptions = reports.intOptions;
			}
			
			var selectedIndex = -1;
			for(var i=0; i<selectOptions.length; i++){
				selectEl.options.add(new Option(selectOptions[i].text, selectOptions[i].value));
				
				if(typeof(record.operator) != "undefined" && record.operator == selectOptions[i].value){
					selectedIndex = i;
				}
			}
			
			if(selectedIndex != -1){
				selectEl.selectedIndex = selectedIndex;
			}
			
			selectEl.setAttribute('onchange', "reports.changedFilterInput('"+ field_defs.type +"','"+ rowId +"');");
		}
		
		selectEl.setAttribute('id', rowId + "_OprSel");
		cell.appendChild(selectEl);
		
		cell = row.insertCell(3);
		cell.setAttribute('scope', 'row');
		cell.setAttribute('id', rowId + "_ValueArea");
		
		cell = row.insertCell(4);
		cell.setAttribute('scope', 'row');
		cell.innerHTML = "<img onclick='reports.deleteRow(\"" + rowId + "\")' src='themes/" + 
							SUGAR.themes.theme_name + "/images/delete_inline.gif'>";
		
		if(typeof(field_defs) != "undefined"){
			reports.changedFilterInput(field_defs.type, rowId, record.value);
		}
	},
	
	//Change the input area for the filter of provided id
	changedFilterInput: function (type, rowId, value){
		var defEl = document.getElementById(rowId + "_defs");
		var defs = JSON.parseNoSecurity(defEl.value);
		var oprEl = document.getElementById(rowId + "_OprSel");
		var opr = oprEl.options[oprEl.selectedIndex].value;
		var targetCell = document.getElementById(rowId + "_ValueArea");
		targetCell.innerHTML = '';
		
		if(opr.indexOf('tp_') == 0 || opr == 'IS NOT NULL' || opr == 'IS NULL'){
			targetCell.innerHTML = "<input type='hidden' id='" + rowId + "_ValInput' value='none' />";
		}else if(type == "bool"){
			var v = "1";
			if(oprEl.selectedIndex == 1){ //If no is selected
				v = "0";
			}
			targetCell.innerHTML = "<input type='hidden' id='" + rowId + "_ValInput' value='" + v + "' />";
		}else if(type.indexOf('enum') >= 0){
			var conf = {
				multiple: opr == 'NOT IN' || opr == 'IN',
				size: 5,
				options: defs.options,
				id:  rowId + "_ValInput",
				value:  value
			};
			
			reports.addSelectInput(conf, targetCell);
		}else{
			var conf = {
				date: false,
				single: true,
				id:  rowId + "_ValInput",
				value:  value
			};
			if(type.indexOf('date') >= 0){
				conf.date = true;
			}
			if(opr == 'BETWEEN'){
				conf.single = false;
			}
			reports.addTextInput(conf, targetCell)
		}
	},
	
	//Add Select Field to Filter Value Area
	addSelectInput: function(conf, targetCell){
		var selectEl = document.createElement('select');
		selectEl.setAttribute('id', conf.id);
	
		if(conf.multiple){
			selectEl.setAttribute('multiple', conf.multiple);
			selectEl.setAttribute('size', conf.size);
		}
		
		for(var i in conf.options){
			if(typeof(conf.options[i]) == 'string'){
				selectEl.options.add(new Option(conf.options[i], i));
			}
		}
		
		//Manage Selected options
		if(typeof(conf.value) != "undefined"){
			conf.value = conf.value.split(",");
			
			for(var i=0; i<selectEl.options.length; i++){
				for(var j=0; j<conf.value.length; j++){
					if(selectEl.options[i].value == conf.value[j]){
						selectEl.options[i].selected = true;
						break;
					}
				}
			}
		}
		
		targetCell.appendChild(selectEl);
	},
	
	//Add text Field to Filter Value Area
	addTextInput: function(conf, targetCell){
		if(typeof(conf.value) != "undefined"){
			conf.value = conf.value.split("<=>");
			if(conf.value.length == 1){
				conf.value.push("");
			}
		}else{
			conf.value = ["",""];
		}
		
		targetCell.innerHTML = "<input type='text' id='" + conf.id + "' value='" + conf.value[0] + "' size='10' style='width:auto;' />"; 
		if(conf.date){
			targetCell.innerHTML += "<img src='themes/" + SUGAR.themes.theme_name + "/images/jscalendar.gif' id='" + conf.id + "_date' style='float:none;' />";
			Calendar.setup({
                inputField: conf.id,
                button: conf.id + "_date",
                ifFormat: cal_date_format,
                showsTime: false,
                singleClick: true,
                weekNumbers: false,
                step: 1
            }); 
		}
		if(!conf.single){
			targetCell.innerHTML += " &nbsp;&nbsp;" +
									SUGAR.language.get('RT_Report', 'LBL_AND') +
									" &nbsp;&nbsp;" +
									"<input type='text' id='" + conf.id + "_1' value='" + conf.value[1] + "' size='10' style='width:auto;' />";
			if(conf.date){
				targetCell.innerHTML += "<img src='themes/" + SUGAR.themes.theme_name + "/images/jscalendar.gif' id='" + conf.id + "_1_date' style='float:none;' />";
				Calendar.setup({
					inputField: conf.id + "_1",
					button: conf.id + "_1_date",
					ifFormat: cal_date_format,
					showsTime: false,
					singleClick: true,
					weekNumbers: false,
					step: 1
				});
			}
		}
	},
	
	//Delete the display column
	deleteRow: function (row) {
		var deleteRow = document.getElementById(row);
		if(deleteRow != null){
			var tBody = deleteRow.parentNode;
			if(tBody != null){
				tBody.removeChild(deleteRow);
			}
		}
	},
	
	//Returns sub filters for the provided parent filter
	addSubFilter: function(parentFilterId, operator){
		var parentFilterMeta = reports.filters[parentFilterId];		
		var index = reports.getIndexForSubFilter(parentFilterMeta.subFilters);		
		var subFilterIndex = index + 1;		
		var filterId = 'filter' + parentFilterMeta.index + '.' + subFilterIndex;		
		var filterIndex = parentFilterMeta.index + '.' + subFilterIndex;		
		var subFilterSubId = 'filter' + filterIndex + '_subFilters';		
		reports.filters[filterId] = {
			index: filterIndex, 
			filterId: filterId, 
			subFilterId: subFilterSubId, 
			parentId: parentFilterId,
			parentIndex: index,
			subFilters: new Array()
		};
		reports.filters[parentFilterId].subFilters[index] = 1;
		
		var table = document.getElementById(parentFilterMeta.subFilterId);
		var row = table.insertRow(index);
		row.setAttribute('id', 'Row_' + filterId);
		row.setAttribute('type', 'sub');
		
		var cell = row.insertCell(0);
		cell.setAttribute('class', 'ledgentTD');
		cell.innerHTML = 	"&nbsp;";
							
		var cell = row.insertCell(1);
		cell.setAttribute('scope', 'row');
		
		var andOp = 'selected=""';
		var orOp = '';
		
		if(typeof(operator) != "undefined"){
			if(operator == "OR"){
				andOp = '';
				orOp = 'selected=""';
			}
		}
		
		cell.innerHTML = '<div class="x-panel">' + 
				'<div class="x-panel-header x-unselectable">' +
					'<span class="spantitle">Filter:  ' + filterIndex + '</span>' +
				'</div>' +
				'<div class="x-panel-body">' +
					'<table cellspacing="0" class="sugar-subpanel-header-row" width="100%">' +
						'<tr>' +
							'<td nowrap="">' +
								'' + SUGAR.language.get('RT_Report', 'LBL_SELECT_OPERATOR') + '' +
							'	<select id="' + filterId + 'Opr">' +
									'<option ' + andOp + ' value="AND">' + SUGAR.language.get('RT_Report', 'LBL_AND') + '</option>' +
									'<option ' + orOp + ' value="OR">' + SUGAR.language.get('RT_Report', 'LBL_OR') + '</option>' +
								'</select>' +
							'</td>' +
							'<td nowrap="" align="right">' +
								'<input type="button" onclick="reports.addSubFilter(\'' + filterId + '\')" value="' + SUGAR.language.get('RT_Report', 'LBL_ADD_SUB_FILTER') + '" class="button">' +
								'<img title="Delete Filters" onclick="reports.removeSubFilter(\'' + filterId + '\')" src="themes/' + 
							SUGAR.themes.theme_name + '/images/delete_inline.gif" />' +
							'</td>' +
						'</tr>' +
					'</table>' +
					'<table cellspacing="0" id="' + filterId + '" width="100%">' +
					'</table>' +
					'<table cellspacing="0" id="' + subFilterSubId + '" width="100%">' +
					'</table>' +
				'</div>' +
			'</div>';
			
		return filterId;
	},
	
	//Get available index to add sub filter
	getIndexForSubFilter: function(subFilters){
		for(var i=0; i<subFilters.length; i++){
			if(subFilters[i] == 0){
				return i;
			}
		}
		return subFilters.length;
	},
	
	//Removes sub filter from parent filter
	removeSubFilter: function(filterId){
		//Removing SubFilters tabke
		var subFilterRow = document.getElementById('Row_' + filterId);
		subFilterRow.parentNode.removeChild(subFilterRow);
		
		var filterMeta = reports.filters[filterId];		
		reports.filters[filterMeta.parentId].subFilters[filterMeta.parentIndex] = 0;
		reports.filters[filterId] = null;
		reports.jQ("ul.jqx-menu-dropdown li").each(function(){
			if(reports.jQ(this).attr("id")== filterId ){
				reports.jQ(this).remove();
			}
		});
	},	
	
	//Add field to display column area
	addFieldToDisplayCols: function(record){
		var field_defs = record.field_defs;
		var table = document.getElementById('displayColsTable').getElementsByTagName("tbody")[0];
		var rowcount = 0;
		if(table.rows.length > 0){
			rowcount = parseInt(table.rows[table.rows.length-1].id.replace('displayColsRow_', '')) + 1;
		}
		var rowId = 'displayColsRow_' + rowcount;
		var row = table.insertRow(table.rows.length);
		row.setAttribute('id', rowId);
		
		var colLabel = record.comboLabel;
		if(typeof(record.agg_func) == "undefined"){
			colLabel += " > " + record.field_label;
		}
		
		field_name = record.field_name;		
		if(reports.jQ("#filter_type").val() == 'display_filters'){
			var tempArr = {id: record.field_label, value: field_name, rowId: rowId};
			reports.config.dataSeries.push(tempArr);
		}				
		var cell = row.insertCell(0);
		cell.setAttribute('scope', 'row');
		cell.innerHTML = 	"<input type='hidden' id='" + rowId + "_module' value='" + record.module_name + "' />" + 
							"<input type='hidden' id='" + rowId + "_link' value='" + record.link_name + "' />" + 
							"<input type='hidden' id='" + rowId + "_field' value='" + field_name + "' />" +
							"<input type='hidden' id='" + rowId + "_defs' value='" + JSON.stringifyNoSecurity(field_defs) + "' />" +
							"<input type='hidden' id='" + rowId + "_col_name' value='" + colLabel + "' />";
							
		cell = row.insertCell(1);
		cell.setAttribute('scope', 'row');
		cell.innerHTML=colLabel;
		colLabel = record.field_label
		cell.setAttribute("onmouseover", "this.style.cursor = 'move'");
		
		cell = row.insertCell(2);
		cell.setAttribute('style', 'vertical-align:top');
		cell.setAttribute('scope', 'row');
		cell.innerHTML = "<input type='text' size='50' id= '"+rowId+"_label' value='" + colLabel + "' onclick='this.focus();' />";
		cell = row.insertCell(3);
		cell.setAttribute('scope', 'row');
		cell.innerHTML = "<input type='radio' name='order_by_radio' id='" + rowId + "_OrderBy' onClick='reports.orderBySelected(\"" + rowId + "\")' />";
		cell.innerHTML += "<span id='" + rowId + "_orderByDirection'></span>";
		
		/* Aggrigate Function START */
		cell = row.insertCell(4);
		cell.setAttribute('scope', 'row');
		var selectEl = document.createElement('select');
		var selectedIndex = -1;
		
		//for all other fields
		var aggregateFunctionOptions = reports.otherFunctionOptions;
		
		if(typeof(field_defs) != "undefined"){
			//for date fields
			if(field_defs.type.indexOf('date') >= 0){
				aggregateFunctionOptions = reports.dateFunctionOptions;
			}
			
			//for number fields
			if(
				field_defs.type == "bool" || 
				field_defs.type == "currency" || 
				field_defs.type == "decimal" || 
				field_defs.type == "float" || 
				field_defs.type == "int"
			){
				aggregateFunctionOptions = reports.intFunctionOptions;
			}
		}
		for(var i=0; i<aggregateFunctionOptions.length; i++){
			selectEl.options.add(new Option(aggregateFunctionOptions[i].text, aggregateFunctionOptions[i].value));
			
			if(typeof(record.agg_func) != "undefined" && record.agg_func == aggregateFunctionOptions[i].value){
				selectedIndex = i;
			}
		}
		
		if(selectedIndex != -1){
			selectEl.selectedIndex = selectedIndex;
		}
		
		selectEl.setAttribute('id', rowId + "_FuncSel");
		cell.appendChild(selectEl);
		/* Aggrigate Function END */
		
		cell = row.insertCell(5);
		cell.setAttribute('scope', 'row');
		cell.setAttribute("onmouseover", "this.style.cursor = 'pointer'");
		cell.innerHTML = "<img onclick='reports.deleteRow(\"" + rowId + "\")' src='themes/" + 
							SUGAR.themes.theme_name + "/images/delete_inline.gif'>";		
		reports.jQ("#displayColsTable").find("tbody").tableDnD();
	},
	
	//Displays direction dropdown if orderby is selected for a display column
	orderBySelected: function (rowId) {
		if (reports.orderById != null) {
			var el = document.getElementById(reports.orderById + "_orderByDirection");
			if(el != null){
				el.innerHTML = '';
			}
		}
		
		var directionSpan = document.getElementById(rowId + "_orderByDirection");
		if(directionSpan != null){
			directionSpan.innerHTML = '<select id="orderByDirection"><option selected="selected" value="ASC">' + 
										SUGAR.language.get('RT_Report', 'LBL_ASCENDING') + 
										'</option>' + '<option value="DESC">' + 
										SUGAR.language.get('RT_Report', 'LBL_DESCENDING') + 
										'</option></select>';
			reports.orderById = rowId;
		}
	},
	
	//Add field to Group By  area
	addFieldToGroups: function(record){
		var field_defs = record.field_defs;
		var table = document.getElementById('groupByColsTable');
		var rowcount = 1;
		if(table.rows.length > 1){
			rowcount = parseInt(table.rows[table.rows.length-1].id.replace('groupByColsRow_', '')) + 1;
		}
		var rowId = 'groupByColsRow_' + rowcount;
		var row = table.insertRow(table.rows.length);
		row.setAttribute('id', rowId);
		
		var colLabel = record.comboLabel;
		if(typeof(record.field_label) != "undefined"){
			colLabel += " > " + record.field_label;
		}
		
		var cell = row.insertCell(0);
		cell.setAttribute('scope', 'row');
		cell.innerHTML = 	"<input type='hidden' id='" + rowId + "_module' value='" + record.module_name + "' />" + 
							"<input type='hidden' id='" + rowId + "_link' value='" + record.link_name + "' />" + 
							"<input type='hidden' id='" + rowId + "_field' value='" + record.field_name + "' />" + 
							"<input type='hidden' id='" + rowId + "_col_name' value='" + colLabel + "' />";
							
		cell = row.insertCell(1);
		cell.setAttribute('scope', 'row');		
		cell.innerHTML = colLabel;
		
		cell = row.insertCell(2);
		cell.setAttribute('scope', 'row');
		cell.innerHTML = "<img onclick='reports.deleteRow(\"" + rowId + "\")' src='themes/" + 
							SUGAR.themes.theme_name + "/images/delete_inline.gif'>";
	},
	
	//Updates filter defs field to post configurations
	update_filters_def: function(){
		var opr_el = document.getElementById('mainFilterOpr');
		var subFilters = reports.get_sub_filters_defs('mainSubFilters');
		var fields = reports.get_filters_fields_defs('mainFilters');
		
		if(typeof(subFilters)== 'boolean' || typeof(fields)== 'boolean'){
			return false;
		}
		
		reports.config.filters_def = {
			operator: opr_el.options[opr_el.selectedIndex].value,
			fields: fields,
			sub_filters: subFilters
		};
		
		return true;	
	},
	
	//Returns the filter defs for sub filters of the parent filter with provided id
	get_sub_filters_defs: function(subFiltersTableId){
		var subFiltersTable = document.getElementById(subFiltersTableId);

		var sub_filters_defs = new Array();
		for(var i=0; i<subFiltersTable.rows.length; i++){
			var row = subFiltersTable.rows[i];
			var filterId = row.id.replace('Row_','');
			var filterMeta = reports.filters[filterId];
			
			var opr_el = document.getElementById(filterId + 'Opr');
			var subFilters = reports.get_sub_filters_defs(filterMeta.subFilterId);
			var fields = reports.get_filters_fields_defs(filterId);
			
			if(typeof(subFilters)== 'boolean' || typeof(fields)== 'boolean'){
				return false;
			}
			
			var filter_defs = {
				operator: opr_el.options[opr_el.selectedIndex].value,
				fields: fields,
				sub_filters: subFilters
			};
			
			sub_filters_defs.push(filter_defs);
		}
		
		return sub_filters_defs;
	},
	
	//Returns the field definitions for the filter with provided id
	get_filters_fields_defs: function(filtersTableId){
		var table = document.getElementById(filtersTableId);
		var fields_def = new Array();
		
		for (var i = 0; i < table.rows.length; i++) {
			var row = table.rows[i];
			
			reports.updateFilterValues(row.id);
			
			if(document.getElementById(row.id + '_value').value == ''){
				return false;
			}
			
			var field_def = {
				name: document.getElementById(row.id + '_field').value,
				module: document.getElementById(row.id + '_module').value,
				link: document.getElementById(row.id + '_link').value,
				col_name: document.getElementById(row.id + '_col_name').value,
				operator: document.getElementById(row.id + '_operator').value,
				value: document.getElementById(row.id + '_value').value,
				defs: JSON.parseNoSecurity(document.getElementById(row.id + '_defs').value)
			};
			
			fields_def.push(field_def);
		}
		
		return fields_def;
	},
	
	//Updates the filter operator and value field before selecting data
	updateFilterValues: function(rowId){
		var oprEl = document.getElementById(rowId + "_OprSel");
		document.getElementById(rowId + '_operator').value = oprEl.options[oprEl.selectedIndex].value;
		
		var valEl = document.getElementById(rowId + "_ValInput");
		var value = '';
		if(valEl.tagName.toLowerCase() == 'select'){
			if(valEl.multiple){
				var sep = '';
				for(var i=0; i<valEl.options.length; i++){
					if(valEl.options[i].selected){
						value += sep + valEl.options[i].value;
						sep = ',';
					}
				}
			}else{
				value = valEl.options[valEl.selectedIndex].value;
			}
		}else{
			value = valEl.value;
			if(oprEl.options[oprEl.selectedIndex].value == 'BETWEEN'){
				value += '<=>' + document.getElementById(rowId + "_ValInput_1").value;
			}
		}
		
		document.getElementById(rowId + '_value').value = value;
	},	
	
	//Updates display column defs field to post configurations
	update_cols_def: function(){
		var table = document.getElementById('displayColsTable');
		
		reports.config.display_columns = new Array();
		
		for (var i = 1; i < table.rows.length; i++) {
			var row = table.rows[i];
			var displayCol = {
				name: document.getElementById(row.id + '_field').value,
				label: document.getElementById(row.id + '_label').value,
				module: document.getElementById(row.id + '_module').value,
				link: document.getElementById(row.id + '_link').value,
				col_name: document.getElementById(row.id + '_col_name').value,
				agg_func: document.getElementById(row.id + '_FuncSel').value,
				defs: JSON.parseNoSecurity(document.getElementById(row.id + '_defs').value)
			};
			
			reports.config.display_columns.push(displayCol);
			
			if(document.getElementById(row.id + '_OrderBy').checked){
				reports.config.order_by.name = displayCol.name;
				reports.config.order_by.link = displayCol.link;
				
				var sel = document.getElementById('orderByDirection');
				if(sel != null){
					reports.config.order_by.dir = sel.options[sel.selectedIndex].value;
				}
			}
		}
	},
	
	//Updates Groupby field to post configurations
	update_groupby_def: function(){
		var table = document.getElementById('groupByColsTable');
		
		reports.config.group_by = new Array();
		
		for (var i = 1; i < table.rows.length; i++) {
			var row = table.rows[i];
			var groupByCol = {
				name: document.getElementById(row.id + '_field').value,				
				module: document.getElementById(row.id + '_module').value,
				link: document.getElementById(row.id + '_link').value,
				col_name: document.getElementById(row.id + '_col_name').value
			};
			
			reports.config.group_by.push(groupByCol);			
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
	
	//populate Display Columns from Array
	populate_diplay_cols: function(){
		//Empty the table
		var table = document.getElementById('displayColsTable').getElementsByTagName("tbody")[0];
		if(table != null && table.rows.length > 0){
			var tBody = table.rows[0].parentNode;
			if(tBody != null){
				while(table.rows.length > 0){
					tBody.removeChild(table.rows[0]);
				}
			}
		}
		
		//Load table from saved Array
		var orderId = -1;
		for(var i=0; i<reports.config.display_columns.length; i++){
			var obj = {
				field_label: reports.config.display_columns[i].label,
				field_name: reports.config.display_columns[i].name,
				field_defs: reports.config.display_columns[i].defs,
				agg_func: reports.config.display_columns[i].agg_func,
				module_name: reports.config.display_columns[i].module,
				link_name: reports.config.display_columns[i].link,
				parent_module: '',
				comboLabel: reports.config.display_columns[i].col_name
			};
			
			reports.addFieldToDisplayCols(obj);
			
			if(
				reports.config.display_columns[i].link == reports.config.order_by.link && 
				reports.config.display_columns[i].name == reports.config.order_by.name
			){
				orderId = i;
			}
		}
		
		//Setting orderBy
		if(orderId != -1){
			var rowId = 'displayColsRow_' + orderId;
			
			reports.orderBySelected(rowId);
			
			var orderBy = document.getElementById(rowId + "_OrderBy");
			if(orderBy != null){
				orderBy.checked = true;
			}
			
			var direction = document.getElementById("orderByDirection");
			
			if(direction != null){
				if(reports.config.order_by.dir == "DESC"){
					direction.selectedIndex = 1;
				}else{
					direction.selectedIndex = 0;
				}
			}
		}
	},
	
	//populate Group By from Array
	populate_group_by: function(){
		//Empty the table
		var table = document.getElementById('groupByColsTable');
		if(table != null && table.rows.length > 1){
			var tBody = table.rows[0].parentNode;
			if(tBody != null){
				while(table.rows.length > 1){
					tBody.removeChild(table.rows[1]);
				}
			}
		}
		
		//Load table from saved Array
		for(var i=0; i<reports.config.group_by.length; i++){
			var obj = {
				field_name: reports.config.group_by[i].name,
				module_name: reports.config.group_by[i].module,
				link_name: reports.config.group_by[i].link,
				comboLabel: reports.config.group_by[i].col_name
			};
			
			reports.addFieldToGroups(obj);
		}
	},
	
	//populate Filters from Object
	populate_filters: function(){
		//Setting meta data
		reports.filters["mainFilters"] = {
			index: "1", 
			filterId: "mainFilters", 
			subFilterId: "mainSubFilters", 
			parentId: "",
			parentIndex: "",
			subFilters: new Array()
		};
		
		//Empty the tables
		var table = document.getElementById('mainFilters');
		if(table != null && table.rows.length > 0){
			var tBody = table.rows[0].parentNode;
			if(tBody != null){
				while(table.rows.length > 0){
					tBody.removeChild(table.rows[0]);
				}
			}
		}
		
		var table = document.getElementById('mainSubFilters');
		if(table != null && table.rows.length > 0){
			var tBody = table.rows[0].parentNode;
			if(tBody != null){
				while(table.rows.length > 0){
					tBody.removeChild(table.rows[0]);
				}
			}
		}
		
		//Load tables from saved Array
		reports.populate_filter_fields('mainFilters', reports.config.filters_def.fields);
		reports.populate_sub_filters('mainFilters', reports.config.filters_def.sub_filters);
		
		//Selecting operator
		var opSel = document.getElementById('mainFilterOpr');
		if(opSel != null){
			opSel.selectedIndex = reports.config.filters_def.operator == "OR" ? 1: 0;
		}
	},
	
	populate_filter_fields: function(targetId, fields){
		for(var i=0; i<fields.length; i++){
			var label = fields[i].name;
			if(fields[i].col_name.lastIndexOf('>') != -1){
				label = fields[i].col_name.substr(fields[i].col_name.lastIndexOf('>')+1, fields[i].col_name.length);
			}
			
			var obj = {
						field_label: label,
						field_name: fields[i].name,
						field_defs: fields[i].defs,
						module_name: fields[i].module,
						link_name: fields[i].link,
						comboLabel: fields[i].col_name,
						operator: fields[i].operator, 
						value: fields[i].value
					};
				
			reports.addInFilters(targetId, obj);
		}
	},
	
	populate_sub_filters: function(targetId, filters){
		for(var i=0; i<filters.length; i++){
			//creating subfilter
			var id = reports.addSubFilter(targetId, filters[i].operator);
			
			reports.populate_filter_fields(id, filters[i].fields);
			reports.populate_sub_filters(id, filters[i].sub_filters);
		}
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
			var text = reports.config.display_columns[i].label;
			var val = reports.config.display_columns[i].link + "::" + reports.config.display_columns[i].name;
									
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
	
	//load wizard
	load_wizard: function(){
		reports.jQ('#wizard').smartWizard({
			enableFinishButton: true,
			enableAllSteps: true,
			
			onShowStep: function (obj) {
				switch(parseInt(obj.attr('rel'))){
					case 1:
						reports.jQ('#module_tree').hide();
						reports.addFieldsScope = '';
					break;
					case 2:	
						reports.jQ('#module_tree').show();
						reports.addFieldsScope = 'cols';
						reports.populateTree();
						reports.populate_diplay_cols();
					break;
					case 3:	
						reports.jQ('#module_tree').show();
						reports.addFieldsScope = 'filters';
						reports.populateTree();
						reports.populate_filters();
					break;
					case 4:
						reports.jQ('#module_tree').show();
						reports.addFieldsScope = 'grp';
						reports.populateTree();
						reports.populate_group_by();
					break;
					case 5:	
						reports.jQ('#module_tree').hide();
						reports.addFieldsScope = '';
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
					break;
					case 3:	
						return reports.isValidStep3();
					break;
					case 4:
						reports.update_groupby_def();
					break;
					case 5:	
						reports.update_charts_def();
					break;
				}
				
				return true;
			},
			
			onFinish: function (obj) {
				var valid = reports.isValidStep1();
				valid = reports.isValidStep2() && valid;
				valid = reports.isValidStep3() && valid;
				valid = reports.isValidStep5() && valid;
				
				if(!valid){
					return false;
				}
				
				reports.update_groupby_def();
				reports.update_charts_def();
				
				//Submitting form
				reports.jQ("#config").val(JSON.stringifyNoSecurity(reports.config));	
				reports.jQ("#EditView").submit();
			}
		});
	},
	
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
	
	highlistSelectedModule: function(module){	
		var override = true;
		if(reports.jQ("#module_name").val() != "" && reports.jQ("#module_name").val() != module && !reports.isConfigCleared()){
			override = confirm("All the configurations will be lost. Do you want to change the module?");
			
			if(override){
				reports.clearConfig();
			}
		}
		
		if(override){
			reports.jQ("div").removeClass('highlightSelectedModule');
			reports.jQ("#"+module).addClass('highlightSelectedModule');
		
			reports.jQ("#module_name").val(module);
		}
	},
	
	initialize: function(){
		reports.jQ(document).ready(function(){	
			reports.load_wizard();
			
			if(reports.jQ("#module_name").val() != ""){
				reports.highlistSelectedModule(reports.jQ("#module_name").val());
			}
			
			reports.loadAllData();
		});
		
		reports.jQ(document).mousemove(function(e) {
			reports.mousePos.x = e.pageX;
			reports.mousePos.y = e.pageY;
		});
	},
	
	//Function for cancel Button
	cancelClick: function (){
		if(reports.jQ("#record").val() != ""){
			window.location = "index.php?module=RT_Report&action=DetailView&record=" + reports.jQ("#record").val();
		}else{
			window.location = "index.php?module=RT_Report&action=ListView";
		}
	},
	
	//Loading data
	loadAllData: function(){
		reports.populate_diplay_cols();
		reports.populate_filters();
		reports.populate_group_by();
		reports.populate_chart();
	},
	
	clearConfig: function(){
		reports.config = {
			display_columns: new Array(), 
			order_by: {name: '', dir: 'ASC', link: ''},
			filters_def: {
				operator: "",
				fields: new Array(),
				sub_filters: new Array()
			},
			group_by: new Array(),
			chart: {
				enable: false,
				type: '',
				showData: true,
				axisIdentifier : new Array(),
				axisDataColumn : new Array(),
			}
		};
		
		if(reports.tree != null){
			reports.tree.destroy();
			reports.tree = null;
		}
		
		reports.loadAllData();
	},
	
	isConfigCleared: function(){
		if(reports.config.display_columns.length > 0){
			return false;
		}
		
		if(reports.config.group_by.length > 0){
			return false;
		}
		
		if(reports.config.filters_def.fields.length > 0){
			return false;
		}
		
		if(reports.config.filters_def.sub_filters.length > 0){
			return false;
		}
		
		return true;
	},
	
	isValidStep1: function(){
		if(reports.jQ("#name").val() == ""){
			reports.jQ("#name_error").show();
		}else{
			reports.jQ("#name_error").hide();
		}
		
		if(reports.jQ("#module_name").val() == ""){
			reports.jQ("#module_name_error").show();
		}else{
			reports.jQ("#module_name_error").hide();
		}
		
		if(reports.jQ('#name').val() == "" || reports.jQ('#module_name').val() == ""){							
			reports.jQ('#wizard').smartWizard('setError',{stepnum:1,iserror:true});
			
			return false;
		}else{
			reports.jQ('#wizard').smartWizard('setError',{stepnum:1,iserror:false});
			
			return true;
		}
	},
	
	
	isValidStep2: function(){
		reports.update_cols_def();
						
		if(reports.config.display_columns.length <= 0){
			reports.jQ('#wizard').smartWizard('setError',{stepnum:2,iserror:true});
			reports.jQ('#step_2_error').show();
			
			return false;
		}else{
			reports.jQ('#wizard').smartWizard('setError',{stepnum:2,iserror:false});
			reports.jQ('#step_2_error').hide();
			
			return true;
		}
	},
	
	
	isValidStep3: function(){
		if(!reports.update_filters_def()){
			reports.jQ('#wizard').smartWizard('setError',{stepnum:3,iserror:true});
			reports.jQ('#step_3_error').show();
			
			return false;
		}else{
			reports.jQ('#wizard').smartWizard('setError',{stepnum:3,iserror:false});
			reports.jQ('#step_3_error').hide();
			
			return true;
		}
	},
	
	isValidStep5: function(){
	  if($("#enable_chart").is(":checked"))
	  {
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
			reports.jQ('#wizard').smartWizard('setError',{stepnum:5,iserror:true});
			
			return false;
		}else{
			reports.jQ('#wizard').smartWizard('setError',{stepnum:5,iserror:false});
			
			return true;
		}
	  }
	  	return true;
		
	},
}

