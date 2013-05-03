<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/generic/SugarWidgets/SugarWidgetSubPanelTopButton.php'); 

class SugarWidgetSubPanelAssignWorkflowButton extends SugarWidgetSubPanelTopButton 
{ 


    function display(&$widget_data) 
    { 
        $button = ' <input type="button" name="assignWorkflow" id="assignWorkflow" class="button"' . "\"\n" 
            . ' title="Assign Workflow"' 
            . ' value="Assign Workflow" OnClick="window.location=\'index.php?module=av_Workflow&action=assign&populate_parent_type='.$widget_data['focus']->module_name.'&populate_parent=true&populate_parent_id='.$widget_data['focus']->id.'&populate_parent_name='.$widget_data['focus']->name.'\';"/>'; 
            return $button; 

    } 

} 
?>