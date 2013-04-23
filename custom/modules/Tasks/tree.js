YAHOO.util.Event.onDOMReady(loadTree);
var disable_ajax = 1;
var oCurrentTextNode = null;
var tree;

var oContextMenu = new YAHOO.widget.ContextMenu( 
	"mytreecontextmenu", 
	{ 
		trigger: "tree_panel3", 
		lazyload: true, 
		itemdata: [ 
		
			{ text: "Open", onclick: { fn: openNode } } ,
			{ text: "Edit", onclick: { fn: editNode } } ,
			{ text: "Delete", onclick: { fn: deleteNode } } ,
			{ text: "Create Dependent Task", onclick: { fn: createNode } } 
		] 
	} 
); 
oContextMenu.subscribe("triggerContextMenu", onTriggerContextMenu);

function generateTree(){
	//var taskID = document.getElementsByName('record')[0].value;
	//var taskName = document.getElementsByName('task_name')[0].value;
	var taskID = $('[name="record"]').val();
	var taskName = $('[name="task_name"]').val();
	loadNodeData(taskID, taskName);
}

function loadTree(){
	if(disable_ajax){
		make_tree(tree_data1);
	}else{
		generateTree();
	}
	
	disable_ajax = 0;
	setTimeout("loadTree();", 10000);
}

 function onTriggerContextMenu(p_oEvent){
	var oTarget = this.contextEventTarget; 
	
	oCurrentTextNode = tree.getNodeByElement(oTarget); 	 
	if (!oCurrentTextNode) {
		this.cancel();
	} 
}

 function openNode(){
	window.open("index.php?module=Tasks&action=DetailView&record=" + oCurrentTextNode.data.id);
 }

 function editNode(){
		window.open("index.php?module=Tasks&action=EditView&record=" + oCurrentTextNode.data.id);
 }

 function deleteNode(){ 
	hasChild=oCurrentTextNode.hasChildren(); 
	confirmDelete(oCurrentTextNode.data.id, hasChild); 
}

function createNode(){
	window.location = "index.php?module=Tasks&action=EditView&parent_tasks_id=" + oCurrentTextNode.data.id + '&parent_tasks_name=' + oCurrentTextNode.data.label;
}
  
function loadNodeData(taskID, taskName)  {
	var pendingOnly = 0;
	var moreThen90 = 0;
	
	var el = document.getElementById('pending_only');
	if(el != null && el.checked){
		pendingOnly = 1;
	}
	el = document.getElementById('more_then_90');
	if(el != null && el.checked){
		moreThen90 = 1;
	}
	
    var sUrl = "index.php?module=Tasks&action=getTreeNodes&id="+taskID+"&name="+taskName+"&pending_only="+pendingOnly+"&more_then_90="+moreThen90+"&sugar_body_only=true";

    var callback = {

        success: function(oResponse) {
            YAHOO.log("XHR transaction was successful.", "info", "example");			
            make_tree(eval(YAHOO.lang.JSON.parse(oResponse.responseText)));
        },
        failure: function(oResponse) {
            YAHOO.log("Failed to process XHR transaction.", "info", "example");
//            alert(oResponse.responseText);
        },
        timeout: 7000
    };
    YAHOO.util.Connect.asyncRequest('POST', sUrl, callback);  
}


function make_tree(data1){
   tree = new YAHOO.widget.TreeView("tree_panel3", data1); 
   tree.subscribe("clickEvent", function(node) {
	   return false;
   });
   tree.render();
}