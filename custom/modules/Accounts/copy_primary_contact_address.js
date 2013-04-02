// JavaScript Document

function set_location_querystring(popup_reply_data)
{	
	var currRecord = $('input[name=record]').val();
    var contactId = popup_reply_data['name_to_value_array']['primary_contact_id'];
	
	$("#primary_contact_id").val(popup_reply_data['name_to_value_array']['primary_contact_id']);
	$("#primary_contact_name").val(popup_reply_data['name_to_value_array']['primary_contact_name']);
	
	var valid=0;
	$("#MAILING_address_fieldset input[type=text], textarea").each(function(){
	  if($(this).val() != "") valid=1;
	});
	$("#BILLING_address_fieldset input[type=text], textarea").each(function(){
	  if($(this).val() != "") valid=1;
	});
	var $groupSelection = $('#phone_home, #phone_work, #phone_mobile, #preferred_communication, #preferred_calling_time, #Accounts0emailAddress0, #phone_fax, #preferred_document_submittal, #preferred_meeting_time');
	$groupSelection.each(function(){
	  if($(this).val() != "") valid=1;
	});
	
	//alert(valid);
	
	if(valid==0)
	{
	    get_account_email(contactId);
		return;
	}
	
	var conf = confirm("Do you want to reset the client mailing address with the mailing address from the new primary contact?");
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
	  if($(this).val() != "") valid=1;
	});
	$("#BILLING_address_fieldset input[type=text], textarea").each(function(){
	  if($(this).val() != "") valid=1;
	});
	var $groupSelection = $('#phone_home, #phone_work, #phone_mobile, #preferred_communication, #preferred_calling_time, #Accounts0emailAddress0, #phone_fax, #preferred_document_submittal, #preferred_meeting_time');
	$groupSelection.each(function(){
	  if($(this).val() != "") valid=1;
	});
	
	if(valid==0)
	{
	    get_account_email(contactId);
		return;
	}
	
	var conf = confirm("Do you want to reset the client mailing address with the mailing address from the new primary contact?");
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

			$('#billing_address_street').val(msg['work_address_street']);
			$('#billing_address_city').val(msg['work_address_city']);
			$('#billing_address_state').val(msg['work_address_state']);
			$('#billing_address_postalcode').val(msg['work_address_postalcode']);
			$('#billing_address_country').val(msg['work_address_country']);

			$('#phone_home').val(msg['phone_home']);
			$('#phone_work').val(msg['phone_work']);
			$('#phone_mobile').val(msg['phone_mobile']);
			$('#preferred_communication').val(msg['preferred_communication']);
			$('#preferred_calling_time').val(msg['preferred_calling_time']);
			$('#Accounts0emailAddress0').val(msg['email1']);
			$('#phone_fax').val(msg['phone_fax']);
			$('#preferred_document_submittal').val(msg['preferred_document_submittal']);
			$('#preferred_meeting_time').val(msg['preferred_meeting_time']);
			
			
			});
		request.fail(function(jqXHR, textStatus) {
		alert( "Request failed: " + textStatus );
   	    });
	
}

function set_return_and_save_primary_contact(collection, field_id){
	if(typeof(collection) !='undefined' && typeof(collection.passthru_data) !='undefined' && typeof(collection.passthru_data.populate_pk) !='undefined' && collection.passthru_data.populate_pk=='yes')
	{
		var conf = confirm("Do you want to reset the client mailing address with the mailing address from the new primary contact?");
		if(conf)
		{
			var contact_id;
			if(typeof(collection) !='undefined' && typeof(collection.name_to_value_array) !='undefined' && typeof(collection.name_to_value_array['subpanel_id']) !='undefined'){
				contact_id = collection.name_to_value_array['subpanel_id'];
			}
			else{
				contact_id = collection.selection_list.ID_1;
			}
			$.ajax({
				type: 'POST',
				url:'index.php?module=Contacts&action=copy_primary_contact_address',
				data: "record="+contact_id+"&account_id="+document.DetailView.record.value+"&select_from_subpanel=true",
				complete: function(resp)
				{
				}
			});
		}
	}
	set_return_and_save_background(collection, field_id);
}