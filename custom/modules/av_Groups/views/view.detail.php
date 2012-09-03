<?php
require_once('include/DetailView/DetailView2.php');

class Customav_GroupsViewDetail extends ViewDetail
{	
    public function display()
    {
		global $db;
		$mem_email=" ";

		$sql="SELECT email_addresses.email_address
		From rt_group_membership_av_groups_c
		RIGHT JOIN rt_group_membership 
			ON (rt_group_membership.deleted=0 AND rt_group_membership.id = rt_group_membership_av_groups_c.rt_group_membership_av_groupsrt_group_membership_idb AND rt_group_membership.include=1)
		LEFT JOIN email_addr_bean_rel 
			ON (email_addr_bean_rel.deleted=0 AND email_addr_bean_rel.bean_id=rt_group_membership.parent_id AND rt_group_membership.parent_type=email_addr_bean_rel.bean_module)
		LEFT JOIN email_addresses 
			ON (email_addresses.deleted=0 AND email_addresses.invalid_email=0 AND email_addresses.id=email_addr_bean_rel.email_address_id)
		WHERE rt_group_membership_av_groups_c.deleted=0 AND rt_group_membership_av_groups_c.rt_group_membership_av_groupsav_groups_ida='{$_REQUEST['record']}'";
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
    }
}
