<?php 
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
require_once('custom/include/MVC/View/views/view.edit.php'); 
class av_Net_WorthViewEdit extends CustomViewEdit 
{ 
    function av_Net_WorthViewEdit() 
	{ 
		parent::ViewEdit(); 
	}
	function display() 
	{
		$this->bean->grand_total = format_number(str_replace(",", "", $this->bean->grand_total), NULL, 0);
		$this->bean->managed_assets = format_number(str_replace(",", "", $this->bean->managed_assets), NULL, 0);
		parent::display();
	}
} 
?>
