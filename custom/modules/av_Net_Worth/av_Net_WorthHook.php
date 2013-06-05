<?php

class av_Net_WorthHook
{
	function processRecord($bean, $event, $arguments)
	{
		$account_bean = BeanFactory::getBean("Accounts", $bean->account_id);
		$bean->account_name = $account_bean->name;
	}
}



?>