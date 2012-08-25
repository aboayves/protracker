<?php
global $db;

header("Content-type:text/octect-stream");
header("Content-Disposition:attachment;filename=\"{$_REQUEST['name']}.csv\"");

echo "Name, Street, City, State, Zip, Phone, Fax, Contact Type, Status, Priority, Office\n";

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
	contacts_cstm.type_c, 
	contacts_cstm.status_c AS contact_status, 
	contacts_cstm.priority_c AS contact_priority, 
	
	accounts.name, 
	accounts.billing_address_street, 
	accounts.billing_address_city, 
	accounts.billing_address_state, 
	accounts.billing_address_postalcode, 
	accounts.billing_address_country, 
	accounts.phone_office, 
	accounts.phone_fax, 
	accounts.account_type, 
	accounts_cstm.status_c AS client_status, 
	accounts_cstm.priority_c AS client_priority,
	rt_group_membership.parent_type, 
	rt_offices.name AS office_name
FROM rt_group_membership_av_groups_c
LEFT JOIN 
	rt_group_membership 
	ON(
		rt_group_membership.deleted=0 
		AND 
		rt_group_membership.id = rt_group_membership_av_groups_c.rt_group_membership_av_groupsrt_group_membership_idb
	)
LEFT JOIN 
	accounts 
	ON(
		accounts.deleted=0 
		AND 
		accounts.id=rt_group_membership.parent_id 
		AND 
		rt_group_membership.parent_type='Accounts'
	)
LEFT JOIN 
	accounts_cstm 
	ON(
		accounts.id IS NOT NULL 
		AND 
		accounts.id!='' 
		AND 
		accounts_cstm.id_c=accounts.id
	)
LEFT JOIN 
	rt_offices_accounts_1_c
	ON(
		rt_offices_accounts_1_c.deleted=0 
		AND 
		rt_offices_accounts_1_c.rt_offices_accounts_1accounts_idb=accounts.id 
	)
LEFT JOIN 
	contacts 
	ON(
		contacts.deleted=0 
		AND 
		contacts.id=rt_group_membership.parent_id 
		AND 
		rt_group_membership.parent_type='Contacts' 
	)
LEFT JOIN 
	contacts_cstm 
	ON(
		contacts.id IS NOT NULL 
		AND 
		contacts.id!='' 
		AND 
		contacts_cstm.id_c=contacts.id
	)
LEFT JOIN 
	rt_offices_contacts_1_c 
	ON(
		rt_offices_contacts_1_c.deleted=0 
		AND 
		rt_offices_contacts_1_c.rt_offices_contacts_1contacts_idb=contacts.id 
	)
	
LEFT JOIN
	rt_offices 
	ON(
		rt_offices.deleted=0 
		AND 
		(
			(
				rt_offices_accounts_1_c.rt_offices_accounts_1rt_offices_ida IS NOT NULL
				AND 
				rt_offices_accounts_1_c.rt_offices_accounts_1rt_offices_ida!='' 
				AND 
				rt_offices.id=rt_offices_accounts_1_c.rt_offices_accounts_1rt_offices_ida 
			)
			OR
			(
				rt_offices_contacts_1_c.rt_offices_contacts_1rt_offices_ida IS NOT NULL 
				AND 
				rt_offices_contacts_1_c.rt_offices_contacts_1rt_offices_ida!='' 
				AND 
				rt_offices.id=rt_offices_contacts_1_c.rt_offices_contacts_1rt_offices_ida 
			)
		)
	)
WHERE 
	rt_group_membership_av_groups_c.deleted=0 
	AND 
	rt_group_membership_av_groups_c.rt_group_membership_av_groupsav_groups_ida='{$_REQUEST['record']}'
";

$members = $db->query($sql);
while($member = $db->fetchByAssoc($members))
{

	if($member['parent_type']=="Accounts")
	{
	echo $member['name'].", ".$member['billing_address_street'].", ".$member['billing_address_city'].", ".$member['billing_address_state'].", ".$member['billing_address_postalcode'].", ".$member['phone_office'].", ".$member['phone_fax'].", ".$member['account_type'].", ".$member['client_status'].", ".$member['client_priority'].", ".$member['office_name']."\n";
	}
	elseif($member['parent_type']=="Contacts")
	{
		echo $member['salutation']." ".$member['first_name']." ".$member['last_name'].", ".$member['primary_address_street'].", ".$member['primary_address_city'].", ".$member['primary_address_state'].", ".$member['primary_address_postalcode'].", ".$member['phone_home'].", ".$member['phone_fax'].", ".$member['type_c'].", ".", ".$member['contact_status'].", ".$member['contact_priority'].", ".$member['office_name']."\n";
	}
}


?>