// JavaScript Document

$(document).ready(function() {
	var onclick = $("#av_Account_Owners_subpanel_save_button").attr("onclick");
	$("#av_Account_Owners_subpanel_save_button").attr("onclick", "if(violate_ownership())return false; " +onclick);
});

function violate_ownership(){
	var total = Number($("#ownership_added").val()) + Number($("#ownership_percent").val());
	if(Number(total)>100){
		$("#ownership_percent_errors").css("display","block");
		return true;
	}else{
		return false;
	}
}