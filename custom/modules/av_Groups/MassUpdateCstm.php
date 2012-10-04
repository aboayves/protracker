<?php

 	global $db;
	$ids = trim($_REQUEST['uid'], ',');
	$ids = str_replace("\"", "'", $ids);
	
	foreach($_REQUEST['mass'] as $k=>$v)
	{
		$_REQUEST['mass'][$k]="'".$v."'";
	}
	$ids = implode($_REQUEST['mass'], ", ");
	
	$fields = array('assigned_user_id', 'do_not_call', 'lead_source', 'reports_to_id', 'aux_mail', 'aux_email', 'team_name_collection_0' );
	$sql = " UPDATE contacts SET ";
	$sql_set=array();
	foreach($fields as $field)
	{
		if(isset($_REQUEST[$field]) AND !empty($_REQUEST[$field]))
		{
			$sql_set[]= " {$field}='{$_REQUEST[$field]}' ";
		}
	}
	$sql_set=implode($sql_set, ", ");

	$sql.=$sql_set;
	$sql.=" WHERE id IN ({$ids}) ";

		$db->query($sql);
	
	
	 SugarApplication::redirect('index.php?module=av_Groups&action=DetailView&record='.$_REQUEST['record']);

?>