$(function(){
	var onclick = $("#SAVE_HEADER").attr("onclick");
	$("#SAVE_HEADER").attr("onclick", "if(validate_violation())return false; " +onclick);
});
function validate_violation(){
	var violation= 0;
	$(".cstm_relate_field_validation" ).each(function() {
		var relate_field_name = $(this).val();
		var relate_field_id =  $(this).next().next().val();
		if(relate_field_name && !relate_field_id){
			$(this).next().next().next().next().css("display","block");
			violation = 1;
			return false;
		}
	});
	if (violation ==1){
		return true;
	}else{
		return false;
	}
}