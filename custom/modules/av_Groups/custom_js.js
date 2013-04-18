function rebuildGroup()
{
	//TODO :: ajax to the RebuildGroup.php
	$.blockUI({ message: '<h1><img src="themes/default/images/loading.gif" height="20px" width="20px" /> Refreshing Group...</h1>', css: { backgroundColor: '3D3D3D', color: '3A3A3A'} });
	var sUrl = "index.php?module=av_Groups&action=RebuildGroup&record="+document.DetailView.record.value+"&sugar_body_only=1&to_pdf=1";
	$.ajax({
		type: 'POST',
		url:sUrl,
		data: "record="+document.DetailView.record.value,
		complete: function(oResponse)
		{
			showSubPanel('av_groups_contacts', null, true);
			showSubPanel('av_groups_accounts', null, true);
			refreshUpdatedDate(oResponse.responseText);
			$.unblockUI();
		
			
		},
	});
	/*var callback = {

        success: function(oResponse) {
			//addReports(eval('('+oResponse.responseText+')'));
            YAHOO.log("XHR transaction was successful.", "info", "example");
            //make_tree(eval(YAHOO.lang.JSON.parse(oResponse.responseText)));
			refreshUpdatedDate(oResponse.responseText);
			$.unblockUI();
        },
        failure: function(oResponse) {
            YAHOO.log("Failed to process XHR transaction.", "info", "example");
//			alert(oResponse.responseText);
			alert('Failed to complete..');
			$.unblockUI();
        },
        timeout: 7000
    };
	YAHOO.util.Connect.asyncRequest('POST', sUrl, callback);
	*/
}

//data should be {contacts:[report_id1, report_id2], accounts:[report_id3, report_id4]}
function addReports(jsonData){
	// Adding Clients
	var accountMeta = {
		call_back_function: "set_return_and_save_background",
		form_name: "DetailView",
		field_to_name_array: {
			id: "subpanel_id"
		},
		passthru_data: {
			child_field: "av_groups_accounts",
			return_url: "index.php?module=av_Groups&action=SubPanelViewer&subpanel=av_groups_accounts&record=" + document.DetailView.record.value + "&sugar_body_only=1",
			link_field_name: "av_groups_accounts",
			module_name: "av_groups_accounts",
			refresh_page: "0",
			return_type: "report"
		}
	};

	for(var i=0; i<jsonData.accounts.length; i++){
		addReport(jsonData.accounts[i], accountMeta);
	}
	
	// Adding Clients
	var contactMeta = {
		call_back_function: "set_return_and_save_background",
		form_name: "DetailView",
		field_to_name_array: {
			id: "subpanel_id"
		},
		passthru_data: {
			child_field: "av_groups_contacts",
			return_url: "index.php?module=av_Groups&action=SubPanelViewer&subpanel=av_groups_contacts&record=" + document.DetailView.record.value + "&sugar_body_only=1",
			link_field_name: "av_groups_contacts",
			module_name: "av_groups_contacts",
			refresh_page: "0",
			return_type: "report"
		}
	};

	for(var i=0; i<jsonData.contacts.length; i++){
		addReport(jsonData.contacts[i], contactMeta);
	}
}

function addReport(rep_id, subMetaData){
	var call_back_function = eval(subMetaData.call_back_function);
			
	var passthru_data = Object();
	if (typeof (subMetaData.passthru_data) != "undefined") {
		passthru_data = subMetaData.passthru_data;
	}
	
	var result_data = {
		"form_name": subMetaData.form_name,
		"name_to_value_array": {subpanel_id: rep_id},
		"passthru_data": passthru_data,
		"popupConfirm": 0
	};
	
	call_back_function(result_data);
	check_forAllGroupMembers();
}
function refreshUpdatedDate(jsonData){
	var updated_date = (jQuery.parseJSON(jsonData)).updated_date;
	$("#lastupdated span").text(updated_date);
}
function deleteRelationShip(group_id, report_id){
	if(sp_rem_conf()){
		$.ajax({
			type: 'GET',
			url:'index.php?module=av_Groups&action=delete_report&group_id='+group_id+'&report_id='+report_id,
			complete: function(resp){
				showSubPanel('av_groups_reports', null, true);
			}
		});
	}
}
function deleteMultiGroupMembers(subpanel_module, subpanel_name){
	checked_checkboxes_obj = $("input:checkbox[name=delete_multiple_check]:checked");
	var checked_checkboxes_val=new Array();
	jQuery.each(checked_checkboxes_obj, function(){
	   checked_checkboxes_val.push($(this).val());
	});
	if(checked_checkboxes_val.length){
		if(confirm("Are you sure you want to delete the selected relationship(s)? Only the relationship(s) will be removed. The record(s) will not be deleted")){
			var parameters="record_to_delete_ids="+checked_checkboxes_val+"&subpanel_module="+subpanel_module;
			$.ajax({
					type: 'POST',
					url:'index.php?module=av_Groups&action=delete_multi_group_members',
					data: parameters,
					complete: function(resp){
						showSubPanel(subpanel_name, null, true);
						check_forAllGroupMembers();
					}
			});
		}
	}
	else{
		alert('Please make a selection before proceeding');
	}
}
function check_forAllGroupMembers(){
	$("#list_subpanel_av_groups_contacts").children().children().children().eq(1).children().first().children().html('<input id="delete_all_check_contacts" name="delete_all_check_contacts" type="checkbox"/>');
	$("#delete_all_check_contacts").change(function(){
		if($("#delete_all_check_contacts").is(':checked')){
			$("#list_subpanel_av_groups_contacts").children().children().children().each(function(){
				$(this).children().eq(0).children().children().get(0).checked=true;
			});
		}
		else{
			$("#list_subpanel_av_groups_contacts").children().children().children().each(function(){
				$(this).children().eq(0).children().children().get(0).checked=false;
			});
		}
	});
	$("#list_subpanel_av_groups_accounts").children().children().children().eq(1).children().first().children().html('<input id="delete_all_check_accounts" name="delete_all_check_accounts" type="checkbox"/>');
	$("#delete_all_check_accounts").change(function(){
		if($("#delete_all_check_accounts").is(':checked')){
			$("#list_subpanel_av_groups_accounts").children().children().children().each(function(){
				$(this).children().eq(0).children().children().get(0).checked=true;
			});
		}
		else{
			$("#list_subpanel_av_groups_accounts").children().children().children().each(function(){
				$(this).children().eq(0).children().children().get(0).checked=false;
			});
		}
	});
}
$(function(){
	check_forAllGroupMembers();
});