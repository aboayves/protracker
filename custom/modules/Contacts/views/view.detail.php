<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Contacts/views/view.detail.php');

class CustomContactsViewDetail extends ContactsViewDetail
{
	function CustomContactsViewDetail() 
	{ 
		parent::ContactsViewDetail(); 
	}
 	public function display()
 	{
	
		$url = parse_url($_SERVER['HTTP_REFERER']);
		parse_str($url['query'], $output);
		
		//print '<pre>';print_r(isset($_REQUEST['ref']));die();
		
		parent::display();		
		
		echo '<script>
				if("'.$output['module'].'"=="Accounts" && "'.isset($_REQUEST['ref']).'")
				{
					Contacts_detailview_tabs.selectTab(1);
				}	
			  </script>';
				
 	}
}
