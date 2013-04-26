<?php
	require_once("custom/modules/Project/TreeData.php");
	$project_bean = BeanFactory::getBean("Project", $_REQUEST['record']);
	$final = TreeData::getData($_REQUEST['record'], $project_bean->name);
	ob_clean();
	echo json_encode($final);
	exit();
?>