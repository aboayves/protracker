YUI().use('event', function (Y) {
    Y.on('domready', function () {
      customHide($('#assign_to').val());
    });
});
function customHide(selectedValue)
{
	if(selectedValue != 'Specific_User')
	{
		$('#assigned_user_name, #btn_assigned_user_name, #btn_clr_assigned_user_name').hide();
		$("#assigned_user_name_label > label[for=assigned_user_name]").hide();
	}
	else
	{
		$('#assigned_user_name, #btn_assigned_user_name, #btn_clr_assigned_user_name').show();
		$("#assigned_user_name_label > label[for=assigned_user_name]").show();
	}
}
