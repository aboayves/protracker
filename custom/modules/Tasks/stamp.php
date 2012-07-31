<?php
class task_status_change
{
	function stamp_completion(&$bean, $event, $arguments)
	{
		if($bean->fetched_row['status'] != $bean->status)
		{
			if($bean->status == 'Completed')
			{
				$bean->date_complete = $bean->date_modified;
				$this->notify_parent($bean->id, $bean->parent_tasks_id);
				$this->notify_child($bean->id);
			}
			else
			{
				$bean->date_complete = '';
			}
		}
	}
	function setStatus(&$bean, $event, $arguments)
	{
		global $db;
		//this is true and weirdly going to be the parent bean (left) of the 1-M relationship
		if(is_array($bean->fetched_row) && $_REQUEST['subpanel_id'] == $bean->parent_tasks_id)
		{
			
			$status = '';
			if($bean->status != 'Completed')
			{
				$status = ", status = 'Pending' ";
			}
			$query = "UPDATE tasks SET parent_tasks_id ='{$bean->id}' {$status} WHERE id = '{$bean->parent_tasks_id}'";
			$db->query($query);
			$bean->parent_tasks_id = $bean->fetched_row['parent_tasks_id'];
		}
		else	//create scenario
		{
			$query = "SELECT status FROM tasks WHERE deleted=0 AND id='{$bean->parent_tasks_id}' LIMIT 1";
			$parent_task = $db->query($query);
			$parent_task = $db->fetchByAssoc($parent_task);
			if($parent_task['status']!='Completed')
			{
				$bean->status = 'Pending';
			}
		}
	}
	function notify_child($beanID)
	{
		$query = "SELECT assigned_user_id FROM tasks WHERE deleted=0 AND parent_tasks_id='{$beanID}'; ";
		$child_task = $db->query($query);
		while($child_task = $db->fetchByAssoc($child_task))
		{
			$this->doMail($child_task['assigned_user_id'], 'parent task completion notification','parent task completion notification');
		}
	}
	function notify_parent($beanID, $parentID)
	{
		$taskBean = new Task();
		$taskBean->retrieve($parentID);
		if($taskBean->notify_child_completion)
			$this->doMail($taskBean->assigned_user_id, 'task completion notification','task completion notification');
		if(!empty($taskBean->parent_tasks_id))
			$this->notify_parent($beanID, $taskBean->parent_tasks_id);
	}
	public function doMail($to_userID, $body, $subject)
	{
		$user = new User();
		$user->retrieve($to_userID);
		$userNameAndEmail = $user->getUsersNameAndEmail();
		$mail = $userNameAndEmail['email'];
		
		$sendCc = '';
		$mailSettings = array(
		'sendBcc' => '',
		'sendCc' => $sendCc,
		'sendTo' => $mail,
		'attachments' => array(),
//		'parent_id' => $this->id,
//		'parent_name' => $this->name,
//		'parent_type' => $this->module_dir,
		'fromAccount' => '', // the email setting ID of the current user
		'saveToSugar' => true,
		'sendSubject' => $subject,
		);
		
		// dirty workaround, because EMail class wants to have it by request
		$_REQUEST['setEditor'] = 1;
		$_REQUEST['sendDescription'] = htmlentities($body);
		
		$email = new Email();
		$email->email2init();
		$email->email2Send($mailSettings);
	}

}
?>