function confirmDelete(){
    var taskID = document.getElementsByName('record')[0].value;
    //var parentID = document.getElementsByName('parent_tasks_id')[0].value;
    if(taskID)
        del('Confirmation Delete','This task has dependent tasks.', taskID);
}

function confirmDeleteTree(tID)
{
    //var parentID = document.getElementsByName('parent_tasks_id')[0].value;
    if(tID)
        del('Confirmation Delete','This task has dependent tasks.', tID);
}

function del(title, body, taskID){
    mySimpleDialog.setHeader(title);
    mySimpleDialog.setBody(body);
    mySimpleDialog.cfg.setProperty("icon", YAHOO.widget.SimpleDialog.ICON_WARN);
    
    var handleDELETE = function() {
		var txtWait = '<img src="custom/modules/Tasks/loading.gif" alt="Progress Bar" />';
		del_wait("Please Wait...", txtWait);
//		YAHOO.util.Connect.asyncRequest('POST','index.php',{'success':function(o){mySimpleDialogWait.hide();window.location.reload();},'failure':null},'module=Tasks&action=delete&id='+taskID+'&sugar_body_only=true');
		this.hide();
		
		var _form = document.getElementById('formDetailView'); _form.return_module.value='Tasks'; _form.return_action.value='ListView'; _form.action.value='Delete'; _form.record.value=taskID;  SUGAR.ajaxUI.submitForm(_form);
//		window.location = "index.php?module=Tasks&action=delete&id="+taskID;
		
    };
    var handleATTACH = function() {
        YAHOO.util.Connect.asyncRequest('POST','index.php',{'success':function(o){mySimpleDialogWait.hide();window.location='index.php?module=Tasks&action=ListView';},'failure':null},'module=Tasks&action=attach_to_parent&id='+taskID+'&sugar_body_only=true');
        var txtWait = '<img src="custom/modules/Tasks/loading.gif" alt="Progress Bar" />';
        del_wait("Please Wait...", txtWait);
        this.hide();
    };
    var handleCANCEL = function() {this.hide();};
    
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