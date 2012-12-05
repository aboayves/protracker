<?php
class task_status_change
{
	var $sent = array();
	var $parentPType;
	var $parentSubject;
	var $parentDueDate;
		
	function stamp_completion(&$bean, $event, $arguments)
	{
		if($bean->fetched_row['status'] != $bean->status)
		{
			if($bean->status == 'Completed')
			{
				$this->parentPType = $bean->parent_type;
				$this->parentPName = $bean->parent_name;
				
				$datetime = strtotime($bean->date_due);
				$duedate = date("d M, Y", $datetime);
				$this->parentDueDate = $duedate;
				
				$this->parentSubject = $bean->name;
				
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
		
		if($bean->status == 'Completed')
		{
			$query = "SELECT status FROM tasks WHERE deleted=0 AND id='{$bean->parent_tasks_id}' LIMIT 1";
			$parent_task = $db->query($query);
			if($parent_task = $db->fetchByAssoc($parent_task)){
				if($parent_task['status'] != 'Completed')
				{
					SugarApplication::appendErrorMessage('Unable to Complete the Task becuase parent task has not been completed.');
					$bean->status = 'Pending';
				}
			}
		}
	}
	
	function notify_child($beanID)
	{
		global $db, $sugar_config;

		$query = "SELECT  id, assigned_user_id, parent_type, date_due, name FROM tasks WHERE deleted=0 AND parent_tasks_id='{$beanID}' AND id NOT IN ('" . implode("','", $this->sent) . "'); ";
		$child_task = $db->query($query);
			$emailTemplate_bean = new EmailTemplate();
			$emailTemplate_bean->id = 'parent-completion-notification';
			$emailTemplate_bean->retrieve();
			$body = $emailTemplate_bean->body_html;
			
			$parentPType = $this->parentPType;
			$parentSubject = $this->parentSubject;
			$parentDueDate = $this->parentDueDate;
		
		while($child_task = $db->fetchByAssoc($child_task))
		{
			$childPType = $child_task['parent_type'];
			$childName = $child_task['name'];
			
			$datetime = strtotime( $child_task['date_due']);
			$duedate = date("d M, Y", $datetime);
			$childDueDate = $duedate;
			
			$curTaskId = $child_task['id'];
			
			$url=$sugar_config['site_url'];
			$taskLink =$url."/index.php?module=Tasks&action=DetailView&record={$curTaskId}";
			
			eval("\$body = \"$body\";");
			$this->doMail($child_task['assigned_user_id'], $body, 'Parent Task Completion Notification');
		}
	}
	
	function activate_child(&$bean, $event, $arguments)
	{
	   if($bean->status == 'Completed') {
	   global $db;
	   
       $query = "UPDATE tasks
	             SET status ='Not Started' 
	             WHERE parent_tasks_id='{$bean->id}' AND status= 'Pending' AND deleted=0" ;
	   $db->query($query);
	   }
	}
	
	function notify_parent($beanID, $parentID)
	{
		if(!in_array($parentID, $this->sent)){
			$this->sent[] = $parentID;
			
			$taskBean = new Task();
			$taskBean->retrieve($parentID);
			if($taskBean->notify_child_completion)
				$this->doMail($taskBean->assigned_user_id, 'task completion notification','task completion notification');
			if(!empty($taskBean->parent_tasks_id))
				$this->notify_parent($beanID, $taskBean->parent_tasks_id);
		}
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