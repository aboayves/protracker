<?php
	class delete_multiple_record{
		function delete_multiple_record_fun($bean, $event, $arguments) {
			$bean->delete_multiple_check = "<input id='delete_multiple_check' name='delete_multiple_check' value='{$bean->id}' type='checkbox' class='checkbox'>";
		}
	}
?>