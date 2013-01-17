<?php
class AttachToGroupId{
	function assign_members($bean, $event, $arguments){
		if(!empty($bean->attach_to_group_id)){
			global $db;
			$record = array();
			foreach($bean->field_defs as $key => $value){
				if($value['source'] != 'non-db' && $value['source'] != 'function'){
					$record[$key] = $bean->$key;
				}
			}
			//adding single note entry for group 
			$record['attach_to_group_id'] = '';
			$record['av_group_id'] = $bean->attach_to_group_id;
			$keys = implode(',' , array_keys($record));
			$values = implode("','" , array_values($record));
			if(!empty($values)){
				$values = "'" . $values . "'";
			}
			$sql = "INSERT INTO notes (" . $keys . ") VALUES (" . $values . ")";
			$db->query($sql);
			unset($record['av_group_id']);
			//adding note entry for each group memeber
			$query="SELECT rt.parent_id, rt.parent_type	FROM av_group_membership AS rt WHERE rt.deleted=0 AND rt.av_groups_id='{$bean->attach_to_group_id}' AND rt.include=1";
			$result = $db->query($query);		
			while ($row = $db->fetchByAssoc($result)){
				$newID=create_guid();
				$record['id'] = $newID;
				$record['parent_id'] = $row['parent_id'];
				$record['parent_type'] = $row['parent_type'];
				$keys = implode(',' , array_keys($record));
				$values = implode("','" , array_values($record));
				if(!empty($values)){
					$values = "'" . $values . "'";
				}
			    $sql = "INSERT INTO notes (" . $keys . ") VALUES (" . $values . ")";
				$db->query($sql); 
		   }
	       SugarApplication::redirect("index.php?action=DetailView&module=av_Groups&record={$bean->attach_to_group_id}");
	   }	
	}
}

?>