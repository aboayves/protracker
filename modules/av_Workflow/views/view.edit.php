<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class av_WorkflowViewEdit extends ViewEdit {
	public function display() {
		$bean = BeanFactory::getBean($this->bean->parent_type, $this->bean->parent_id);
		$this->bean->related_to = $bean->name;
        parent::display();
    }

}