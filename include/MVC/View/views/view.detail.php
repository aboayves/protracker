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

require_once('include/DetailView/DetailView2.php');
require_once("modules/ACLRoles/ACLRole.php");
/**
 * Default view class for handling DetailViews
 *
 * @package MVC
 * @category Views
 */
class ViewDetail extends SugarView
{
    /**
     * @see SugarView::$type
     */
    public $type = 'detail';
	
    /**
     * @var DetailView2 object 
     */
    public $dv;
	
    /**
     * Constructor
     *
     * @see SugarView::SugarView()
     */
    public function ViewDetail()
    {
        parent::SugarView();
    }
	
    /**
     * @see SugarView::preDisplay()
     */
    public function preDisplay()
    {
 	    $metadataFile = $this->getMetaDataFile();
 	    $this->dv = new DetailView2();
 	    $this->dv->ss =&  $this->ss;
 	    $this->dv->setup($this->module, $this->bean, $metadataFile, get_custom_file_if_exists('include/DetailView/DetailView.tpl'));
    } 	
 	
    /**
     * @see SugarView::display()
     */
    public function display()
    {	
		global $current_user;
        if(empty($this->bean->id)){
            sugar_die($GLOBALS['app_strings']['ERROR_NO_RECORD']);
        }
		
		$acl_role_obj = new ACLRole();
		$user_roles = $acl_role_obj->getUserRoles($current_user->id); 
		foreach($user_roles as $user_role)
		{
			if(!($user_role == 'Enterprise Edition' || ($user_role != 'Professional Edition' && $user_role != 'Standard Edition' && $current_user->is_admin)))
			{
				$this->dv->defs['templateMeta']['form']['hideAudit'] = true;
			}
		}
		if(isset($_REQUEST['print']) && $_REQUEST['print'] =='true'){
			$this->dv->defs['templateMeta']['useTabs'] = false;
		}
        $this->dv->process();
        echo $this->dv->display();
    }
}
