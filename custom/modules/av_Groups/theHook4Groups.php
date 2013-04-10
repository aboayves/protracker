<?php
class theHook4Groups
{
	function makeHTML4RelateFields(&$bean, $event, $arguments) 
	{
		if($_REQUEST['module']=='Contacts')	//groups subpanel in Contacts
		{
			$bean->av_groups_contacts_mail = "
	<input onclick=\"conf=confirm('You are about to change subscribtion of this contact from mails from this group'); if(conf){ val=(parseInt(this.value)+1)%2;http_fetch_sync('index.php','module=av_Groups&action=updateContactsRelationshipFields&field=mail&value='+val+'&group_id={$bean->id}&contact_id={$bean->av_groups_contactscontacts_idb}&to_pdf=1');this.value=val; } return conf;\" type='checkbox' ".($bean->av_groups_contacts_mail==1?"checked='checked'":"")." value='{$bean->av_groups_contacts_mail}' >";
			$bean->av_groups_contacts_email = "
	<input onclick=\"conf=confirm('You are about to change subscribtion of this contact from emails from this group'); if(conf){ val=(parseInt(this.value)+1)%2;http_fetch_sync('index.php','module=av_Groups&action=updateContactsRelationshipFields&field=email&value='+val+'&group_id={$bean->id}&contact_id={$bean->av_groups_contactscontacts_idb}&to_pdf=1');this.value=val; } return conf;\" type='checkbox' ".($bean->av_groups_contacts_email==1?"checked='checked'":"")." value='{$bean->av_groups_contacts_email}' >";
		}
		else if($_REQUEST['module']=='Accounts')	//groups subpanel in Accounts
		{
			$bean->av_groups_accounts_mail = "
	<input onclick=\"conf=confirm('You are about to change subscribtion of this client from mails from this group.'); if(conf){ val=(parseInt(this.value)+1)%2;http_fetch_sync('index.php','module=av_Groups&action=updateAccountsRelationshipFields&field=mail&value='+val+'&group_id={$bean->id}&account_id={$bean->av_groups_accountsaccounts_idb}&to_pdf=1');this.value=val; } return conf;\" type='checkbox' ".($bean->av_groups_accounts_mail==1?"checked='checked'":"")." value='{$bean->av_groups_accounts_mail}' >";
			$bean->av_groups_accounts_email = "
	<input onclick=\"conf=confirm('You are about to change subscribtion of this client from emails from this group'); if(conf){ val=(parseInt(this.value)+1)%2;http_fetch_sync('index.php','module=av_Groups&action=updateAccountsRelationshipFields&field=email&value='+val+'&group_id={$bean->id}&account_id={$bean->av_groups_accountsaccounts_idb}&to_pdf=1');this.value=val; } return conf;\" type='checkbox' ".($bean->av_groups_accounts_email==1?"checked='checked'":"")." value='{$bean->av_groups_accounts_email}' >";
		}
	}
}
?>