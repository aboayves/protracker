<?php
class process_record{
    function process_record(&$bean, $event, $arguments){
		global $timedate;
        if( $bean->status == 'Completed' || $bean->status == 'Deferred'){
			$bean->date_due = "<span style='color:#000000'>".$timedate->getDatePart($bean->date_due)."</span>";      
		}
	}
} 
?>