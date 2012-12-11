function rebuildGroup()
{
	//TODO :: ajax to the RebuildGroup.php
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
			return_url: "index.php?module=av_Groups&action=SubPanelViewer&subpanel=av_groups_contacts&record=4a3de794-e560-bde9-e76b-4fba865d05fd&sugar_body_only=1",
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
}