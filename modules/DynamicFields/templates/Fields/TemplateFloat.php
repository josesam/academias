<?php
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

require_once('modules/DynamicFields/templates/Fields/TemplateRange.php');

class TemplateFloat extends TemplateRange
{
	var $type = 'float';
	var $default = null;
	var $default_value = null;
	var $len = '18';
	var $precision = '8';

	function TemplateFloat(){
		parent::__construct();
		$this->vardef_map['precision']='ext1';
		//$this->vardef_map['precision']='precision';
	}

    function get_field_def(){
    	$def = parent::get_field_def();
		$def['precision'] = isset($this->ext1) && $this->ext1 != '' ? $this->ext1 : $this->precision;
    	return $def;
    }

    function get_db_type(){
		$precision = (!empty($this->precision))? $this->precision: 6;
    	if(empty($this->len)) {
			return parent::get_db_type();
		}
		return " ".sprintf($GLOBALS['db']->getColumnType("decimal_tpl"), $this->len, $precision); 
	}
	
}
