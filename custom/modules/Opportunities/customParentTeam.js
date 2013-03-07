$(function(){
	sqs_objects['EditView_account_name']['post_onblur_function'] = 'set_sqs_parent_data';
});
function set_sqs_parent_data(collection, field_id){
	setParentTeam("Accounts", collection['id']);
}
function callbackParentTeam(collection, field_id){
	for(var key in collection['name_to_value_array']){
	   $('#'+key).val(collection['name_to_value_array'][key]);
	}
	setParentTeam("Accounts", collection['name_to_value_array']['account_id']);
}
function setParentTeam(parent_module, parent_id){
	$.ajax({
		type: 'POST',
		url:'index.php?module=Opportunities&action=setParentTeam',
		data: "parent_module="+parent_module+"&parent_id="+parent_id,
		complete: function(resp)
		{
			updateTeam(resp.responseText);
		}
	});
}
function updateTeam(response){
	var data = jQuery.parseJSON(response);
	$("#id_EditView_team_name_collection_0").val(data.team_id);
	$("#EditView_team_name_collection_0").val(data.team_name);
}