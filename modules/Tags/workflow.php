<?php
/*********************************************************************************
 *  
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * You may copy and distribute this program :
 *  You give the recipient a copy of this License.
 * You give credit to all Contributors 
 *
 * CARRENET  - 2009-2012
 * http://www.carrenet.com/sugarcrm
 * info@carrenet.com
 ********************************************************************************/

require_once('data/SugarBean.php'); 

//merge similar tags
function merge_tags($current_id)
{
	global $sugar_config;
	global $current_user;
	global $db;
	global $app_list_strings;
	
	$return_id=$current_id;
	
	$GLOBALS['log']->debug("[CARRENET]Workflow merge_tags");
	
	$now_sql=date("Y-m-d H:i:s");
	
	$sql="SELECT COUNT( * ) AS `count` , `name` FROM `tags` WHERE deleted = '0' GROUP BY `name`";
	$result=$db->query($sql);
	
	while ($row = $db->fetchByAssoc($result) )
		{
			$temp_tags_name=$row['name'];
			$temp_count=$row['count'];		
		
			if ($temp_count>1)
			{
				//regoup
				$sql="SELECT * FROM `tags` WHERE deleted = '0' AND name = '$temp_tags_name' ORDER BY date_entered ";
				$result2=$db->query($sql);
				
				$pass=1;
					
				while ($row2 = $db->fetchByAssoc($result2) )
				{
					
					$temp_tags_id=$row2['id'];
					
					if ($pass==1) //tags to keep
					{
						$tags_id_keep = $temp_tags_id;						
					}
					else
					{
						if ($current_id == $temp_tags_id)
							$return_id=$tags_id_keep;
						
						//replace existing link with contacts, accounts, leads, opportunities
						$sql="UPDATE tags_contacts SET tags_id = '$tags_id_keep' WHERE tags_id = '$temp_tags_id' ";
						$db->query($sql);
						$sql="UPDATE tags_accounts SET tags_id = '$tags_id_keep' WHERE tags_id = '$temp_tags_id' ";
						$db->query($sql);
						$sql="UPDATE tags_leads SET tags_id = '$tags_id_keep' WHERE tags_id = '$temp_tags_id' ";
						$db->query($sql);
						$sql="UPDATE tags_opportunities SET tags_id = '$tags_id_keep' WHERE tags_id = '$temp_tags_id' ";
						$db->query($sql);
						
						//delete tags
						$sql="DELETE FROM tags WHERE id = '$temp_tags_id' ";
						$db->query($sql);
					}
					
					$pass++;
				}
				
			}
			
			
		} //end while ($row = $db->fetchByAssoc($result) )
		
		return $return_id;
}



