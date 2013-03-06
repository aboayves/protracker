<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class TreeHelper{
	public static function buildTreeNodes($module, $report_bean, $parentNode = '', $parentComboLabel = '', $parentLink = ''){
		global $beanFiles, $beanList;	
		
		$tree_array = array();				
		$bean_name = $beanList[$module];
		
		if(isset($beanFiles[$bean_name])){
			require_once($beanFiles[$bean_name]);	
					
			$allowedModules = $report_bean->getReportableModules();			
			$bean = new $bean_name;
			$linked_fields = $bean->get_linked_fields();
						
			$rel_added = array();
			foreach($linked_fields as $linked_field){
				$field = $linked_field['name'];
				
				if(isset($linked_field['reportable']) && $linked_field['reportable'] == false){
					continue;
				}
				
				if($bean->load_relationship($field)){
					$relationship = $bean->$field->_relationship;
					
					if(in_array($relationship->name, $rel_added)){
						continue;
					}
					
					if($relationship->lhs_module == 'Currencies' || $relationship->rhs_module == 'Currencies'){
						continue;
					}
					
					$rel_added[] = $relationship->name;
					
					$link_module = $relationship->lhs_module;										
					if($bean->$field->_get_bean_position()){
						$link_module = $relationship->rhs_module;
					}
					
					if(!isset($beanList[$link_module]) || !isset($allowedModules[$link_module]) || $link_module == $parentNode){
						continue;
					}
					
					$node = array();
					if(!empty($linked_field['vname'])){
						$node['text'] = translate($linked_field['vname'], $module);
					} else {
						$node['text'] = $linked_field['name'];
					}
					
					$node['text'] = rtrim(trim($node['text']), ':');
					
					$comboLabel = $node['text'];
					if($parentComboLabel != ''){
						$comboLabel = $parentComboLabel . ' > ' . $node['text'];
					}
					
					$link_name = $linked_field['name'];
					if($parentLink != ''){
						$link_name = $parentLink . '>' . $linked_field['name'];
					}
					
					$link_name = html_entity_decode($link_name);
					$comboLabel = html_entity_decode($comboLabel);
					
					$node['href'] = "javascript:reports.populateFields('" . $link_module . "','" . $link_name . "','" . $module . "','" . $comboLabel . "');";
					$node['leaf'] = false;
					$node['link_name'] = $link_name;
					$node['module_name'] = $link_module;
					$node['parentNode'] = $module;
					$node['Combo'] = $comboLabel;
					$tree_array[] = $node;
				}
			}
						
			$relateFields = $bean->get_related_fields();
			foreach($relateFields as $relateField){
				//To avoid Id fields
				if(isset($relateField['id_name']) && $relateField['id_name'] == $relateField['name']){
					continue;
				}
				
				if(isset($relateField['reportable']) && $relateField['reportable'] == false){
					continue;
				}
				
				if(isset($relateField['link']) && !empty($relateField['link'])){
					continue;
				}
				
				if(!isset($relateField['module']) || empty($relateField['module'])){
					continue;
				}
				
				$link_module = $relateField['module'];
				if(!isset($beanList[$link_module]) || !isset($allowedModules[$link_module]) ||$link_module == $parentNode ){
					continue;
				}
				
				$node = array();
				if(!empty($relateField['vname'])){
					$node['text'] = translate($relateField['vname'], $module);
				} else {
					$node['text'] = $relateField['name'];
				}
				
				$node['text'] = rtrim(trim($node['text']), ':');
				
				$comboLabel = $node['text'];
				if($parentComboLabel != ''){
					$comboLabel = $parentComboLabel . ' > ' . $node['text'];
				}
				
				$link_name = $relateField['name'];
				if($parentLink != ''){
					$link_name = $parentLink . '>' . $relateField['name'];
				}
				
				$node['href'] = "javascript:reports.populateFields('". $link_module . "','".$link_name."','".$module."','".$comboLabel."');";
				$node['leaf'] = false;
				$node['link_name'] = $link_name;
				$node['module_name'] = $link_module;
				$node['parentNode'] = $module;
				$node['Combo'] = $comboLabel;
				
				$node['text'] = rtrim($node['text'], ':');
				
				$tree_array[] = $node;
			}
		}
		
		return $tree_array;
	}
}
?>