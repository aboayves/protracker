<?php
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

require_once('modules/Notifications/views/view.quicklist.php');

class ViewSystemQuicklist extends ViewQuickList{
	function ViewSystemQuicklist(){
		parent::ViewQuickList();
	}

	function display()
	{
		$GLOBALS['system_notification_buffer'] = array();
		$GLOBALS['buffer_system_notifications'] = true;
		$GLOBALS['system_notification_count'] = 0;
		$sv = new SugarView();
		$sv->includeClassicFile('modules/Administration/DisplayWarnings.php');
	    
		echo $this->_formatNotificationsForQuickDisplay($GLOBALS['system_notification_buffer'], "modules/Notifications/tpls/systemQuickView.tpl");
	}
}