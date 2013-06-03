var treeHelper = {
	oCurrentTextNode : null,
	tree : null,
	loaded : false,
	
	loadData: function (wfID)  {
		var sUrl = "index.php?module=av_Workflow&action=getTreeData&record="+wfID+"&sugar_body_only=true";
	
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
		treeHelper.tree = new YAHOO.widget.TreeView("tree_plotting_div", data); 
		treeHelper.tree.setNodesProperty('propagateHighlightUp',true);
		treeHelper.tree.setNodesProperty('propagateHighlightDown',true);
		treeHelper.tree.subscribe('clickEvent',treeHelper.tree.onEventToggleHighlight);
		treeHelper.tree.render();
 
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
					{ text: "Create Dependent Task", onclick: {fn: treeHelper.createNode}} 
				] 
			} 
		);
		
		oContextMenu.subscribe("triggerContextMenu", treeHelper.onTriggerContextMenu);
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
		//var wfID = document.getElementsByName('record')[0].value;
		var wfID = $('[name="record"]').val();
		if(href.indexOf('av_Task_Template') > 0){
			href = href.replace(/record/g, "parent_tasks_id");
			href += '&parent_tasks_name=';
		}else{
			href = href.replace(/av_Workflow/g, "av_Task_Template");
			href = href.replace(/record/g, "av_Workflow_id");
			href += '&av_Workflow_name=';
		}
		window.location = href + treeHelper.oCurrentTextNode.data.label+'&return_module=av_Workflow&return_action=DetailView&return_id='+wfID
	},

	deleteNode : function () {
		var id= (treeHelper.oCurrentTextNode.data.href).split("record=");
		id = id[1].substr(0,36);
		confirmDelete(id);
	}
}

function generateTree(){
	//var wfID = document.getElementsByName('av_Workflow_id')[0].value;Don't use, it carashes in IE10
	var wfID = $('[name="av_Workflow_id"]').val();
	treeHelper.loadData(wfID);
}

function pageReady(){
	generateTree();
	setTimeout(dropEmptyRows,2000);
}

function dropEmptyRows(){
	$("div[name=parent_blank]").each(function (i) {$(this).parent().parent().hide();});
}

YAHOO.util.Event.onDOMReady(pageReady);