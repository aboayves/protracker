<?php class av_HelpController extends SugarController{     
	function action_help(){ 	
		global $db;
		$sql = "SELECT helpid FROM av_help WHERE name='".$_REQUEST['help_module']."' AND view='".$_REQUEST['help_action']."' AND deleted = 0";
		$rs = $db->query($sql);
		while($row = $db->fetchByAssoc($rs))
		{
			$helpid = $row['helpid'];
		} 
		if (strlen($helpid)>0) {
			header('Location: http://protracker.zendesk.com/entries/'.$helpid);
		} else {
			die("Help article not found. <A Href='https://protracker.zendesk.com/categories/20101816'>Click here</A> to continue to the knowledge base");
		}
	}
} 
?>