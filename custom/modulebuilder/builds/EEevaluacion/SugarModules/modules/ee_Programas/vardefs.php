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

$dictionary['ee_Programas'] = array(
	'table'=>'ee_programas',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'codigo' => 
  array (
    'required' => false,
    'name' => 'codigo',
    'vname' => 'LBL_CODIGO',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Codigo',
    'help' => 'Codigo',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => '20',
    'size' => '20',
  ),
  'tipoprograma' => 
  array (
    'required' => false,
    'name' => 'tipoprograma',
    'vname' => 'LBL_TIPOPROGRAMA',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Incompany',
    'comments' => 'Tipo Programa',
    'help' => 'Tipo Programa',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'tipoprograma_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'coordinador' => 
  array (
    'required' => false,
    'name' => 'coordinador',
    'vname' => 'LBL_COORDINADOR',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Coordinador',
    'help' => 'Coordinador',
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
VardefManager::createVardef('ee_Programas','ee_Programas', array('basic','team_security','assignable'));