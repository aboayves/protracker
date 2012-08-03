YAHOO.util.Event.onDOMReady(generateTree);
var disable_ajax = 1;
var oCurrentTextNode = null;
var tree;

function generateTree(){
	if(disable_ajax)
	{
		tree = new YAHOO.widget.TreeView("tree_panel3", tree_data1); 
		tree.render();
			var oContextMenu = new YAHOO.widget.ContextMenu( 
			"mytreecontextmenu", 
			{ 
				trigger: "tree_panel3", 
				lazyload: true, 
				itemdata: [ 
				
					{ text: "Open", onclick: { fn: openNode } } ,
					{ text: "Edit", onclick: { fn: editNode } } ,
					{ text: "Delete", onclick: { fn: deleteNode } } 
				] 
			} 
		); 
	oContextMenu.subscribe("triggerContextMenu", onTriggerContextMenu);

		return;
	}
	else
	{
		var taskID = document.getElementsByName('record')[0].value;
		var taskName = document.getElementsByName('task_name')[0].value;
		loadNodeData(taskID, taskName);
	}
}

 function onTriggerContextMenu(p_oEvent) 
 {

          var oTarget = this.contextEventTarget; 
	
	    oCurrentTextNode = tree.getNodeByElement(oTarget); 	 
	    if (!oCurrentTextNode) { 
	
	 //    alert("no current text node !");
		    this.cancel(); 
	 
	    } 
}

 function openNode()
 {
		var id= (oCurrentTextNode.getLabelEl().getAttribute("href")).split("record=");
			id=id[1].substr(0,36);
			 window.open("index.php?module=Tasks&action=DetailView&record="+id);
}
 
 function editNode()
 {
		var id= (oCurrentTextNode.getLabelEl().getAttribute("href")).split("record=");
			id=id[1].substr(0,36);
			window.open("index.php?module=Tasks&action=editView&record="+id);
}
 
 function deleteNode()
 {
		var id= (oCurrentTextNode.getLabelEl().getAttribute("href")).split("record=");
			id=id[1].substr(0,36);
		//	alert(id);
		confirmDeleteTree(id);
		return;
	
/*		var url="http://localhost/ProTracker/index.php?module=Tasks&action=Delete&record="+id
	
	
	   var callback = {
		start: function(eventType, args) {
			// do something when startEvent fires.
			},
        success: function(oResponse) {
				document.location.reload(true);
        },
        failure: function(oResponse) {
            YAHOO.log("Failed to process transaction.", "info", "example");
            alert(oResponse.responseText);
        },
        timeout: 5000
    };
		 
		 YAHOO.util.Connect.asyncRequest('POST', url,callback); */
	 	
 }

function loadNodeData(taskID, taskName)  {

    var sUrl = "index.php?module=Tasks&action=getTreeNodes&id="+taskID+"&name="+taskName+"&sugar_body_only=true";

    var callback = {

        success: function(oResponse) {
            YAHOO.log("XHR transaction was successful.", "info", "example");			
            success_tree(eval(YAHOO.lang.JSON.parse(oResponse.responseText)));
        },
        failure: function(oResponse) {
            YAHOO.log("Failed to process XHR transaction.", "info", "example");
            alert(oResponse.responseText);
        },
        timeout: 7000
    };
    YAHOO.util.Connect.asyncRequest('POST', sUrl, callback);  
}


function success_tree(data1){
   var tree = new YAHOO.widget.TreeView("tree_panel3", data1); 
    tree.render();
}