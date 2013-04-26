var treeHelper = {
	oCurrentTextNode : null,
	tree : null,
	loaded : false,
	
	loadData: function (projectID)  {
		var sUrl = "index.php?module=Project&action=getTreeData&record="+projectID+"&sugar_body_only=true";
	
		var callback = {
			success: function(oResponse) {
				YAHOO.log("XHR transaction was successful.", "info", "example");			
				treeHelper.buildTree(eval(YAHOO.lang.JSON.parse(oResponse.responseText)));
			},
			failure: function(oResponse) {
				YAHOO.log("Failed to process XHR transaction.", "info", "example");
			},
			timeout: 7000
		};
		YAHOO.util.Connect.asyncRequest('POST', sUrl, callback);  
	},
	
	buildTree : function(data){
		treeHelper.tree = new YAHOO.widget.TreeView("tree_panel3", data); 
		treeHelper.tree.render();
 
		treeHelper.loaded = true;
		var oContextMenu = new YAHOO.widget.ContextMenu( 
			"mytreecontextmenu", 
			{ 
				trigger: "tree_panel3", 
				lazyload: true, 
				itemdata: [ 
					{ text: "Open", onclick: {fn: treeHelper.openNode}},
					{ text: "Edit", onclick: {fn: treeHelper.editNode}},
					{ text: "Delete", onclick: {fn: treeHelper.deleteNode}},
					{ text: "Create Dependent Task", onclick: {fn: treeHelper.createNode}} 
				] 
			} 
		);
		
		oContextMenu.subscribe("triggerContextMenu", treeHelper.onTriggerContextMenu);
	},
	
	checkClick: function(oArgs) {
		node.logger.log("previous checkstate: " + node.checkState);
		if (node.checkState === 0) {
		} else {
		}

		node.onCheckClick(node);
		this.fireEvent("checkClick", node);
		return false;
	},
	
	onTriggerContextMenu : function(p_oEvent) {
		var oTarget = this.contextEventTarget; 
		treeHelper.oCurrentTextNode = treeHelper.tree.getNodeByElement(oTarget); 	 
		if (!treeHelper.oCurrentTextNode) { 
			this.cancel(); 
		} 
	},
	
	openNode : function () {
		window.open(treeHelper.oCurrentTextNode.data.href);
	},

	editNode : function (){
		window.open((treeHelper.oCurrentTextNode.data.href).replace(/DetailView/g, "EditView"));
	},
	
	createNode : function (){
		var href = treeHelper.oCurrentTextNode.data.href.replace(/DetailView/g, "EditView");
		var projectID = document.getElementsByName('record')[0].value;
		if(href.indexOf('Tasks') > 0){
			href = href.replace(/record/g, "parent_tasks_id");
			href += '&parent_tasks_name=';
		}else{
			href = href.replace(/Project/g, "Tasks");
			href = href.replace(/record/g, "project_id");
			href += '&project=';
		}
		window.location = href + treeHelper.oCurrentTextNode.data.label+'&return_module=Project&return_action=DetailView&return_id='+projectID;
	},

	deleteNode : function () {
		var id= (treeHelper.oCurrentTextNode.data.href).split("record=");
		id = id[1].substr(0,36);
		confirmDelete(id);
	}
}

function generateTree(){
	var projectID = $('[name="record"]').val();
	treeHelper.loadData(projectID);
}
YAHOO.util.Event.onDOMReady(generateTree);