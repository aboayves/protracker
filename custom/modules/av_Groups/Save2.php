<?php
 
	$records=$_POST['subpanel_id'];
	$module_selected=$_POST['module_selected'];
if(!empty($records) && !is_array($records))
	$records = array($records);
foreach($records as $value)
 {
	$data=getNameAndEnvelope($module_selected,$value);
	$group_membership_bean = new rt_Group_Membership();
	$group_membership_bean->name= $data['name'];
	$group_membership_bean->delivery_method=getDileveryMethod($_POST['record']);
	$group_membership_bean->envelope=$data['envelope'];
	$group_membership_bean->parent_id=$value;
	$group_membership_bean->parent_type=$module_selected;
	$group_membership_bean->save();
	$group_membership_bean->load_relationship('rt_group_membership_av_groups'); 
	$group_membership_bean->rt_group_membership_av_groups->add($_POST['record']); 
	$group_membership_bean->save();

 }
 $refreshsubpanel=true;
 if ($refreshsubpanel) {
	//refresh contents of the sub-panel.
	$GLOBALS['log']->debug("Location: index.php?sugar_body_only=1&module=".$_REQUEST['module']."&subpanel=".$_REQUEST['subpanel_module_name']."&action=SubPanelViewer&inline=1&record=".$_REQUEST['record']);
	if( empty($_REQUEST['refresh_page']) || $_REQUEST['refresh_page'] != 1){
		$inline = isset($_REQUEST['inline'])?$_REQUEST['inline']: $inline;
		header("Location: index.php?sugar_body_only=1&module=".$_REQUEST['module']."&subpanel=".$_REQUEST['subpanel_module_name']."&action=SubPanelViewer&inline=$inline&record=".$_REQUEST['record']);
	}
}

function getNameAndEnvelope($module,$id)
 {
   global $db;
	if($module =='Accounts')
	{
		$query = "SELECT name,envelope FROM $module WHERE id='$id' AND deleted=0 LIMIT 1";
	}
	else
	{	
		$query = "SELECT CONCAT(IFNULL(salutation,''),' ',IFNULL(first_name,''),' ',IFNULL(last_name,'')) as name,envelope FROM $module WHERE id='$id' AND deleted=0 LIMIT 1";
	}	
	$res = $db->query($query); 
	$row = $db->fetchByAssoc($res);
	return $row;
 }
function getDileveryMethod($id)
 {  
	 global $db;
		$query = "SELECT delivery_method FROM av_groups WHERE id='$id' AND deleted=0 LIMIT 1";
		$res = $db->query($query); 
		$row = $db->fetchByAssoc($res); 
		return $row['delivery_method'];
 }
?>