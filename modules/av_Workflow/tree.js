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
		//checkNodes(treeHelper.tree.getRoot());
		treeHelper.tree.setNodesProperty('propagateHighlightUp',false);
		treeHelper.tree.setNodesProperty('propagateHighlightDown',true);
		treeHelper.tree.subscribe('clickEvent',treeHelper.tree.onEventToggleHighlight);
        treeHelper.tree.subscribe("checkClick");	
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
		var wfID = document.getElementsByName('record')[0].value;
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
	var wfID = document.getElementsByName('record')[0].value;
	treeHelper.loadData(wfID);
}

function pageReady(){
	generateTree();
	_form = document.DetailView;
	var elem = document.createElement('input');
	elem.setAttribute('name', 'template_ids');
	elem.setAttribute('id', 'template_ids');
	elem.setAttribute('type', 'hidden');
	document.getElementById('formDetailView').appendChild(elem);
	//setTimeout(dropEmptyRows,2000);
}
/*
function dropEmptyRows(){
	$("div[name=parent_blank]").each(function (i) {$(this).parent().parent().hide();});
}
*/
function setCheckedTemplateIDs(){	
	var array_checked = new Array();
	var array_semi_checked = new Array();
	var array = new Array();
	var checked_template_ids = '';
	var idsEL = document.getElementById('template_ids');
	
	if(idsEL != null){
		if(treeHelper.tree != null){
			array_checked = treeHelper.tree.getNodesByProperty ('highlightState', 1 );
			array_semi_checked = treeHelper.tree.getNodesByProperty ('highlightState', 2 );
			if(array_checked != null){
				array = array_checked.concat(array_semi_checked);
			}
			for(i=0; i<array.length; i++){
				if(array[i] != null){
					checked_template_ids += array[i]['data']['id']+', ';
				}
			}
		}
		
		idsEL.value = checked_template_ids;
	}
}/*
function checkNodes(node)
{
	for (var i = 0; i < node.children.length; i++)
	{
		checkNodes(node.children[i]);
		node.children[i].highlightState=1;
	}
}*/
YAHOO.util.Event.onDOMReady(pageReady);