function hide_show_list(name){
	if(name == "specific_user"){
		$("#users_option").show();
		$("#accounts_option").hide();
	}
	else if(name == "specific_company"){
		$("#accounts_option").show();
		$("#users_option").hide();
	}else{
		$("#users_option").hide();
		$("#accounts_option").hide();
	}
}
function save_settings(){
	var selected_type;
	var selected_value;
	var id = $("#id").val();
	if($("#select_option").val() == 'specific_company'){
		selected_value=$("#selected_account").val();
		selected_type = "specific_company";
	}else if($("#select_option").val() == 'specific_user' && $("#selected_user").val() != ''){
		selected_value=$("#selected_user").val();
		selected_type = "specific_user";
	}else{
		selected_value=$("#select_option").val();
		selected_type = "current_user";
	}
	var parameters="id="+id+"&selected_type="+selected_type+"&selected_value="+selected_value;
	$.ajax({
		type: 'POST',
		url:'index.php?module=av_accounts&action=configure_net_worth_dashlet',
		data: parameters,
		complete: function(resp)
		{
			SUGAR.mySugar.retrieveDashlet(id,'predefined_chart');
		}
	});
}