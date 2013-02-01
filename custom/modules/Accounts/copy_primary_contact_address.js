// JavaScript Document

function set_location_querystring(popup_reply_data)
{	

	var currRecord = $('input[name=record]').val();
    var contactId = popup_reply_data['name_to_value_array']['primary_contact_id'];
	
	$("#primary_contact_id").val(popup_reply_data['name_to_value_array']['primary_contact_id']);
	$("#primary_contact_name").val(popup_reply_data['name_to_value_array']['primary_contact_name']);

	if($('#Accounts0emailAddress0').val() == '')
	{
	    get_account_email(contactId);
		return;
	}
	
	var conf = confirm("Do you want to replace the Mailing Address from the new primary contact's Mailing Address ?");
	if(conf)
	{
	    get_account_email(contactId);
	}
	else
	{
		return;	
	}
}

function get_account_email(contactId)
{
	var request = $.ajax({
		url: "index.php?module=Contacts&action=copy_primary_contact_address",
		type: "POST",
		data: {record : contactId},
		dataType: "json"
		});
		request.done(function(msg) {
			$('#Accounts0emailAddress0').val(msg);
		});
		request.fail(function(jqXHR, textStatus) {
		alert( "Request failed: " + textStatus );
   	    });
	
}