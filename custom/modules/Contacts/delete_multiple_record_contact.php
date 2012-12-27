<?php
class delete_multiple_record_contact{
	function delete_multiple_record_contact_fun($bean, $event, $arguments) {
		$bean->delete_multiple_check = "<input id='delete_multiple_check' name='delete_multiple_check' value='{$bean->id}' type='checkbox' class='checkbox'>";
	}
}
?>