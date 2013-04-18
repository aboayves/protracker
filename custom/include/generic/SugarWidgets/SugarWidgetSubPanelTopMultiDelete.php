<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/generic/SugarWidgets/SugarWidgetSubPanelTopButton.php'); 

class SugarWidgetSubPanelTopMultiDelete extends SugarWidgetSubPanelTopButton 
{ 
    function display(&$widget_data){ 
        $button = ' <input type="button" name="DeleteMulti" id="DeleteMulti" class="button"' . "\"\n" 
            . ' title="DeleteMulti"' 
            . ' value="Delete" OnClick="deleteMultiGroupMembers(\''.$widget_data['subpanel_definition']->_instance_properties['module'].'\',\''.$widget_data['subpanel_definition']->name.'\' );"/>'; 
            return $button; 

    } 

} 
?>