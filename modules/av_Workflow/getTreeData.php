<?php
require_once('modules/av_Workflow/TreeData.php');

ob_clean();
echo json_encode(TreeData::getData($this->bean->id, $this->bean->name));
exit();
?>