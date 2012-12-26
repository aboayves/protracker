<?php
class update_last_date
{
	function update_last_date_fun($bean, $event, $arguments) 
	{	
		if(empty($bean->fetched_row['id'])){
			$bean->lastupdated=$bean->date_modified;
		}
	}
}
?>