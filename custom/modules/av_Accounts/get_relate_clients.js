// JavaScript Document

$(document).ready(function() {
	populateOwnerField();
});
function populateOwnerField(){
	var clientId = $('#account_id').val();
	var client_info;
	if(clientId){
		request = $.ajax({
			url: "index.php?module=Accounts&action=relate_clients",
			type: "GET",
			data: {record : clientId},
			done: function(msg) {
				client_info = msg;
			},
			fail: function(jqXHR, textStatus) {
				alert( "Request failed: " + textStatus );
			},
			dataType: "json"
			});
			request.done(function(msg) {
				client_info = msg;
			});
			request.fail(function(jqXHR, textStatus) {
			alert( "Request failed: " + textStatus );
		  });
	  $('#ownership_type').change(function() {
			own_type = $(this).val();
			if(own_type == 'Client' || own_type == 'Client_Trust'){
				$('#contacts_name').val(client_info['primary_contact_name']);
				$('#owner_id').val(client_info['primary_contact_id']);
			}
			else if(own_type == 'Co_Client' || own_type == 'Co_Client_Trust'){
				$('#contacts_name').val(client_info['secondary_contact_name']);
				$('#owner_id').val(client_info['secondary_contact_id']);
			
			}
		});
	}
}