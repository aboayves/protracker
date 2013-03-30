<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 *  
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * You may copy and distribute this program :
 *  You give the recipient a copy of this License.
 * You give credit to all Contributors 
 *
 * CARRENET  - 2009-2012
 * http://www.carrenet.com/sugarcrm
 * info@carrenet.com
 ********************************************************************************/


require_once('include/Dashlets/Dashlet.php');
require_once('modules/Tags/tags_iFrame.php');
require_once('modules/Tags/Tags.php');

class TagsDashlet extends Dashlet {    
    
    var $defaultURL = 'index.php?module=Tags&action=cloud';
    var $url;

    function TagsDashlet($id, $options = null) {
        parent::Dashlet($id);
        $this->isConfigurable = true;
        
        if(empty($options['title'])) { 
        	$this->title = translate('LBL_HOMEPAGE_TITLE', 'Tags');
        } else {
            $this->title = $options['title'];
        }
                
        $this->url = $this->defaultURL;

        if(empty($options['height']) || (int)$options['height'] < 1 ) { 
            $this->height = 260; 
        } else {
            $this->height = (int)$options['height'];
        }
        

    }

    function displayOptions() {
        global $app_strings;
        $ss = new Sugar_Smarty();
        $ss->assign('titleLBL', translate('LBL_DASHLET_OPT_TITLE', 'Tags'));		
		$ss->assign('heightLBL', translate('LBL_DASHLET_OPT_HEIGHT', 'Tags'));
		$ss->assign('typeLBL', translate('LBL_DASHLET_OPT_TYPE', 'Tags'));
        $ss->assign('title', $this->title);
        $ss->assign('id', $this->id);
        $ss->assign('height', $this->height);
        $ss->assign('saveLBL', $app_strings['LBL_SAVE_BUTTON_LABEL']);
        
        
        
        return  $ss->fetch('modules/Tags/Dashlets/TagsDashlet/TagsDashletconfigure.tpl');        
    }

    function saveOptions($req) {
        $options = array();
        
        if ( isset($req['title']) ) {
            $options['title'] = $req['title'];
        }        
        if ( isset($req['height']) ) {
            $options['height'] = (int)$req['height'];
        }
		
        return $options;
    }

    function display(){

        $sugar_edition = 'COM';


        $out_url = str_replace(
            array('@@LANG@@','@@VER@@','@@EDITION@@'),
            array($GLOBALS['current_language'],$GLOBALS['sugar_config']['sugar_version'],$sugar_edition),
            $this->url);
            		
        return parent::display() . "<iframe class='teamNoticeBox' src='".$out_url."' height='".$this->height."px'></iframe>";
    }
}

