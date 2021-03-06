function assignWorkflow(){
	_form = document.getElementById('EditView');
	_form.action.value='assign';
	if(check_form('EditView')){
		askUser = false;
		
		parentType = document.getElementById('parent_type');
		assignMembers = document.getElementById('assign_to_members');
		
		if(parentType != null && assignMembers != null){
			askUser = parentType.options[parentType.selectedIndex].value == "av_Groups" && assignMembers.checked;
		}
		
		if(askUser){
			if(confirm("Warning: This will duplicate the tasks in the workflow for every client and contact in the group. \nAre you sure?")){
				SUGAR.ajaxUI.submitForm(_form);
			}
		}else{
			SUGAR.ajaxUI.submitForm(_form);
		}
	}
	
	return false;
}

var treeHelper = {
	tree : null,	
	loadData: function ()  {		
		var sUrl = "index.php?sugar_body_only=true";
		var myForm = document.getElementById("EditView");
		myForm.action.value = 'getWfTreeData';
		
	
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
		YAHOO.util.Connect.setForm(myForm);
		YAHOO.util.Connect.asyncRequest('POST', sUrl, callback);  
	},
	
	buildTree : function(data){
		treeHelper.tree = new YAHOO.widget.TreeView("tree_plotting_div", data);
		treeHelper.tree.render();
	},
}
function resetUser(){	
	$("td[name=assign_to]").each(function(i){
			$(this).text($(this).attr("default_value"));
	});
}
//Removing extra "»" when assigning workflow from menu shortcut.
$(function(){
	var contents = $(".moduleTitle").children().first().contents();
	if((contents.get(3).textContent) == '»'){
		$(".moduleTitle").children().first().children().eq(2).remove();
	}
});