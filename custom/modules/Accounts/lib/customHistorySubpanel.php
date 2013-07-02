<?php 
function history_all_leads_func($parrams){
	$custom_join = " ";
	if($parrams['table'] != 'tasks'){
		$custom_join = " LEFT JOIN contacts ON (contacts.deleted=0 AND contacts.id=accounts_contacts.contact_id) ";
	}
	$return_array['select']="SELECT {$parrams['table']}.id, {$parrams['table']}.name as 'name', {$parrams['table']}.status, ifnull(concat(contacts.first_name, \" \", contacts.last_name), contacts.last_name) as 'contact_name', {$parrams['table']}.parent_type as 'parent_name', {$parrams['table']}.date_entered, {$parrams['table']}.date_modified, ifnull(concat(users.first_name, \" \", users.last_name), users.last_name) as 'assigned_user_name' ";
	$return_array['from'] = "FROM {$parrams['table']} ";
	$return_array['join'] = " LEFT JOIN leads ON (leads.deleted=0 AND {$parrams['table']}.parent_id=leads.id AND {$parrams['table']}.parent_type='leads') 
	LEFT JOIN accounts_contacts ON(accounts_contacts.deleted=0 AND leads.account_id=accounts_contacts.account_id AND accounts_contacts.account_id='{$parrams['account_id']}')".$custom_join."
	LEFT JOIN users ON(users.deleted=0 AND users.id={$parrams['table']}.assigned_user_id) ";
	$return_array['where']=" WHERE {$parrams['table']}.deleted=0 AND accounts_contacts.account_id='{$parrams['account_id']}' ";
	return $return_array;
}