//clean tables links
function clean_links()
{
	global $sugar_config;
	global $current_user;
	global $db;
	global $app_list_strings;
	
	$GLOBALS['log']->debug("[CARRENET]Workflow merge_tags");
	
	$now_sql=date("Y-m-d H:i:s");
	
	//clean multiple link

	//Accounts
	$db->query("DELETE FROM tags_accounts WHERE deleted=1");			
	$sql3="SELECT DISTINCT tags_id, accounts_id FROM `tags_accounts`";
	$result3=$db->query($sql3);
	while ($row3 = $db->fetchByAssoc($result3) )
	{
		$temp_tags_id=$row3['tags_id'];
		$temp_accounts_id=$row3['accounts_id'];
						
		//delete existing link then create one link
		$sql="DELETE FROM tags_accounts WHERE tags_id='$temp_tags_id' AND accounts_id='$temp_accounts_id'";
		$db->query($sql);
		
		$temp_id_link=create_guid();			
		
		$sql="INSERT INTO tags_accounts(id,date_modified,deleted,tags_id,accounts_id) VALUES('$temp_id_link','$now_sql','0','$temp_tags_id','$temp_accounts_id')";
		$db->query($sql);							
	}
	
	//Contacts
	$db->query("DELETE FROM tags_contacts WHERE deleted=1");			
	$sql3="SELECT DISTINCT tags_id, contacts_id FROM `tags_contacts`";
	$result3=$db->query($sql3);
	while ($row3 = $db->fetchByAssoc($result3) )
	{
		$temp_tags_id=$row3['tags_id'];
		$temp_contacts_id=$row3['contacts_id'];
						
		//delete existing link then create one link
		$sql="DELETE FROM tags_contacts WHERE tags_id='$temp_tags_id' AND contacts_id='$temp_contacts_id'";
		$db->query($sql);
		
		$temp_id_link=create_guid();			
		
		$sql="INSERT INTO tags_contacts(id,date_modified,deleted,tags_id,contacts_id) VALUES('$temp_id_link','$now_sql','0','$temp_tags_id','$temp_contacts_id')";
		$db->query($sql);							
	}
	
	//Leads
	$db->query("DELETE FROM tags_leads WHERE deleted=1");			
	$sql3="SELECT DISTINCT tags_id, leads_id FROM `tags_leads`";
	$result3=$db->query($sql3);
	while ($row3 = $db->fetchByAssoc($result3) )
	{
		$temp_tags_id=$row3['tags_id'];
		$temp_leads_id=$row3['leads_id'];
						
		//delete existing link then create one link
		$sql="DELETE FROM tags_leads WHERE tags_id='$temp_tags_id' AND leads_id='$temp_leads_id'";
		$db->query($sql);
		
		$temp_id_link=create_guid();			
		
		$sql="INSERT INTO tags_leads(id,date_modified,deleted,tags_id,leads_id) VALUES('$temp_id_link','$now_sql','0','$temp_tags_id','$temp_leads_id')";
		$db->query($sql);							
	}
	
	//Opportunities
	$db->query("DELETE FROM tags_opportunities WHERE deleted=1");			
	$sql3="SELECT DISTINCT tags_id, opportunities_id FROM `tags_opportunities`";
	$result3=$db->query($sql3);
	while ($row3 = $db->fetchByAssoc($result3) )
	{
		$temp_tags_id=$row3['tags_id'];
		$temp_opportunities_id=$row3['opportunities_id'];
						
		//delete existing link then create one link
		$sql="DELETE FROM tags_opportunities WHERE tags_id='$temp_tags_id' AND opportunities_id='$temp_opportunities_id'";
		$db->query($sql);
		
		$temp_id_link=create_guid();
		
		$sql="INSERT INTO tags_opportunities(id,date_modified,deleted,tags_id,opportunities_id) VALUES('$temp_id_link','$now_sql','0','$temp_tags_id','$temp_opportunities_id')";
		$db->query($sql);							
	}

}

function refresh_count_elements_tags()
{
		global $sugar_config;
		global $current_user;
		global $db;
		global $app_list_strings;
	
	
	$tags_array=array();
					
					
	//reset
	$sql="SELECT  `id` FROM `tags` WHERE deleted = '0' ";		
	$result=$db->query($sql);
	
	while ($row = $db->fetchByAssoc($result) )
		{
			$temp_tags_id=$row['id'];
			$temp_count=0;		
			
			$tags_array["$temp_tags_id"]['count'] = $temp_count;
		}
	
	
	//contacts tags
	$sql="SELECT COUNT( * ) AS `count` , `tags_id` FROM `tags_contacts` WHERE deleted = '0' GROUP BY `tags_id` ORDER BY `tags_id`";		
	$result=$db->query($sql);
	
	while ($row = $db->fetchByAssoc($result) )
		{
			$temp_tags_id=$row['tags_id'];
			$temp_count=$row['count'];		
			
			$tags_array["$temp_tags_id"]['count'] = $temp_count;
			$GLOBALS['log']->debug("[CARRENET]count tags contacts $temp_tags_id = {$tags_array["$temp_tags_id"]['count']} ");
		}
			
	//accounts tags
	$sql="SELECT COUNT( * ) AS `count` , `tags_id` FROM `tags_accounts` WHERE deleted = '0' GROUP BY `tags_id` ORDER BY `tags_id`";			
	$result=$db->query($sql);
	
	while ($row = $db->fetchByAssoc($result) )
	{
		$temp_tags_id=$row['tags_id'];
		$temp_count=$row['count'];		
		
		$tags_array["$temp_tags_id"]['count'] = $tags_array["$temp_tags_id"]['count'] + $temp_count;
		$GLOBALS['log']->debug("[CARRENET]count tags accounts  $temp_tags_id = {$tags_array["$temp_tags_id"]['count']} ");
	}
			
	//leads tags
	$sql="SELECT COUNT( * ) AS `count` , `tags_id` FROM `tags_leads` WHERE deleted = '0' GROUP BY `tags_id` ORDER BY `tags_id`";				
	$result=$db->query($sql);
	
	while ($row = $db->fetchByAssoc($result) )
	{
		$temp_tags_id=$row['tags_id'];
		$temp_count=$row['count'];		
		
		$tags_array["$temp_tags_id"]['count'] = $tags_array["$temp_tags_id"]['count'] + $temp_count;
		$GLOBALS['log']->debug("[CARRENET]count tags leads $temp_tags_id = {$tags_array["$temp_tags_id"]['count']} ");
	}
	
	//opportunities tags
	$sql="SELECT COUNT( * ) AS `count` , `tags_id` FROM `tags_opportunities` WHERE deleted = '0' GROUP BY `tags_id` ORDER BY `tags_id`";				
	$result=$db->query($sql);
	
	while ($row = $db->fetchByAssoc($result) )
	{
		$temp_tags_id=$row['tags_id'];
		$temp_count=$row['count'];		
		
		$tags_array["$temp_tags_id"]['count'] = $tags_array["$temp_tags_id"]['count'] + $temp_count;
		$GLOBALS['log']->debug("[CARRENET]count tags leads $temp_tags_id = {$tags_array["$temp_tags_id"]['count']} ");
	}
	
	//Update count of elements
	foreach ($tags_array as $key => $value)
	{				
		$sql="UPDATE tags SET count = '{$value['count']}' WHERE id = '$key' ";
		$db->query("$sql");	
		
		$GLOBALS['log']->debug("[CARRENET]count tags $sql ");
	}
				
}


