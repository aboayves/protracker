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
	}else if($("#select_option").val() == 'for_all'){
		selected_value=$("#select_option").val();
		selected_type = "for_all";
	}
	var parameters="id="+id+"&selected_type="+selected_type+"&selected_value="+selected_value;
	$.ajax({
		type: 'POST',
		url:'index.php?module=av_Accounts&action=configure_net_worth_dashlet',
		data: parameters,
		complete: function(resp)
		{
			SUGAR.mySugar.retrieveDashlet(id,'predefined_chart');
			alignAxisTextRight();
		}
	});
}
function alignAxisTextRight(){
	var digit_length1 = ($("#svgChart").children().eq(5).children().first()).text().length;
	var digit_length2 = ($("#svgChart").children().eq(6).children().first()).text().length;
	var digit_length3 = ($("#svgChart").children().eq(7).children().first()).text().length;
	var digit_length4 = ($("#svgChart").children().eq(8).children().first()).text().length;
	var digit_length5 = ($("#svgChart").children().eq(9).children().first()).text().length;
	var digit_length6 = ($("#svgChart").children().eq(10).children().first()).text().length;
	var x1 = (digit_length1-digit_length2)*3;
	var x2 = (digit_length1-digit_length3)*3;
	var x3 = (digit_length1-digit_length4)*3;
	var x4 = (digit_length1-digit_length5)*3;
	var x5 = (digit_length1-digit_length6)*3;
	($("#svgChart").children().eq(6).children().first()).attr("x", parseInt($("#svgChart").children().eq(6).children().first().attr('x'))+x1);
	($("#svgChart").children().eq(7).children().first()).attr("x", parseInt($("#svgChart").children().eq(7).children().first().attr('x'))+x2);
	($("#svgChart").children().eq(8).children().first()).attr("x", parseInt($("#svgChart").children().eq(8).children().first().attr('x'))+x3);
	($("#svgChart").children().eq(9).children().first()).attr("x", parseInt($("#svgChart").children().eq(9).children().first().attr('x'))+x4);
	($("#svgChart").children().eq(10).children().first()).attr("x", parseInt($("#svgChart").children().eq(10).children().first().attr('x'))+x5);
}