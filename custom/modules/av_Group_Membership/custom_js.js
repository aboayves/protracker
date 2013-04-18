$(function(){
	$("#create_link").hide();
});
if($(".moduleTitle>h2").text().length > 40)
{
	$('.moduleTitle>h2 a:first').remove();
	$('.moduleTitle>h2 span:first').remove();
}