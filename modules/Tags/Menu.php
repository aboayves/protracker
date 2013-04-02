<?php
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
global $mod_strings, $app_strings, $sugar_config;

if(ACLController::checkAccess('Tags', 'edit', true))$module_menu[]=Array("index.php?module=Tags&action=EditView&return_module=Tags&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'],"CreateTags", 'Tags');
if(ACLController::checkAccess('Tags', 'list', true))$module_menu[]=Array("index.php?module=Tags&action=index&return_module=Tags&return_action=DetailView", $mod_strings['LNK_LIST'],"Tags", 'Tags');


?> 
