<?php
class theHook4Contacts
{
	function makeHTML4RelateFields(&$bean, $event, $arguments) 
	{
		if($_REQUEST['module']=='av_Groups')	//Contacts subpanel in Groups
		{
			$bean->av_groups_contacts_mail = "
	<input onclick=\"conf=confirm('You are about to change subscribtion of this contact from mails from this group'); if(conf){ val=(parseInt(this.value)+1)%2;http_fetch_sync('index.php','module=av_Groups&action=updateContactsRelationshipFields&field=mail&value='+val+'&group_id={$bean->av_groups_contactsav_groups_ida}&contact_id={$bean->id}&to_pdf=1');this.value=val; } return conf;\" type='checkbox' ".($bean->av_groups_contacts_mail==1?"checked='checked'":"")." value='{$bean->av_groups_contacts_mail}' >";
			$bean->av_groups_contacts_email = "
	<input onclick=\"conf=confirm('You are about to change subscribtion of this contact from emails from this group'); if(conf){ val=(parseInt(this.value)+1)%2;http_fetch_sync('index.php','module=av_Groups&action=updateContactsRelationshipFields&field=email&value='+val+'&group_id={$bean->av_groups_contactsav_groups_ida}&contact_id={$bean->id}&to_pdf=1');this.value=val; } return conf;\" type='checkbox' ".($bean->av_groups_contacts_email==1?"checked='checked'":"")." value='{$bean->av_groups_contacts_email}' >";
		}
	}
}
?>