<?php
class process_record
{
    function process_record(&$bean, $event, $arguments)
    {
        if( $bean->status == 'Held'){
			$bean->date_start = "<span style='color:#000000'>".$bean->date_start."</span>";       }
    }
} 

?>