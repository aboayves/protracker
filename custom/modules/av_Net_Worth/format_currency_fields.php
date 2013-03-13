<?php
function formatGrandTotal($id){
	$net_worth_bean = BeanFactory::getBean('av_Net_Worth', $id);
	return format_number($net_worth_bean->grand_total, NULL, 0);
}
function formatManagedAssets($id){
	$net_worth_bean = BeanFactory::getBean('av_Net_Worth', $id);
	return format_number($net_worth_bean->managed_assets, NULL, 0);
}
?>