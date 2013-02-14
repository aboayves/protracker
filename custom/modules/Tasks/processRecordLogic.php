<?php
class process_record
{
    function process_record(&$bean, $event, $arguments)
    {
		
        if( $bean->status == 'Completed' || $bean->status == 'Deferred'){
			$bean->date_due = "<span style='color:#000000'>".$bean->date_due."</span>";       }
		}
} 
?>