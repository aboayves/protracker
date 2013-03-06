// JavaScript Document

function set_location_querystring(popup_reply_data)
{	
	var currRecord = $('input[name=record]').val();
    var contactId = popup_reply_data['name_to_value_array']['primary_contact_id'];
	
	$("#primary_contact_id").val(popup_reply_data['name_to_value_array']['primary_contact_id']);
	$("#primary_contact_name").val(popup_reply_data['name_to_value_array']['primary_contact_name']);
	
	var valid=0;
	$("#MAILING_address_fieldset input[type=text], textarea").each(function(){
	  if($(this).val() != "") valid+=1;
	});
	
	if(valid==0)
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

function populateEmail()
{	
	var currRecord = $('input[name=record]').val();
    var contactId = document.getElementById('primary_contact_id').value;
	
	var valid=0;
	$("#MAILING_address_fieldset input[type=text], textarea").each(function(){
	  if($(this).val() != "") valid+=1;
	});
	
	if(valid==0)
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
			$('#mailing_address_street').val(msg['primary_address_street']);
			$('#mailing_address_city').val(msg['primary_address_city']);
			$('#mailing_address_state').val(msg['primary_address_state']);
			$('#mailing_address_postalcode').val(msg['primary_address_postalcode']);
			$('#mailing_address_country').val(msg['primary_address_country']);
			});
		request.fail(function(jqXHR, textStatus) {
		alert( "Request failed: " + textStatus );
   	    });
	
}