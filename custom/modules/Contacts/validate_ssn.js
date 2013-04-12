$(function(){
	var onclick = $("#SAVE_HEADER").attr("onclick");
	$("#SAVE_HEADER").attr("onclick", "if(validate_ssn())return false; " +onclick);
});
function validate_ssn(){
	if ($("#ssn_id").val().length != "11" && $("#ssn_id").val().length != '0') {
		$("#show_masked_errors").html("The SSN number must be 9 digits long.");
		return true;
	}
	return false;
}