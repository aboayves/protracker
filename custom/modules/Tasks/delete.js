var _form = document.getElementById('formDetailView');
function confirmDelete(){
	
    var taskID = document.getElementsByName('record')[0].value;
    //var parentID = document.getElementsByName('parent_tasks_id')[0].value;
    if(taskID)
        del('Confirmation Suppress','This task has dependent tasks.', taskID);
}
function confirmDelete(taskID, hasChild){
   
   // var parentID = document.getElementsByName('parent_tasks_id')[0].value;
    if(taskID && hasChild) {
        del('Confirmation Suppress','This task has dependent tasks.', taskID, hasChild);
	}
	else {
		del('Confirmation Suppress','Are you sure you want to Suppress.', taskID, hasChild);
	}
}
function del(title, body, taskID, hasChild)
{
    mySimpleDialog.setHeader(title);
    mySimpleDialog.setBody(body);
    mySimpleDialog.cfg.setProperty("icon", YAHOO.widget.SimpleDialog.ICON_WARN);
    
    var handleDELETE = function() {
	
		var txtWait = '<img src="custom/modules/Tasks/loading.gif" alt="Progress Bar" />';
		del_wait("Please Wait...", txtWait);
		this.hide();
	    var _form = document.getElementById('formDetailView');
		currentRecID = _form.record.value;

		if(currentRecID==taskID)
		{
			
		 _form = document.getElementById('formDetailView'); _form.return_module.value='Tasks'; _form.return_action.value='ListView'; _form.action.value='Delete'; _form.record.value=taskID; SUGAR.ajaxUI.submitForm(_form);
		}
		else
		{
			 var sUrl= 'index.php?module=Tasks&action=delete&record='+taskID+'';
			
	     var callback = {

        success: function(oResponse) {
			getTreeData();
        },
        failure: function(oResponse) {
            YAHOO.log("Failed to process XHR transaction.", "info", "example");
            alert(oResponse.responseText);
        },
      
    };
		 YAHOO.util.Connect.asyncRequest('POST', sUrl, callback);	
		
		}
		_form.record.value=currentRecID;

		
    };
	function getTreeData()
	{
		taskID=_form.record.value;
		YAHOO.util.Connect.asyncRequest('POST','index.php',{'success':function(o){var myData= eval("(" + o.responseText + ")");reMakeTree(myData);},'failure':null},'module=Tasks&action=getTreeNodes&id='+taskID+'&sugar_body_only=true');
	}
	function reMakeTree(treeData)
	{
	
		tree = new YAHOO.widget.TreeView("tree_panel3", treeData); 
		tree.render();
		mySimpleDialogWait.hide();
		
		
	}
	
    var handleATTACH = function() {
		currentRecID = _form.record.value;
		
		if(currentRecID==taskID)
		{
			     YAHOO.util.Connect.asyncRequest('POST','index.php',{'success':function(o){mySimpleDialogWait.hide();window.location='index.php?module=Tasks&action=ListView';},'failure':null},'module=Tasks&action=attach_to_parent&id='+taskID+'&sugar_body_only=true');
		}
		else
		{
			
        YAHOO.util.Connect.asyncRequest('POST','index.php',{'success':function(o){mySimpleDialogWait.hide();getTreeData();},'failure':null},'module=Tasks&action=attach_to_parent&id='+taskID+'&sugar_body_only=true');
		}
		var txtWait = '<img src="custom/modules/Tasks/loading.gif" alt="Progress Bar" />';
        del_wait("Please Wait...", txtWait);
        this.hide();
    };
    var handleCANCEL = function() {this.hide();};
    if(hasChild){
		var myButtons = [{
			text:"Delete", 
			handler: handleDELETE, 
			isDefault:false
		},{
			text:"Attach To Parent", 
			handler: handleATTACH, 
			isDefault:false
		},{
			text:"Cancel", 
			handler: handleCANCEL, 
			isDefault:true
		}];
	}
	else{
		var myButtons = [{
			text:"Delete", 
			handler: handleDELETE, 
			isDefault:false
		},{
			text:"Cancel", 
			handler: handleCANCEL, 
			isDefault:true
		}];
	}
    mySimpleDialog.cfg.queueProperty("buttons", myButtons);
    mySimpleDialog.render(document.body);
    mySimpleDialog.show();
}

function show_action(data){
	mySimpleDialogWait.hide();
    //window.location.href = "index.php?module=Tasks&view=ListView";
}

mySimpleDialog = new YAHOO.widget.SimpleDialog("dlg", { 
    width: "30em",
	
    effect:{
        effect: YAHOO.widget.ContainerEffect.FADE,
        duration: 0.25
    }, 
    fixedcenter: true,
    modal: true,
    visible: false,
    draggable: false,
    close:true
});

mySimpleDialogWait = new YAHOO.widget.SimpleDialog("dlg", { 
    width: "9em",
	
    effect:{
        effect: YAHOO.widget.ContainerEffect.FADE,
        duration: 0.25
    }, 
    fixedcenter: true,
    modal: true,
    visible: false,
    draggable: false,
	close:false
});

function del_wait(reqtitle,body){
	
	mySimpleDialogWait.setHeader(reqtitle);
	mySimpleDialogWait.setBody(body);
	mySimpleDialogWait.cfg.setProperty("icon", YAHOO.widget.SimpleDialog.ICON_WARN);
	

	 mySimpleDialogWait.render(document.body);
     mySimpleDialogWait.show();
};