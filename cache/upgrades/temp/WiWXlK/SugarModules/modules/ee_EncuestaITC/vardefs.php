<?php
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

$dictionary['ee_EncuestaITC'] = array(
	'table'=>'ee_encuestaitc',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'participante' => 
  array (
    'required' => false,
    'name' => 'participante',
    'vname' => 'LBL_PARTICIPANTE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Participante',
    'help' => 'Participante',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
  'idparticipante' => 
  array (
    'required' => false,
    'name' => 'idparticipante',
    'vname' => 'LBL_IDPARTICIPANTE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Id del Participante',
    'help' => 'Id del Participante',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
  'modulo' => 
  array (
    'required' => false,
    'name' => 'modulo',
    'vname' => 'LBL_MODULO',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Módulo',
    'help' => 'M&Atilde;&sup3;dulo',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
  'idmodulo' => 
  array (
    'required' => false,
    'name' => 'idmodulo',
    'vname' => 'LBL_IDMODULO',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Id Módulo',
    'help' => 'Id M&Atilde;&sup3;dulo',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
),
	'relationships'=>array (
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('ee_EncuestaITC','ee_EncuestaITC', array('basic','team_security','assignable'));