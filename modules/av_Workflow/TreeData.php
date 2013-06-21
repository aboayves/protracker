<?php
class TreeData{
	public static function getData($wfID, $wfName = '', $users = array()) {
		$added_nodes = array($wfID);
		$tree = array();
		$assign_to_width="135";
		$category_width="180";
		$subject_width="200";
		if(!empty($users)){
			$assign_to_width="123";
			$category_width="168";
			$subject_width="188";
		}
		$tree['id'] = $wfID;
		$tree['html'] = "<table><tr style='color:#000;'><th id='name' title='Name'><span style='float:left;'>{$wfName} |</span>";
		$tree['type'] = 'HTML';
		$tree['html'] .= "".
					 "Name</th>".
					 "<th width='{$subject_width}px' title='Subject'>Subject</th>".
					 "<th width='{$category_width}px' title='Category'>Category</th>".
		 "<th width='{$assign_to_width}px' title='Assign To'>Assign To</th>";
		if(empty($users)){
			$tree['html'] .= "<th width='135px' title='Days Out'>Days Out</th>";
		}else{
			$tree['html'] .= "<th width='123px' title='Due Date'>Due Date</th>";
		}
	
		if(empty($users)){
			$tree['html'] .= "<th width='31px'>&nbsp;</th>";
			$tree['html'] .= "<th width='31px'>&nbsp;</th>";
		}
	
		$tree['html'] .= "</tr></table>";
		$tree['label'] = $wfName;
		$tree['href'] = "index.php?module=av_Workflow&action=DetailView&record={$wfID}";
		$tree['expanded'] = true;
		$tree['children'] = TreeData::getChilds($wfID, $added_nodes, $wfID, $wfName, true, $users);
		return $tree;
	}
	
	private static function getChilds($id, &$added_nodes = array(), $wfID, $wfName, $fromWF = false, $users = array()) {
		global $db, $app_list_strings, $current_user;
		
		$field = 'avt.parent_tasks_id';
		$addWhere = "";
		if($fromWF){
			$field = 'avt.av_Workflow_id';
			$addWhere = " AND (avt.parent_tasks_id IS NULL OR TRIM(avt.parent_tasks_id)='')";
		}
		
		$sql = "SELECT ".
					"avt.id, avt.name, avt.subject, avt.task_category, avt.assign_to, avt.relate_to, avt.days_out, ".
					"TRIM(CONCAT(IFNULL(u.first_name, ''), ' ', IFNULL(u.last_name, ''))) as 'assigned_user' ".
				"FROM av_task_template avt ".
				"LEFT JOIN users u ON avt.assigned_user_id=u.id AND u.deleted='0' ".
				"WHERE {$field} = '{$id}' AND avt.deleted=0" . $addWhere . " ORDER BY avt.days_out ASC";
		$result = $db->query($sql);
		$childs_array = array();
		$assign_to_default_value='';
		while ($row = $db->fetchByAssoc($result)){
			if(!empty($users)){
				$assign_to_default_value=$app_list_strings['task_assign_to_list'][$row['assign_to']];
				//Load assignto from request
				switch($row['assign_to']){
					case "Assigned_User":
						$row['assign_to'] = $users['parent_assigned_user'];
						
						if($row['relate_to'] == "Client"){
							$row['assign_to'] = $users['pri_cont_assigned_user'];
						}else if($row['relate_to'] == "Co_client"){
							$row['assign_to'] = $users['sec_cont_assigned_user'];
						}
					break;
					
					case "Project_Manager":
						$row['assign_to'] = $users['project_manager'];
					break;
					
					case "Specific_User":
						$row['assign_to'] = $row['assigned_user'];
					break;
					
					case "User_1":
						$row['assign_to'] = $users['user_1'];
					break;
					
					case "User_2":
						$row['assign_to'] = $users['user_2'];
					break;
					
					case "User_3":
						$row['assign_to'] = $users['user_3'];
					break;
					
					case "Current_User":
					default:
						$row['assign_to'] = $current_user->name;
					break;
				}
			} else {
				$row['assign_to'] = $app_list_strings['task_assign_to_list'][$row['assign_to']];
			}
			
			if(!in_array($row['id'], $added_nodes)){
				$added_nodes[] = $row['id'];
			
				$node = array();
				$node['id'] = $row['id'];
				$node['html'] = "<table>";
				
				/*if(count($added_nodes) == 2){
					$node['html'] .= "<tr style='color:#000'>".
										 "<th id='name' title='Name'>Name</th>".
										 "<th width='200px' title='Subject'>Subject</th>".
										 "<th width='150px' title='Category'>Category</th>".
										 "<th width='130px' title='Assign To'>Assign To</th>";
					if(empty($users)){
						$node['html'] .= "<th width='80px' title='Days Out'>Days Out</th>";
					}else{
						$node['html'] .= "<th width='80px' title='Due Date'>Due Date</th>";
					}
				
					if(empty($users)){
						$node['html'] .= "<th width='25px' colspan='2'>&nbsp;</th>";
					}
				
					$node['html'] .= "</tr>";
				}*/
				
				$node['html'] .=	"<tr>".
										"<td  id='name' title='Name' ><a href='index.php?module=av_Task_Template&action=DetailView&record={$row['id']}'>{$row['name']}</a></td>".
										"<td width='200px' title='Subject'>{$row['subject']}</td>".
										"<td width='180px' title='Category'>{$row['task_category']}</td>".
										"<td width='135px' name='assign_to' default_value='{$assign_to_default_value}' title='Assign To'>{$row['assign_to']}</td>".
										"<td width='135px' title='Days Out'>";
				if(empty($users)){
					$node['html'] .=  		"{$row['days_out']}";
				}else{
					$node['html'] .=  		"DAYS_OUT";
				}
				
				$node['html'] .=  "<input type='hidden' value={$row['id']}</td>";
				
				if(empty($users)){
					$node['html'] .= 	"<td width='31px' style='text-align:center;vertical-align:middle' title='Edit Task Template'>".
											"<a href='index.php?module=av_Task_Template&action=EditView&record={$row['id']}&return_module=av_Workflow&return_action=DetailView&return_id={$wfID}'>".
												"<img src='themes/Sugar/images/edit_inline.png'/>".
											"</a>".
										"</td>".
										"<td width='31px' style='text-align:center;vertical-align:middle' title='Add Dependent Task Template'>".
											"<a href='index.php?module=av_Task_Template&action=EditView&parent_tasks_id={$row['id']}&parent_tasks_name={$row['name']}&av_Workflow_id={$wfID}&av_Workflow_name={$wfName}&return_module=av_Workflow&return_action=DetailView&return_id={$wfID}'>".
												"<img src='themes/Sugar/images/create-record.png'/>".
											"</a>".
										"</td>";
				}
				
				$node['html'] .= 	"</tr>".
								 "</table>";
				
				$node['type'] = 'HTML';
				$node['label'] = $row['name'];
				$node['highlightState']='1';
				$node['href'] = "index.php?module=av_Task_Template&action=DetailView&record={$row['id']}&av_Workflow_id={$wfID}&av_Workflow_name={$wfName}";
				$node['expanded'] = true;
				$node['children'] = TreeData::getChilds($row['id'], $added_nodes, $wfID, $wfName, false, $users);
			
				$childs_array[] = $node;
				
			}
		}
		
		return $childs_array;
	}
}
?>