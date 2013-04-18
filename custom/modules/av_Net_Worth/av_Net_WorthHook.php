<?php

class av_Net_WorthHook
{
	function processRecord($bean, $event, $arguments)
	{
		$bean->managed_assets = format_number($bean->managed_assets, NULL, 0);
		$bean->grand_total = format_number($bean->grand_total, NULL, 0);
	}
}



?>