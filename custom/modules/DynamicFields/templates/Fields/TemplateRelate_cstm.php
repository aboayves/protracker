<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class TemplateRelate_cstm extends TemplateRelatedTextField
{
    var $type = 'relate_cstm';
	function get_field_def()
	{ 
		$def = parent::get_field_def(); 
		$def['dbType'] = 'varchar'; 
		return $def;
	}
}
?>
