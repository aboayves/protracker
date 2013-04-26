function showRecentlyViewedRecords(){
	$.ajax({
	type: 'GET',
	url:'index.php?module=Home&action=modulelistmenu',
	complete: function(resp)
	{
		handle_response(resp.responseText);
	}
	});

}
function handle_response(response){
	var data = jQuery.parseJSON(response);
	$("#popup_box").html('');
	$("#popup_box").html("<a id='popupBoxClose'>Close</a><h1>Recently Viewed</h1>");
	for (var i=0;i<data.length;i++){
		var name = data[i].text;
		var link = data[i].url;
		$("#popup_box").append("<a class='sf-with-ul' href="+link+">"+name+"</a><br>");
		if(i==10){
			break;
		}
	}
	$('#popup_box').fadeIn("slow");	
	$('#popupBoxClose').click( function(){			
		unloadPopupBox();
	});
}
function unloadPopupBox() {	// TO Unload the Popupbox
	$('#popup_box').fadeOut("slow");
	$("#container").css({ // this is just for style		
		"opacity": "1"  
	}); 
}
$(function(){
	$('.modulesdrager').click( function(){	
		var obj = $(".modulesdrager.hide");
		if(obj['length'] == "1"){
			$(".theBackButton").css("margin-left", "1px");
		}else{
			$(".theBackButton").css("margin-left", "180px");
		}
	});
});