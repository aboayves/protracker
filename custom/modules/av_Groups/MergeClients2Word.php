<?php
global $db, $current_language;

header("Content-type:text/octect-stream");
header("Content-Disposition:attachment;filename=\"{$_REQUEST['name']}.csv\"");

//echo "Name, Street, City, State, Zip, Phone, Fax, Contact Type, Status, Priority, Office\n";
$sql="
SELECT 
	accounts.* , av_client_types.name as client_type_id
FROM av_group_membership
LEFT JOIN 
	accounts 
	ON(
		accounts.deleted=0 
		AND 
		accounts.id=av_group_membership.parent_id 
		AND 
		av_group_membership.parent_type='Accounts' 
	)
LEFT JOIN 
	av_client_types 
	ON(
		av_client_types.deleted=0 
		AND 
		av_client_types.id=accounts.client_type_id 

	) 
WHERE 
	av_group_membership.deleted=0 
	AND 
	av_group_membership.av_groups_id='{$_REQUEST['record']}'
	AND 
	av_group_membership.include=1
	AND 
	av_group_membership.parent_type='Accounts'
";

$members = $db->query($sql);
$skip_fields = array('id', 'account_type', 'team_set_id', 'deleted', '', '', '', '', '', '', '', '', '', '', '', );
$put_names=true;
while($member = $db->fetchByAssoc($members))
{
	if($put_names)
	{
		$field_names = array_keys($member);
		$clients_mod_strings = return_module_language($current_language,"Accounts");
		$client_bean = new Account();
		$field_name_map = $client_bean->field_name_map;
		$rows = array();
		$row = '';
		
		foreach($field_names as $field_name)
		{
			if(!in_array($field_name, $skip_fields))
			{
				if(isset($field_name_map[$field_name]) && isset($field_name_map[$field_name]['vname']) && isset($clients_mod_strings[$field_name_map[$field_name]['vname']]))
				{
								$row.= $clients_mod_strings[$field_name_map[$field_name]['vname']]; 
				}
				else if (isset($field_name_map[$field_name]) && isset($field_name_map[$field_name]['vname']))
				{
					$row.=$field_name_map[$field_name]['vname']; 
				}
				else
					$row.=$field_name;
				$row.=',';
			}
		}
		$rows[] = rtrim($row, ',');
		$row = '';
		$put_names=false;
	}
	$row='';
	$member['modified_user_id'] = 	get_assigned_user_name($member['modified_user_id']);
	$member['assigned_user_id'] = 	get_assigned_user_name($member['assigned_user_id']);
	$member['created_by'] = 	get_assigned_user_name($member['created_by']);
	if(!empty($member['office_id'])){
		$office_bean = BeanFactory::getBean("av_Offices", $member['office_id']);
		$member['office_id'] = $office_bean->name;
	}
	$member['billing_address_postalcode'] = "'".$member['billing_address_postalcode'];

	foreach($member as $field_name=>$field)
	{	
		$field = str_replace('&quot;', "'", $field);
		$field = '"'.$field.'"';
		if(!in_array($field_name, $skip_fields))
		{
			$row.=$field.',';
		}
	}
	$rows[] = rtrim($row, ',');
}

if(count($rows))
{
	ob_clean();
	echo ' '.$rows = implode("\r\n", $rows);
}


?>