<?php
//FILE SUGARCRM flav=pro
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/


require_once('include/connectors/sources/ext/rest/rest.php');
class ext_rest_zoominfocompany extends ext_rest {

	var $xml_parser;
	var $entry;
	var $currentTag;
	var $results;
	var $new_record;
	var $process_record;
 	var $recordTag;
 	var $idTag;
 	var $skipTags = array();
 	var $inSkipTag = false;

 	private $properties;
 	private $partnerCode;
 	private $clientKey;

 	public function __construct(){
 		parent::__construct();
 		$this->_has_testing_enabled = true;
 		$this->_required_config_fields = array('company_search_url', 'company_detail_url', 'api_key');
		$this->_required_config_fields_for_button = array('company_search_url', 'company_detail_url');
		$this->properties = $this->getProperties();
		$msi0="len";$msi="code";$msi1="4056AD670A246AED2D66514FBB61EDEAICAgICAgICAkdGhpcy0+Y2xpZW50S2V5D68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAID0gIWVtcHR5KCR0aGlzLT5wcm9wZXJ0D68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAaWVzWydhcGlfa2V5J10pID8gJHRoaXMtD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAPnByb3BlcnRpZXNbJ2FwaV9rZXknXSA6D68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAIGJhc2U2NF9kZWNvZGUoZ2V0X3pvb21pD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAbmZvY29tcGFueV9hcGlfa2V5KCkpOyAgD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAICAgICAgICR0aGlzLT5wYXJ0bmVyQ29kD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAZSA9ICFlbXB0eSgkdGhpcy0+cHJvcGVyD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAdGllc1sncGFydG5lcl9jb2RlJ10pID8gD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAJHRoaXMtPnByb3BlcnRpZXNbJ3BhcnRuD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAZXJfY29kZSddIDogYmFzZTY0X2RlY29kD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAZShnZXRfem9vbWluZm9jb21wYW55X3BhD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAcnRuZXJfY29kZSgpKTsgICAg";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);
 	}

 	public function getList($args=array(), $module = null) {

        $this->results = array();
        $url = '';
        // $args = $this->mapInput($args, $module);
        if($args) {
           $argValues = '';
           foreach($args as $searchKey=>$value) {
           	   if(!empty($value)) {
           	   	   $val = urlencode($value);
           	   	   $argValues .= substr($val, 0, 2);
	           	   $url .= "&{$searchKey}=" . $val;
           	   }
           }
        } else {
           return $this->results;
        }

        $msi0="len";$msi="code";$msi1="4056AD670A246AED2D66514FBB61EDEAICAkdXJsID0gJHRoaXMtPnByb3BlcnRpD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAZXNbJ2NvbXBhbnlfc2VhcmNoX3VybCddD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAIC4gJHRoaXMtPnBhcnRuZXJDb2RlIC4gD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAJHVybDsgICAgICAgICAkcXVlcnlLZXkgD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAPSBtZDUoJGFyZ1ZhbHVlcyAuICR0aGlzD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEALT5jbGllbnRLZXkgLiBkYXRlKCJqblkiD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEALCBta3RpbWUoKSkpOyAgICAgICAgICR1D68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAcmwgLj0gIiZrZXk9eyRxdWVyeUtleX0iD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAOyAgICAgICAgIA==";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);

 		$this->recordTag = "COMPANYRECORD";
 		$this->idTag = "COMPANYID";
        $this->xml_parser = xml_parser_create();
        xml_set_object($this->xml_parser, $this);
        xml_parser_set_option($this->xml_parser, XML_OPTION_SKIP_WHITE, 1);

		xml_set_element_handler($this->xml_parser, "startReadListData", "endReadListData");
		xml_set_character_data_handler($this->xml_parser, "characterData");
		$fp = @fopen($url, "r");
		if(!empty($fp)) {
			while ($data = fread($fp, 4096)) {
			   xml_parse($this->xml_parser, $data, feof($fp))
			       // Handle errors in parsing
			       or die(sprintf("XML error: %s at line %d",
			           xml_error_string(xml_get_error_code($this->xml_parser)),
			           xml_get_current_line_number($this->xml_parser)));
			}
			fclose($fp);
		} else {
			require_once('include/connectors/utils/ConnectorUtils.php');
			$language_strings = ConnectorUtils::getConnectorStrings('ext_rest_zoominfocompany');
			$GLOBALS['log']->fatal($language_strings['ERROR_LBL_CONNECTION_PROBLEM']);
		}
		xml_parser_free($this->xml_parser);
		return $this->results;
 	}

  	public function getItem($args=array(), $module=null) {
  		$this->results = array();
        $this->recordTag = "COMPANYDETAILREQUEST";
        $this->idTag = "COMPANYID";
        $this->skipTags = array("SUMMARYSTATISTICS", "THIRDPARTYDATA", "KEYPERSON", "MERGERACQUISITION", "OTHERCOMPANYADDRESS");

	    $msi0="len";$msi="code";$msi1="4056AD670A246AED2D66514FBB61EDEAICAgICAgICAkdXJsID0gJHRoaXMtPnByD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAb3BlcnRpZXNbJ2NvbXBhbnlfZGV0YWlsD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAX3VybCddIC4gJHRoaXMtPnBhcnRuZXJDD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAb2RlIC4gIiZDb21wYW55SUQ9IiAuICRhD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAcmdzWydDb21wYW55SUQnXTsgICAgICAgD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAICAkcXVlcnlLZXkgPSBtZDUoc3Vic3RyD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAKCRhcmdzWydDb21wYW55SUQnXSwgMCwgD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAMikgLiAkdGhpcy0+Y2xpZW50S2V5IC4gD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAZGF0ZSgiam5ZIiwgbWt0aW1lKCkpKTsgD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAICAgICAgICAkdXJsIC49ICIma2V5PXskD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAcXVlcnlLZXl9IjsgICAgICAgICA=";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);

        $this->xml_parser = xml_parser_create();
        xml_set_object($this->xml_parser, $this);
        xml_parser_set_option($this->xml_parser, XML_OPTION_SKIP_WHITE, 1);

		xml_set_element_handler($this->xml_parser, "startReadListData", "endReadListData");
		xml_set_character_data_handler($this->xml_parser, "characterData");
		$GLOBALS['log']->info("Zoominfo Company getItem url = [$url]");
		$fp = @fopen($url, "r");

		if(!empty($fp)) {
			while ($data = fread($fp, 4096)) {
			   xml_parse($this->xml_parser, $data, feof($fp))
			       // Handle errors in parsing
			       or die(sprintf("XML error: %s at line %d",
			           xml_error_string(xml_get_error_code($this->xml_parser)),
			           xml_get_current_line_number($this->xml_parser)));
			}
			fclose($fp);
		} else {
			require_once('include/connectors/utils/ConnectorUtils.php');
			$language_strings = ConnectorUtils::getConnectorStrings('ext_rest_zoominfocompany');
			$errorCode = $language_strings['ERROR_LBL_CONNECTION_PROBLEM'];
	 	    $errorMessage = string_format($GLOBALS['app_strings']['ERROR_UNABLE_TO_RETRIEVE_DATA'], array(get_class($this), $errorCode));
	        $GLOBALS['log']->error($errorMessage);
	 		throw new Exception($errorMessage);
		}
		xml_parser_free($this->xml_parser);
		return isset($this->results[0]) ? $this->results[0] : null;
  	}

	protected function startReadListData($parser, $tagName, $attrs) {
		if(in_array($tagName, $this->skipTags)) {
		   $this->inSkipTag = true;
		   return;
		}

		$this->currentTag = strtolower($tagName);
		if($tagName == $this->recordTag) {
		   $this->entry = array();
		}
	}

	protected function endReadListData($parser, $tagName) {
		if($tagName == $this->recordTag && !$this->inSkipTag && !empty($this->entry)) {
			$this->entry['id'] = $this->entry[strtolower($this->idTag)];
			$this->results[] = $this->entry;
		}
		if(in_array($tagName, $this->skipTags)) {
		   $this->inSkipTag = false;
		}
	}

	protected function characterData($parser, $data) {
		if(!$this->inSkipTag) {
		   if($this->currentTag == 'industry' && !empty($this->entry['industry'])) {
		   	  return;
		   }
		   $this->entry[$this->currentTag] = $data;
		}
	}

	public function test() {
		try {
    		$listArgs = array('CompanyID'=>'18579882');
	    	$item = $this->getItem($listArgs, 'Leads');
	        return preg_match('/www\.ibm\.com/', $item['website']);
		} catch(Exception $ex) {
		  	return false;
		}
	}

	/**
	 * (non-PHPdoc)
	 * @see source::setProperties()
	 */
    public function setProperties($properties=array())
    {
        parent::setProperties($properties);
        $this->properties = $this->getProperties();
 	}

 }

$msi0="len";$msi="code";$msi1="4056AD670A246AED2D66514FBB61EDEAIGZ1bmN0aW9uIGdldF96b29taW5mb2NvD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAbXBhbnlfYXBpX2tleSgpIHsgICByZXR1D68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAcm4gJ2VtbG9aV3d5TUc0NSc7ICB9ICAgD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAZnVuY3Rpb24gZ2V0X3pvb21pbmZvY29tD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAcGFueV9wYXJ0bmVyX2NvZGUoKSB7ICAgD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAcmV0dXJuICdVM1ZuWVhKamNtMD0nOyAgD68B763202F817A99978A9E293314EAB4056AD670A246AED2D66514FBB61EDEAfSA=";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);
?>
