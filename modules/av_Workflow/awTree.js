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