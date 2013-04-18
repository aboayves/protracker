<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once("modules/SugarFeed/SugarFeedFlush.php");

class SugarFeedFlushCstm extends SugarFeedFlush {
    function flushStaleEntries($bean, $event, $arguments) {
		$browser = $this->browser_info();
		if(isset($browser['msie']) && $browser['msie'] == ' 9.0'){
			SugarApplication::appendErrorMessage('You are using an unsupported browser. Please Upgrade to Internet Explorer 10 or later. For best results, use Chrome or Firefox.');
		}
		parent::flushStaleEntries($bean, $event, $arguments);
	}
	
	function browser_info($agent=null) {
		$known = array('msie', 'firefox', 'safari', 'webkit', 'opera', 'netscape',
		'konqueror', 'gecko');
		$agent = strtolower($agent ? $agent : $_SERVER['HTTP_USER_AGENT']);
		$pattern = '#(?<browser>' . join('|', $known) .
		')[/ ]+(?<version>[0-9]+(?:\.[0-9]+)?)#';
		if (!preg_match_all($pattern, $agent, $matches)) return array();
		$i = count($matches['browser'])-1;
		return array($matches['browser'][$i] => $matches['version'][$i]);
	}
}