//Workflow module Tags
class Tags_before_save
{
	function Tags_before_save(&$bean, $event, $arguments)
	{
		global $db;
		global $sugar_config;
		global $current_user;	
		global $app_list_strings;
	
		
		
		$now_sql=date("Y-m-d H:i:s");
		
		$GLOBALS['log']->debug("[CARRENET]Workflow Tags_before_save");
		
		//replace ; by ,
		$tags_name=$bean->name;
		$tags_name = str_replace(";", ",", $tags_name);
		
		
		$list_tags = explode(',', $tags_name);
		//if several tags, sugar takes care of first tags
		if (count($list_tags)>1)
		{
			$pass=0;
			foreach($list_tags as $value)					
			{
				$value=trim($value);
				$pass++;
				//insert tags even existing, merge function do the cleaning
				if ($pass==1) // first tag
				{
					$bean->name=$value; //sugar takes care of this creation
				}
				elseif ($value!="")
				{
					$temp_id_tags=create_guid();
					
					$sql="INSERT INTO `tags` (id, name,date_entered,date_modified,modified_user_id,created_by,description,deleted,assigned_user_id,count ) 
								VALUES ('$temp_id_tags', '$value','$now_sql','$now_sql','$current_user->id','$current_user->id','$bean->description','0','$current_user->id','0')";		
					$result=$db->query($sql);
										
					//link creation 
					//call from a subpanel ?
					if ($_POST['relate_to'] != 'Tags')
					{
						$GLOBALS['log']->debug("[CARRENET]Workflow tags creation call from subpanel");
						
						$relate_module=strtolower($_POST['relate_to']);
						$relate_record=$_POST['relate_id'];
						
						
						$temp_table="tags_".$relate_module;
						$temp_id_link=create_guid();
						$sql="INSERT INTO $temp_table (id, date_modified,deleted,tags_id,".$relate_module."_id) VALUES ('$temp_id_link','$now_sql','0','$temp_id_tags','$relate_record')";						
						$result=$db->query($sql);
					
					}
					
					
				}
				
			}

		} //end if (count($list_tags)>1)
		
	}
	
}



class Tags_after_save
{
	function Tags_after_save(&$bean, $event, $arguments)
	{
		$GLOBALS['log']->debug("[CARRENET]Workflow Tags_after_save - Tags_after_save");		
		$bean->id=merge_tags($bean->id);
		clean_links();
		refresh_count_elements_tags();
		
		}
	
}

class Tags_before_retrieve
{
	function Tags_before_retrieve(&$bean, $event, $arguments)
	{	
		$GLOBALS['log']->debug("[CARRENET]Workflow Tags_before_retrieve - Tags_before_retrieve");		
		clean_links();
		refresh_count_elements_tags();		
	}
	
}


?>
