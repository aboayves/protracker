<?php

class av_Account_HistoriesHook
{
	function fill_account_listview($bean, $event, $arguments) {
		$av_accounts_bean = BeanFactory::getBean("av_Accounts", $bean->av_accounts_id);
		$bean->av_accounts_name = $av_accounts_bean->name;
	}
}



?>