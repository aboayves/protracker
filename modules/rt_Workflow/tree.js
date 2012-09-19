var treeHelper = {
	oCurrentTextNode : null,
	tree : null,
	loaded : false,
	
	loadData: function (wfID)  {
		var sUrl = "index.php?module=rt_Workflow&action=getTreeData&record="+wfID+"&sugar_body_only=true";
	
		var callback = {
			success: function(oResponse) {
				YAHOO.log("XHR transaction was successful.", "info", "example");			
				treeHelper.buildTree(eval(YAHOO.lang.JSON.parse(oResponse.responseText)));
			},
			failure: function(oResponse) {
				YAHOO.log("Failed to process XHR transaction.", "info", "example");
				alert(oResponse.responseText);
			},
			timeout: 7000
		};
		YAHOO.util.Connect.asyncRequest('POST', sUrl, callback);  
	},
	
	buildTree : function(data){
		treeHelper.tree = new YAHOO.widget.TreeView("tree_plotting_div", data); 
		treeHelper.tree.render();
			
		if(!treeHelper.loaded){
			treeHelper.loaded = true;
			var oContextMenu = new YAHOO.widget.ContextMenu( 
				"mytreecontextmenu", 
				{ 
					trigger: "tree_plotting_div", 
					lazyload: true, 
					itemdata: [ 
						{ text: "Open", onclick: {fn: treeHelper.openNode}},
						{ text: "Edit", onclick: {fn: treeHelper.editNode}},
						{ text: "Delete", onclick: {fn: treeHelper.deleteNode}},
						{ text: "Create Dependednt Task", onclick: {fn: treeHelper.createNode}} 
					] 
				} 
			);
			
			oContextMenu.subscribe("triggerContextMenu", treeHelper.onTriggerContextMenu);
		}
	},
	
	onTriggerContextMenu : function(p_oEvent) {
		var oTarget = this.contextEventTarget; 
		treeHelper.oCurrentTextNode = treeHelper.tree.getNodeByElement(oTarget); 	 
		if (!treeHelper.oCurrentTextNode) { 
			this.cancel(); 
		} 
	},
	
	openNode : function () {
		window.open(treeHelper.oCurrentTextNode.getLabelEl().getAttribute("href"));
	},

	editNode : function (){
		window.open((treeHelper.oCurrentTextNode.getLabelEl().getAttribute("href")).replace(/DetailView/g, "EditView"));
	},
	
	createNode : function (){
		var href = treeHelper.oCurrentTextNode.getLabelEl().getAttribute("href").replace(/DetailView/g, "EditView");
		
		if(href.indexOf('rt_Workflow') > 0){
			href = href.replace(/rt_Workflow/g, "rt_task_Template");
			href = href.replace(/record/g, "rt_workflow_id");
			href += '&rt_workflow_name=';
		}else{
			href = href.replace(/record/g, "parent_tasks_id");
			href += '&parent_tasks_name=';
		}

		window.open(href + treeHelper.oCurrentTextNode.label);
	},

	deleteNode : function () {
		var id= (treeHelper.oCurrentTextNode.getLabelEl().getAttribute("href")).split("record=");
		id = id[1].substr(0,36);
		confirmDelete(id);
	}
}

function generateTree(){
	var wfID = document.getElementsByName('record')[0].value;
	treeHelper.loadData(wfID);
}

YAHOO.util.Event.onDOMReady(generateTree);