<?php
 if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
 global $mod_strings, $app_strings, $sugar_config;
 
 if(ACLController::checkAccess('av_Account_Histories', 'edit', true))$module_menu[]=Array("index.php?module=av_Account_Histories&action=EditView&return_module=av_Account_Histories&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'],"Createav_Account_Histories", 'av_Account_Histories');
 if(ACLController::checkAccess('av_Account_Histories', 'list', true))$module_menu[]=Array("index.php?module=av_Account_Histories&action=index&return_module=av_Account_Histories&return_action=DetailView", $mod_strings['LNK_LIST'],"av_Account_Histories", 'av_Account_Histories');
 if(ACLController::checkAccess('av_Account_Histories', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=av_Account_Histories&return_module=av_Account_Histories&return_action=index", $app_strings['LBL_IMPORT'],"Import", 'av_Account_Histories');