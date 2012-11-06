<?php
global $db;

header("Content-type:text/octect-stream");
header("Content-Disposition:attachment;filename=\"{$_REQUEST['name']}.csv\"");

echo "Name,Street,City,State,Zip,Phone,Fax,Contact Type,Status,Priority,Office\n";

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
	contacts.phone_fax, 
	contacts.type, 
	contacts.status AS contact_status, 
	contacts.priority AS contact_priority, 
	
	accounts.name, 
	accounts.billing_address_street, 
	accounts.billing_address_city, 
	accounts.billing_address_state, 
	accounts.billing_address_postalcode, 
	accounts.billing_address_country, 
	accounts.phone_office, 
	accounts.phone_fax, 
	accounts.account_type, 
	accounts.status AS client_status, 
	accounts.priority AS client_priority,
	av_group_membership.parent_type, 
	av_offices.name AS office_name
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
	av_offices_accounts_1_c
	ON(
		av_offices_accounts_1_c.deleted=0 
		AND 
		av_offices_accounts_1_c.av_offices_accounts_1accounts_idb=accounts.id 
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
	av_offices_contacts_1_c 
	ON(
		av_offices_contacts_1_c.deleted=0 
		AND 
		av_offices_contacts_1_c.av_offices_contacts_1contacts_idb=contacts.id 
	)
	
LEFT JOIN
	av_offices 
	ON(
		av_offices.deleted=0 
		AND 
		(
			(
				av_offices_accounts_1_c.av_offices_accounts_1av_offices_ida IS NOT NULL
				AND 
				av_offices_accounts_1_c.av_offices_accounts_1av_offices_ida!='' 
				AND 
				av_offices.id=av_offices_accounts_1_c.av_offices_accounts_1av_offices_ida 
			)
			OR
			(
				av_offices_contacts_1_c.av_offices_contacts_1av_offices_ida IS NOT NULL 
				AND 
				av_offices_contacts_1_c.av_offices_contacts_1av_offices_ida!='' 
				AND 
				av_offices.id=av_offices_contacts_1_c.av_offices_contacts_1av_offices_ida 
			)
		)
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

	if($member['parent_type']=="Accounts")
	{
	echo $member['name'].",".$member['billing_address_street'].",".$member['billing_address_city'].",".$member['billing_address_state'].",".$member['billing_address_postalcode'].",".$member['phone_office'].",".$member['phone_fax'].",".$member['account_type'].",".$member['client_status'].",".$member['client_priority'].",".$member['office_name']."\n";
	}
	elseif($member['parent_type']=="Contacts")
	{
		echo $member['salutation']." ".$member['first_name']." ".$member['last_name'].",".$member['primary_address_street'].",".$member['primary_address_city'].",".$member['primary_address_state'].",".$member['primary_address_postalcode'].",".$member['phone_home'].",".$member['phone_fax'].",".$member['type'].",".$member['contact_status'].",".$member['contact_priority'].",".$member['office_name']."\n";
	}
}


?>