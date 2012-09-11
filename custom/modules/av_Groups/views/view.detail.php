<?php
require_once('include/DetailView/DetailView2.php');
require_once('include/MassUpdate.php');
class Customav_GroupsViewDetail extends ViewDetail
{	 var $multi_select_popup=false;

    public function massupdate()
	{
		global $mod_strings, $db;
		$contacts_mod_strings = LanguageManager::loadModuleLanguage('Contacts', 'en_us');
		$mod_strings = array_merge($contacts_mod_strings, $mod_strings);
		
		$bean = BeanFactory::getBean("Contacts");
		
//print "<pre>";	print_r($bean->field_defs);die();
//print "<pre>"; print_r($bean->field_name_map['modified_user_id']['massupdate']);die();
		  require_once('include/MassUpdate.php');
		  $mass = new MassUpdate();
		  
		  echo $mass->getDisplayMassUpdateForm(true,true);
		 
		$sql = "
			SELECT DISTINCT parent_id
			FROM rt_group_membership
			RIGHT JOIN rt_group_membership_av_groups_c
			ON
			(
				rt_group_membership_av_groups_c.deleted=0
				AND
				rt_group_membership_av_groups_c.rt_group_membership_av_groupsav_groups_ida='{$this->bean->id}'
				AND
				rt_group_membership_av_groups_c.rt_group_membership_av_groupsrt_group_membership_idb = rt_group_membership.id
			)
			WHERE rt_group_membership.deleted=0 AND rt_group_membership.parent_type='Contacts'
		";
		$res = $db->query($sql);
		$uid='';
		while($row = $db->fetchByAssoc($res))
		{
			//echo $row['parent_id']." <br>";
			echo "
			<input type='hidden' value='{$row['parent_id']}' name='mass[]'>
			";
			$uid.="&quot;{$row['parent_id']}&quot;,";
		}
		$uid = trim($uid, ",");
		echo "<input type='hidden' value='{$uid}' name='uid'>";
		echo "<input type='hidden' value='{$res->num_rows}' name='selectCount[]'>";
		echo "<input type='hidden' value='MassUpdateCstm' name='action'>";
		  
        echo $mass->getMassUpdateFormHeader(true);
		
        $mass->setSugarBean($bean);
		
		 $mass->handleMassUpdate();

		  echo $mass->getMassUpdateForm();
		
		  
	
	
		  echo $mass->endMassUpdateForm();
		  
		  echo "
		  	<script type='text/javascript'>
//				document.MassUpdate.module.value = 'Contacts';
				window.onload = function (e) {

				}
			</script>
			
		  ";
	}
    public function display()
    {
		global $db;
		
		if(isset($_REQUEST['uid']) && !empty($_REQUEST['uid']) && isset($_REQUEST['mass']))
		{
			
			
		}
	$bean = BeanFactory::getBean("Contacts");
	   
		$mem_email=" ";
		

 
		$sql="SELECT email_addresses.email_address
		From rt_group_membership_av_groups_c
		RIGHT JOIN rt_group_membership 
			ON (rt_group_membership.deleted=0 AND rt_group_membership.id = rt_group_membership_av_groups_c.rt_group_membership_av_groupsrt_group_membership_idb AND rt_group_membership.include=1)
		LEFT JOIN email_addr_bean_rel 
			ON (email_addr_bean_rel.deleted=0 AND email_addr_bean_rel.bean_id=rt_group_membership.parent_id AND rt_group_membership.parent_type=email_addr_bean_rel.bean_module)
		LEFT JOIN email_addresses 
			ON (email_addresses.deleted=0 AND email_addresses.invalid_email=0 AND email_addresses.id=email_addr_bean_rel.email_address_id)
		WHERE rt_group_membership_av_groups_c.deleted=0 AND rt_group_membership_av_groups_c.rt_group_membership_av_groupsav_groups_ida='{$this->bean->id}'";
		$contacts = $db->query($sql);
		while($contact = $db->fetchByAssoc($contacts))
		{
			if($contact['email_address']!="" && $contact['email_address']!=NULL)
			{
				$mem_email.=$contact['email_address'].",";
			}
		}
		
		$this->dv->ss->assign('mail_to_members', '<input type="button" onclick="javascript: location.href=\'mailto:?bcc='.$mem_email.'\'" value="Mail to Members"/>');
		parent::display();
		$this->massupdate();		
    }

}
