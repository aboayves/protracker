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
	}
	else
	{
		var taskID = document.getElementsByName('record')[0].value;
		var taskName = document.getElementsByName('task_name')[0].value;
		loadNodeData(taskID, taskName);
	}
	
	disable_ajax = 0;
	setTimeout("generateTree();", 10000);
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
	
		window.open(oCurrentTextNode.getLabelEl().getAttribute("href"));
		 
		 
	 	
 }
  function editNode()
 {
		
		
		window.open((oCurrentTextNode.getLabelEl().getAttribute("href")).replace(/DetailView/g, "EditView"));
	
		 
		 
	 	
 }
  function deleteNode()
 { 
 
var id= (oCurrentTextNode.getLabelEl().getAttribute("href")).split("record=");
			id=id[1].substr(0,36);

 confirmDelete(id);


 
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