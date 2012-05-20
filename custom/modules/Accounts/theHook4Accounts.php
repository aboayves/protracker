<?php
class theHook4Accounts
{
	function makeHTML4RelateFields(&$bean, $event, $arguments) 
	{
		if($_REQUEST['module']=='av_Groups')	//Accounts subpanel in Groups
		{
			$bean->av_groups_accounts_mail = "
	<input onclick=\"conf=confirm('You are about to change subscribtion of this client from mails from this group.'); if(conf){ val=(parseInt(this.value)+1)%2;http_fetch_sync('index.php','module=av_Groups&action=updateAccountsRelationshipFields&field=mail&value='+val+'&group_id={$bean->av_groups_accountsav_groups_ida}&account_id={$bean->id}&to_pdf=1');this.value=val; } return conf;\" type='checkbox' ".($bean->av_groups_accounts_mail==1?"checked='checked'":"")." value='{$bean->av_groups_accounts_mail}' >";
			$bean->av_groups_accounts_email = "
	<input onclick=\"conf=confirm('You are about to change subscribtion of this client from emails from this group'); if(conf){ val=(parseInt(this.value)+1)%2;http_fetch_sync('index.php','module=av_Groups&action=updateAccountsRelationshipFields&field=email&value='+val+'&group_id={$bean->av_groups_accountsav_groups_ida}&account_id={$bean->id}&to_pdf=1');this.value=val; } return conf;\" type='checkbox' ".($bean->av_groups_accounts_email==1?"checked='checked'":"")." value='{$bean->av_groups_accounts_email}' >";
		}
	}
}
?>