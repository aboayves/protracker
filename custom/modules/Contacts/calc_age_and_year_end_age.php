<?php
function get_age($dob){
	return round((strtotime("now")-strtotime($dob))/3600/24/365, 2);
}

function get_year_end_age($dob){
	return round((strtotime(date('12/31/Y'))-strtotime($dob))/3600/24/365, 2);
}
?>