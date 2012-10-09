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
				alert(oResponse.responseText);
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
        treeHelper.tree.subscribe("checkClick");	
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
						{ text: "Create Dependent Task", onclick: {fn: treeHelper.createNode}} 
					] 
				} 
			);
			
			oContextMenu.subscribe("triggerContextMenu", treeHelper.onTriggerContextMenu);
		}
	},
	checkClick: function(oArgs) {
			var node = oArgs.node;
			var target = YAHOO.util.Event.getTarget(oArgs.event);
			if (YAHOO.util.Dom.hasClass(target,'ygtvspacer')) {
			node.logger.log("previous checkstate: " + node.checkState);
			if (node.checkState === 0) {
			node.check();
			} else {
			node.uncheck();
			}

			node.onCheckClick(node);
			this.fireEvent("checkClick", node);
			return false;
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
		window.open(treeHelper.oCurrentTextNode.data.href);
	},

	editNode : function (){
		window.open((treeHelper.oCurrentTextNode.data.href).replace(/DetailView/g, "EditView"));
	},
	
	createNode : function (){
		var href = treeHelper.oCurrentTextNode.data.href.replace(/DetailView/g, "EditView");
		
		if(href.indexOf('av_Workflow') > 0){
			href = href.replace(/av_Workflow/g, "av_Task_Template");
			href = href.replace(/record/g, "av_Workflow_id");
			href += '&av_Workflow_name=';
		}else{
			href = href.replace(/record/g, "parent_tasks_id");
			href += '&parent_tasks_name=';
		}
		window.open(href + treeHelper.oCurrentTextNode.data.label);
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
function pageReady()
{
	generateTree();
	_form = document.DetailView;
	var elem = document.createElement('input');
	elem.setAttribute('name', 'template_ids');
	elem.setAttribute('id', 'template_ids');
	elem.setAttribute('type', 'hidden');
	document.getElementById('formDetailView').appendChild(elem);
}
function setCheckedTemplateIDs(){
	
		var array_checked=new Array();
		var array_semi_checked=new Array();
		var array=new Array();
		var checked_template_ids='';
		array_checked=treeHelper.tree.getNodesByProperty ('highlightState', 1 );
		array_semi_checked=treeHelper.tree.getNodesByProperty ('highlightState', 2 );
		if(array_checked !=null){
			array=array_checked.concat(array_semi_checked);
		}
		for(i=0; i<array.length; i++){
			if(array[i] != null){
				checked_template_ids+=array[i]['data']['id']+', ';
				}
		}
		document.getElementById('template_ids').value = checked_template_ids;
		}
YAHOO.util.Event.onDOMReady(pageReady);