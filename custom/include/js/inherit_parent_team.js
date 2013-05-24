$(function(){
	if ($("#account_name").length > 0){
		sqs_objects['EditView_account_name']['post_onblur_function'] = 'set_sqs_account_data';
	}else if ($("#accounts_name").length > 0){
		sqs_objects['EditView_accounts_name']['post_onblur_function'] = 'set_sqs_account_data';
	}else {
		sqs_objects['EditView_parent_name']['post_onblur_function'] = 'set_sqs_parent_data';
	}
	
});
function set_sqs_parent_data(collection, field_id){
	if($("#parent_type").val() == 'Accounts' || $("#parent_type").val() == 'Contacts'){
		setParentTeam($("#parent_type").val(), collection['id']);
	}else{
		return false;
	}
}
function set_sqs_account_data(collection, field_id){
	if($('[name="module"]').val() == 'av_Accounts'){ //populating owner field in Accounts module
		populateOwnerField();
	}
	setParentTeam('Accounts', collection['id']);
}
function call_back_account_team(collection, field_id){
	for(var key in collection['name_to_value_array']){
	   $('#'+key).val(collection['name_to_value_array'][key]);
	}
	var account_id;
	if ($("#account_id").length > 0){
		account_id = collection['name_to_value_array']['account_id'];
	}else if($("#accounts_id").length > 0){
		account_id = collection['name_to_value_array']['accounts_id'];
	}
	if($('[name="module"]').val() == 'av_Accounts'){ //populating owner field in Accounts module
		populateOwnerField();
	}
	setParentTeam('Accounts', account_id);
}
function set_return(collection, field_id){
	for(var key in collection['name_to_value_array']){
	   $('#'+key).val(collection['name_to_value_array'][key]);
	}
	if($("#parent_type").val() == 'Accounts' || $("#parent_type").val() == 'Contacts'){
		setParentTeam($("#parent_type").val(), collection['name_to_value_array']['parent_id']);
	}else{
		return false;
	}
}
function setParentTeam(parent_module, parent_id){
	$.ajax({
		type: 'POST',
		url:'index.php?module=Accounts&action=inherit_parent_team',
		data: "parent_module="+parent_module+"&parent_id="+parent_id,
		complete: function(resp){
			updateTeam(resp.responseText);
		}
	});
}
function updateTeam(response){
	var data = jQuery.parseJSON(response);
	$("#id_EditView_team_name_collection_0").val(data.team_id);
	$("#EditView_team_name_collection_0").val(data.team_name);
}