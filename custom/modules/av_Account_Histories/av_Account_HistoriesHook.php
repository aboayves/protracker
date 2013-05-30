<?php

class av_Account_HistoriesHook
{
	function fill_account_listview($bean, $event, $arguments) {
		//populating Account Name in listview.
		$av_accounts_bean = BeanFactory::getBean("av_Accounts", $bean->av_accounts_id);
		$bean->av_accounts_name = $av_accounts_bean->name;
		//populating Client Name in listview.
		$bean->account_id = $av_accounts_bean->account_id;
		$account_bean = BeanFactory::getBean("Accounts", $bean->account_id);
		$bean->account_name = $account_bean->name;
	}
}



?>