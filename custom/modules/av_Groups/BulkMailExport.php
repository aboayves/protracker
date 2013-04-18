<?php
global $db;

header("Content-type:text/octect-stream");
header("Content-Disposition:attachment;filename=\"{$_REQUEST['name']}-mailing list.csv\"");

echo "Name,Envelope Name,Street,City,State,Country,Zip,Phone,Fax,Contact Type,Status,Priority\n";

$sql="
SELECT 
	contacts.salutation, 
	contacts.first_name, 
	contacts.last_name, 
	contacts.primary_address_street, 
	contacts.primary_address_city, 
	contacts.primary_address_state, 
	contacts.primary_address_postalcode, 
	contacts.primary_address_country, 
	contacts.phone_home, 
	contacts.phone_fax as contacts_fax, 
	contacts.status AS contact_status, 
	contacts.priority AS contact_priority, 
	accounts.name, 
	accounts.billing_address_street, 
	accounts.billing_address_city, 
	accounts.billing_address_state, 
	accounts.billing_address_postalcode, 
	accounts.billing_address_country, 
	accounts.phone_office, 
	accounts.phone_fax as accounts_fax, 
	accounts.status AS client_status, 
	accounts.priority AS client_priority,
	av_group_membership.parent_type,
	av_group_membership.envelope,
	av_client_types.name AS client_type,
	av_contact_types.name AS contact_type
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
LEFT JOIN
	contacts 
	ON(
		contacts.deleted=0 
		AND 
		contacts.id=av_group_membership.parent_id 
		AND 
		av_group_membership.parent_type='Contacts' 
	)
LEFT JOIN 
	av_contact_types
	ON(
		av_contact_types.deleted=0 
		AND
		av_contact_types.id=contacts.contact_type_id 
	)
WHERE 
	av_group_membership.deleted=0 
	AND 
	av_group_membership.av_groups_id='{$_REQUEST['record']}'
	AND 
	av_group_membership.include=1
";
$members = $db->query($sql);
while($member = $db->fetchByAssoc($members))
{
	$member = str_replace('&quot;', "'", $member);
	if($member['parent_type']=="Accounts")
	{
		echo '"'.$member['name'].'"'.",".'"'.$member['envelope'].'"'.",".'"'.$member['billing_address_street'].'"'.",".'"'.$member['billing_address_city'].'"'.",".'"'.$member['billing_address_state'].'"'.",".'"'.$member['billing_address_country'].'"'.",".'"'."'".$member['billing_address_postalcode'].'"'.",".'"'.$member['phone_office'].'"'.",".'"'.$member['accounts_fax'].'"'.",".'"'.$member['client_type'].'"'.",".'"'.$member['client_status'].'"'.",".'"'.$member['client_priority'].'"'."\n";
	}
	else
	{
		echo '"'.$member['salutation']." ".$member['first_name']." ".$member['last_name'].'"'.",".'"'.$member['envelope'].'"'.",".'"'.$member['primary_address_street'].'"'.",".'"'.$member['primary_address_city'].'"'.",".'"'.$member['primary_address_state'].'"'.",".'"'.$member['primary_address_country'].'"'.",".'"'."'".$member['primary_address_postalcode'].'"'.",".'"'.$member['phone_home'].'"'.",".'"'.$member['contacts_fax'].'"'.",".'"'.$member['contact_type'].'"'.",".'"'.$member['contact_status'].'"'.",".'"'.$member['contact_priority'].'"'."\n";
	}
}

?>