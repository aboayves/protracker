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
		
		  require_once('include/MassUpdate.php');
		  $mass = new MassUpdate();
		  
		  echo $mass->getDisplayMassUpdateForm(true,true);
		 
		$sql = "SELECT DISTINCT(parent_id) as 'parent_id' FROM av_group_membership WHERE deleted=0 AND av_groups_id='{$this->bean->id}' AND parent_type='Contacts'";
		$res = $db->query($sql);
		$uid='';
		while($row = $db->fetchByAssoc($res))
		{
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
		global $db, $timedate;
		
		if(isset($_REQUEST['uid']) && !empty($_REQUEST['uid']) && isset($_REQUEST['mass']))
		{
			
			
		}
		$bean = BeanFactory::getBean("Contacts");
	   
		$mem_email = array();
		
		$sql = 	"SELECT ea.email_address FROM av_group_membership rt ".
				"INNER JOIN email_addr_bean_rel eabr ON eabr.deleted=0 AND eabr.bean_id=rt.parent_id AND rt.parent_type=eabr.bean_module ".
				"INNER JOIN email_addresses ea ON ea.deleted=0 AND ea.invalid_email=0 AND ea.id=eabr.email_address_id ".
				"WHERE rt.deleted=0 AND rt.av_groups_id='{$this->bean->id}' AND rt.include=1";	
		$contacts = $db->query($sql);
		while($contact = $db->fetchByAssoc($contacts))
		{
			if($contact['email_address']!="" && $contact['email_address']!=NULL)
			{
				$mem_email[] = $contact['email_address'];
			}
		}
		
		$this->dv->ss->assign('mail_to_members', '<input type="button" onclick="javascript: location.href=\'mailto:?bcc=' . implode(';',$mem_email) . '\'" value="Email to Members"/>');
		$updateDate = strtotime($this->bean->lastupdated);
        $nowDate = strtotime($timedate->to_display_date_time($timedate->nowDB()));
		$date_diff_days = ($nowDate - $updateDate)/3600/24;
		if($date_diff_days >=1){
			$this->dv->process();
			$this->dv->fieldDefs['lastupdated']['value'] = "<span style='color:red'>".$this->dv->fieldDefs['lastupdated']['value']."</span>";
			echo $this->dv->display();
		}else{		
			parent::display();
		}
		$this->massupdate();		
    }

}
