<?php
	ob_clean();
	$parent_bean = BeanFactory::getBean($_REQUEST['parent_module'], $_REQUEST['parent_id']);
	$team_array = array(
						'team_id' => $parent_bean->team_id,
						'team_name' => $parent_bean->team_name
						);
	echo json_encode($team_array);
	exit();
?>