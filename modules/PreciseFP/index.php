<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $theme;
global $mod_strings;
global $current_language;
if(isset($_REQUEST['step']))
{
	$step = $_REQUEST['step'];
}
else
{
	$step = '1';
}
include ('modules/PreciseFP/Step'. clean_string($step). '.php'); 
?>