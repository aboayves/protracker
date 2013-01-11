window.onload = function(){
	var query = getQueryParams(document.URL);
	if(query.Users0emailAddress0){
		$("#Users0emailAddress0").val(query.Users0emailAddress0);
	}
	function getQueryParams(qs) {
		qs = qs.split("+").join(" ");

		var params = {}, tokens,
			re = /[?&]?([^=]+)=([^&]*)/g;

		while (tokens = re.exec(qs)) {
			params[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
		}
		return params;
	}
	addToValidate('EditView', 'user_name', 'email', true,'This username has to be an email address.' );
};
