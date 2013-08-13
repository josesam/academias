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

$dictionary['ee_PMP'] = array(
	'table'=>'ee_pmp',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'ee_programas_id_c' => 
  array (
    'required' => false,
    'name' => 'ee_programas_id_c',
    'vname' => '',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  ),
  'nombreprograma' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'nombreprograma',
    'vname' => 'LBL_NOMBREPROGRAMA',
    'type' => 'relate',
    'massupdate' => 0,
    'comments' => 'Nombre Programa',
    'help' => 'Nombre Programa',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'ee_programas_id_c',
    'ext2' => 'ee_Programas',
    'module' => 'ee_Programas',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'ee_modulos_id_c' => 
  array (
    'required' => false,
    'name' => 'ee_modulos_id_c',
    'vname' => '',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  ),
  'nombremodulo' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'nombremodulo',
    'vname' => 'LBL_NOMBREMODULO',
    'type' => 'relate',
    'massupdate' => 0,
    'comments' => 'Nombre Modulo',
    'help' => 'Nombre Modulo',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'ee_modulos_id_c',
    'ext2' => 'ee_Modulos',
    'module' => 'ee_Modulos',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'ee_profesores_id_c' => 
  array (
    'required' => false,
    'name' => 'ee_profesores_id_c',
    'vname' => '',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  ),
  'nombreprofesor' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'nombreprofesor',
    'vname' => 'LBL_NOMBREPROFESOR',
    'type' => 'relate',
    'massupdate' => 0,
    'comments' => 'Nombre Profesor',
    'help' => 'Nombre Profesor',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'ee_profesores_id_c',
    'ext2' => 'ee_Profesores',
    'module' => 'ee_Profesores',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'fechainicio' => 
  array (
    'required' => false,
    'name' => 'fechainicio',
    'vname' => 'LBL_FECHAINICIO',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => 'Fecha Inicio',
    'help' => 'Fecha Inicio',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'size' => '20',
    'enable_range_search' => false,
  ),
  'fechafin' => 
  array (
    'required' => false,
    'name' => 'fechafin',
    'vname' => 'LBL_FECHAFIN',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => 'Fecha Fin',
    'help' => 'Fecha Fin',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'size' => '20',
    'enable_range_search' => false,
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
VardefManager::createVardef('ee_PMP','ee_PMP', array('basic','team_security','assignable'));