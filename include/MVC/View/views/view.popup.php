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

class ViewPopup extends SugarView{
    protected $override_popup = array();
	var $type ='list';
	function ViewPopup(){
		parent::SugarView();
	}

	function display(){
		global $popupMeta, $mod_strings;

        if(($this->bean instanceOf SugarBean) && !$this->bean->ACLAccess('list')){
            ACLController::displayNoAccess();
            sugar_cleanup(true);
        }

		if(isset($_REQUEST['metadata']) && strpos($_REQUEST['metadata'], "..") !== false)
			die("Directory navigation attack denied.");
        if (!empty($_REQUEST['metadata']) && $_REQUEST['metadata'] != 'undefined'
            && file_exists('custom/modules/' . $this->module . '/metadata/' . $_REQUEST['metadata'] . '.php')) {
            require 'custom/modules/' . $this->module . '/metadata/' . $_REQUEST['metadata'] . '.php';
        } elseif (!empty($_REQUEST['metadata']) && $_REQUEST['metadata'] != 'undefined'
            && file_exists('modules/' . $this->module . '/metadata/' . $_REQUEST['metadata'] . '.php')) {
            require 'modules/' . $this->module . '/metadata/' . $_REQUEST['metadata'] . '.php';
        } elseif (file_exists('custom/modules/' . $this->module . '/metadata/popupdefs.php')) {
            require 'custom/modules/' . $this->module . '/metadata/popupdefs.php';
        } elseif (file_exists('modules/' . $this->module . '/metadata/popupdefs.php')) {
            require 'modules/' . $this->module . '/metadata/popupdefs.php';
        }

	    if(!empty($popupMeta) && !empty($popupMeta['listviewdefs'])){
	    	if(is_array($popupMeta['listviewdefs'])){
	    		//if we have an array, then we are not going to include a file, but rather the
	    		//listviewdefs will be defined directly in the popupdefs file
	    		$listViewDefs[$this->module] = $popupMeta['listviewdefs'];
	    	}else{
	    		//otherwise include the file
	    		require_once($popupMeta['listviewdefs']);
	    	}
	    }elseif(file_exists('custom/modules/' . $this->module . '/metadata/listviewdefs.php')){
			require_once('custom/modules/' . $this->module . '/metadata/listviewdefs.php');
		}elseif(file_exists('modules/' . $this->module . '/metadata/listviewdefs.php')){
			require_once('modules/' . $this->module . '/metadata/listviewdefs.php');
		}

		//check for searchdefs as well
		if(!empty($popupMeta) && !empty($popupMeta['searchdefs'])){
	    	if(is_array($popupMeta['searchdefs'])){
	    		//if we have an array, then we are not going to include a file, but rather the
	    		//searchdefs will be defined directly in the popupdefs file
	    		$searchdefs[$this->module]['layout']['advanced_search'] = $popupMeta['searchdefs'];
	    	}else{
	    		//otherwise include the file
	    		require_once($popupMeta['searchdefs']);
	    	}
	    }else if(empty($searchdefs) && file_exists('custom/modules/'.$this->module.'/metadata/searchdefs.php')){
			require_once('custom/modules/'.$this->module.'/metadata/searchdefs.php');
		}else if(empty($searchdefs) && file_exists('modules/'.$this->module.'/metadata/searchdefs.php')){
	    	require_once('modules/'.$this->module.'/metadata/searchdefs.php');
		}

		//if you click the pagination button, it will populate the search criteria here
        if(!empty($this->bean) && isset($_REQUEST[$this->module.'2_'.strtoupper($this->bean->object_name).'_offset'])) {
            if(!empty($_REQUEST['current_query_by_page'])) {
                $blockVariables = array('mass', 'uid', 'massupdate', 'delete', 'merge', 'selectCount',
                    'sortOrder', 'orderBy', 'request_data', 'current_query_by_page');
                $current_query_by_page = unserialize(base64_decode($_REQUEST['current_query_by_page']));
                foreach($current_query_by_page as $search_key=>$search_value) {
                    if($search_key != $this->module.'2_'.strtoupper($this->bean->object_name).'_offset'
                    	&& !in_array($search_key, $blockVariables)) {
                        if (!is_array($search_value)) {
                            $_REQUEST[$search_key] = $GLOBALS['db']->quote($search_value);
                        }
                        else {
                            foreach ($search_value as $key=>&$val) {
                                $val = $GLOBALS['db']->quote($val);
                            }
                            $_REQUEST[$search_key] = $search_value;
                        }
                    }
                }
            }
        }

		if(!empty($listViewDefs) && !empty($searchdefs)){
			require_once('include/Popups/PopupSmarty.php');
			$displayColumns = array();
			$filter_fields = array();
			$popup = new PopupSmarty($this->bean, $this->module);
            if($this->bean->bean_implements('ACL')) {
                ACLField::listFilter($listViewDefs[$this->module],$this->module, $GLOBALS['current_user']->id ,true);
            }
			foreach($listViewDefs[$this->module] as $col => $params) {
	        	$filter_fields[strtolower($col)] = true;
				 if(!empty($params['related_fields'])) {
                    foreach($params['related_fields'] as $field) {
                        //id column is added by query construction function. This addition creates duplicates
                        //and causes issues in oracle. #10165
                        if ($field != 'id') {
                            $filter_fields[$field] = true;
                        }
                    }
                }
	        	if(!empty($params['default']) && $params['default'])
	           		$displayColumns[$col] = $params;
	    	}
	    	$popup->displayColumns = $displayColumns;
	    	$popup->filter_fields = $filter_fields;
	    	$popup->mergeDisplayColumns = true;
	    	//check to see if popupdefs contains searchdefs
	    	$popup->_popupMeta = $popupMeta;
            $popup->listviewdefs = $listViewDefs;
	    	$popup->searchdefs = $searchdefs;

	    	if(isset($_REQUEST['query'])){
				$popup->searchForm->populateFromRequest();
	    	}

			$massUpdateData = '';
			if(isset($_REQUEST['mass'])) {
				foreach(array_unique($_REQUEST['mass']) as $record) {
					$massUpdateData .= "<input style='display: none' checked type='checkbox' name='mass[]' value='$record'>\n";
				}
			}
			$popup->massUpdateData = $massUpdateData;

            $tpl = 'include/Popups/tpls/PopupGeneric.tpl';
            if(file_exists($this->getCustomFilePathIfExists("modules/{$this->module}/tpls/popupGeneric.tpl")))
            {
                $tpl = $this->getCustomFilePathIfExists("modules/{$this->module}/tpls/popupGeneric.tpl");
            }

            if(file_exists($this->getCustomFilePathIfExists("modules/{$this->module}/tpls/popupHeader.tpl")))
            {
                $popup->headerTpl = $this->getCustomFilePathIfExists("modules/{$this->module}/tpls/popupHeader.tpl");
            }

            if(file_exists($this->getCustomFilePathIfExists("modules/{$this->module}/tpls/popupFooter.tpl")))
            {
                $popup->footerTpl = $this->getCustomFilePathIfExists("modules/{$this->module}/tpls/popupFooter.tpl");
            }

			$popup->setup($tpl);

            //We should at this point show the header and javascript even if to_pdf is true.
            //The insert_popup_header javascript is incomplete and shouldn't be relied on.
            if (isset($this->options['show_all']) && $this->options['show_all'] == false)
            {
                unset($this->options['show_all']);
                $this->options['show_javascript'] = true;
                $this->options['show_header'] = true;
                $this->_displayJavascript();
            }
            insert_popup_header(null, false);
            if(isset($this->override_popup['template_data']) && is_array($this->override_popup['template_data']))
            {
                 $popup->th->ss->assign($this->override_popup['template_data']);
            }
			echo $popup->display();

		}else{
			if(file_exists('modules/' . $this->module . '/Popup_picker.php')){
				require_once('modules/' . $this->module . '/Popup_picker.php');
			}else{
				require_once('include/Popups/Popup_picker.php');
			}

			$popup = new Popup_Picker();
			$popup->_hide_clear_button = true;
			echo $popup->process_page();
		}
	}
}
?>
