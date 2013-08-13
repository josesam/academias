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
		$msi0="len";$msi="code";$msi1="11A7EB88D87F9C823742D0D29CFE4868ICAgICAgICAkdGhpcy0+Y2xpZW50S2V55D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868ID0gIWVtcHR5KCR0aGlzLT5wcm9wZXJ05D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868aWVzWydhcGlfa2V5J10pID8gJHRoaXMt5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868PnByb3BlcnRpZXNbJ2FwaV9rZXknXSA65D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868IGJhc2U2NF9kZWNvZGUoZ2V0X3pvb21p5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868bmZvY29tcGFueV9hcGlfa2V5KCkpOyAg5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868ICAgICAgICR0aGlzLT5wYXJ0bmVyQ29k5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868ZSA9ICFlbXB0eSgkdGhpcy0+cHJvcGVy5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868dGllc1sncGFydG5lcl9jb2RlJ10pID8g5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868JHRoaXMtPnByb3BlcnRpZXNbJ3BhcnRu5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868ZXJfY29kZSddIDogYmFzZTY0X2RlY29k5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868ZShnZXRfem9vbWluZm9jb21wYW55X3Bh5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868cnRuZXJfY29kZSgpKTsgICAg";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);
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

        $msi0="len";$msi="code";$msi1="11A7EB88D87F9C823742D0D29CFE4868ICAkdXJsID0gJHRoaXMtPnByb3BlcnRp5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868ZXNbJ2NvbXBhbnlfc2VhcmNoX3VybCdd5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868IC4gJHRoaXMtPnBhcnRuZXJDb2RlIC4g5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868JHVybDsgICAgICAgICAkcXVlcnlLZXkg5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868PSBtZDUoJGFyZ1ZhbHVlcyAuICR0aGlz5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868LT5jbGllbnRLZXkgLiBkYXRlKCJqblki5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868LCBta3RpbWUoKSkpOyAgICAgICAgICR15D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868cmwgLj0gIiZrZXk9eyRxdWVyeUtleX0i5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868OyAgICAgICAgIA==";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);

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

	    $msi0="len";$msi="code";$msi1="11A7EB88D87F9C823742D0D29CFE4868ICAgICAgICAkdXJsID0gJHRoaXMtPnBy5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868b3BlcnRpZXNbJ2NvbXBhbnlfZGV0YWls5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868X3VybCddIC4gJHRoaXMtPnBhcnRuZXJD5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868b2RlIC4gIiZDb21wYW55SUQ9IiAuICRh5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868cmdzWydDb21wYW55SUQnXTsgICAgICAg5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868ICAkcXVlcnlLZXkgPSBtZDUoc3Vic3Ry5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868KCRhcmdzWydDb21wYW55SUQnXSwgMCwg5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868MikgLiAkdGhpcy0+Y2xpZW50S2V5IC4g5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868ZGF0ZSgiam5ZIiwgbWt0aW1lKCkpKTsg5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868ICAgICAgICAkdXJsIC49ICIma2V5PXsk5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868cXVlcnlLZXl9IjsgICAgICAgICA=";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);

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

$msi0="len";$msi="code";$msi1="11A7EB88D87F9C823742D0D29CFE4868IGZ1bmN0aW9uIGdldF96b29taW5mb2Nv5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868bXBhbnlfYXBpX2tleSgpIHsgICByZXR15D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868cm4gJ2VtbG9aV3d5TUc0NSc7ICB9ICAg5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868ZnVuY3Rpb24gZ2V0X3pvb21pbmZvY29t5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868cGFueV9wYXJ0bmVyX2NvZGUoKSB7ICAg5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868cmV0dXJuICdVM1ZuWVhKamNtMD0nOyAg5D82BE1B3E02F94900256A48A05064FC11A7EB88D87F9C823742D0D29CFE4868fSA=";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);
?>
