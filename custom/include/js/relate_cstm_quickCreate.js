// JavaScript Document

function quick_create(relate_name, target_module, rname, rname_value, field_id, field_name )
{	
	relate_name = relate_name.substring(16);
	relate_name_f = relate_name.substring(0, relate_name.length - 5);
	
	var url="index.php?target_module="+target_module+"&tpl=QuickCreate.tpl&action=SubpanelCreates&module=Home&"+rname+'='+rname_value;//&target_action=QuickCreate&accounts_contacts_create_button=Create
	var callback = {
		start: function(eventType, args) {
			},
        success: function(oResponse) {
			$("#dialogForURL").html(oResponse.responseText);
			$( "#dialogForURL" ).dialog({ width: 1200 });
			$('input[name='+target_module+'_subpanel_save_button]').removeAttr('onclick');
			$('input[name='+target_module+'_subpanel_save_button]').prop('type', 'button');
			$('input[name='+target_module+'_subpanel_cancel_button]').removeAttr('onclick');
			$('#form_SubpanelQuickCreate_'+target_module+' input[name=action]').val('save_cstm');
			
			$('input[name='+target_module+'_subpanel_save_button]').click(function() {
				var str = $('#form_SubpanelQuickCreate_'+target_module+'').serialize();
				$('#paramsSent').html(str);
//				alert('index.php?module='+target_module+'&action=save_cstm');
				$.post('index.php?module='+target_module+'&action=save_cstm',
					  str,
					  function(oResponse){
//						alert(oResponse);
						obj = JSON.parse(oResponse);
						
						$('#EditView input[name='+field_id+']').val(obj.id);
						$('#EditView input[name='+field_name+']').val(obj.name);		
						$('#'+field_name).css('border-color', '');
						$('#btn_QuickCreate_'+field_name).hide();
						$(".show_cstm_relate_errors").css("display","none");
						$('#'+field_name).removeClass("cstm_relate_field");
						jQuery('#dialogForURL').dialog('close');
				});
			 });
			 
			$('input[name='+target_module+'_subpanel_cancel_button]').click(function() {
				jQuery('#dialogForURL').dialog('close');
				return false;
			 });
		},
        failure: function(oResponse) {
            YAHOO.log("Failed to process transaction.", "info", "example");
       
 		   alert(oResponse.responseText);
        },
        timeout: 5000
    };	 
	YAHOO.util.Connect.asyncRequest('POST', url,callback); 
}

function removeCstmClass(id){
	$("#"+id).removeClass("cstm_relate_field");
}
function clear_relate_ID(event, id){
	if(
		(event.keyCode||event.which) !=9 && (event.keyCode||event.which) !=37 &&
		(event.keyCode||event.which) !=38 && (event.keyCode||event.which) !=39 &&
		(event.keyCode||event.which) !=40
	){
		$("#"+id).val('');
	}
}
