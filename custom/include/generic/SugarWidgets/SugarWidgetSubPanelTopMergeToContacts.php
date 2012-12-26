<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/generic/SugarWidgets/SugarWidgetSubPanelTopButton.php'); 

class SugarWidgetSubPanelTopMergeToContacts extends SugarWidgetSubPanelTopButton 
{ 


    function display(&$widget_data) 
    { 
        $button = ' <input type="button" name="MergeContacts2Word" id="MergeContacts2Word" class="button"' . "\"\n" 
            . ' title="MergeContacts2Word"' 
            . ' value="Merge Contacts to Word" OnClick="window.open(\'index.php?module=av_Groups&action=MergeContacts2Word&record='.$widget_data['focus']->id.'&name='.$widget_data['focus']->name.'&sugar_body_only=true\');"/>'; 
            return $button; 

    } 

} 
?>