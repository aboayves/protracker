YAHOO.util.Event.onDOMReady(generateTree);
 
function generateTree(){
    var taskID = document.getElementsByName('record')[0].value;
    var taskName = document.getElementsByName('task_name')[0].value;
    loadNodeData(taskID, taskName);
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