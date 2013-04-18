<?php
function get_age($dob){
	return floor((strtotime("now")-strtotime($dob))/3600/24/365);
}

function get_year_end_age($dob){
	return floor((strtotime(date('12/31/Y'))-strtotime($dob))/3600/24/365);
}
?>