<?php
global $db, $current_language;

header("Content-type:text/octect-stream");
header("Content-Disposition:attachment;filename=\"{$_REQUEST['name']}.csv\"");

//echo "Name, Street, City, State, Zip, Phone, Fax, Contact Type, Status, Priority, Office\n";

$sql="
SELECT 
	contacts.* 
FROM av_group_membership
LEFT JOIN 
	contacts 
	ON(
		contacts.deleted=0 
		AND 
		contacts.id=av_group_membership.parent_id 
		AND 
		av_group_membership.parent_type='Contacts' 
	)
WHERE 
	av_group_membership.deleted=0 
	AND 
	av_group_membership.av_groups_id='{$_REQUEST['record']}'
	AND 
	av_group_membership.include=1
	AND 
	av_group_membership.parent_type='Contacts'
";
$members = $db->query($sql);
$skip_fields = array('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', );
$put_names=true;
while($member = $db->fetchByAssoc($members))
{
	if($put_names)
	{
		$field_names = array_keys($member);
		$contact_mod_strings = return_module_language($current_language,"Contacts");
		$contact_bean = new Contact();
		$field_name_map = $contact_bean->field_name_map;
		$rows = array();
		$row = '';
		foreach($field_names as $field_name)
		{
			if(!in_array($field_name, $skip_fields))
			{
				if(isset($field_name_map[$field_name]) && isset($field_name_map[$field_name]['vname']) && isset($contact_mod_strings[$field_name_map[$field_name]['vname']]))
					$row.= $contact_mod_strings[$field_name_map[$field_name]['vname']];
				else if (isset($field_name_map[$field_name]) && isset($field_name_map[$field_name]['vname']))
					$row.=$field_name_map[$field_name]['vname'];
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