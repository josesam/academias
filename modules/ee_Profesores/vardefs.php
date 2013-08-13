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

$dictionary['ee_Profesores'] = array(
	'table'=>'ee_profesores',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'areasconocimiento' => 
  array (
    'required' => false,
    'name' => 'areasconocimiento',
    'vname' => 'LBL_AREASCONOCIMIENTO',
    'type' => 'multienum',
    'massupdate' => '1',
    'comments' => 'Areas Conocimiento',
    'help' => 'Areas Conocimiento',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'size' => '20',
    'options' => 'areasconocimiento_list',
    'studio' => 'visible',
    'dependency' => '',
    'isMultiSelect' => true,
  ),
  'nivelconocimiento' => 
  array (
     'required' => false,
    'name' => 'nivelconocimiento',
    'vname' => 'LBL_NIVELCONOCIMIENTO',
    'type' => 'decimal',
    'massupdate' => 0,
    'default' => '',
    'comments' => 'Nivel Conocimiento',
    'help' => 'Nivel Conocimiento',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => 5,
    'size' => '20',
    'studio' => 'visible',
    'enable_range_search' => false,  
    'dependency' => false,
     'precision' => '2',  
  ),
  'induccion' => 
  array (
    'required' => false,
    'name' => 'induccion',
    'vname' => 'LBL_INDUCCION',
    'type' => 'bool',
    'massupdate' => 0,
    'comments' => 'Induccion',
    'help' => 'Induccion',
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
  'estado' => 
  array (
    'required' => false,
    'name' => 'estado',
    'vname' => 'LBL_ESTADO',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Activo',
    'comments' => 'Estado',
    'help' => 'Estado',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'estado_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'honorarioshora' => 
  array (
    'required' => false,
    'name' => 'honorarioshora',
    'vname' => 'LBL_HONORARIOSHORA',
    'type' => 'decimal',
    'massupdate' => 0,
    'default' => '0.00',
    'comments' => 'Honorarios por hora',
    'help' => 'Honorarios por hora',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
  ),
  'niveltitulo2' => 
  array (
    'required' => false,
    'name' => 'niveltitulo2',
    'vname' => 'LBL_NIVELTITULO2',
    'type' => 'multienum',
    'massupdate' => 0,
    'comments' => 'Nivel titulo profesional',
    'help' => 'Nivel titulo profesional',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'size' => '20',
    'options' => 'niveltitulo_list',
    'studio' => 'visible',
    'dependency' => '',
    'isMultiSelect' => true,
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
VardefManager::createVardef('ee_Profesores','ee_Profesores', array('basic','team_security','assignable','person'));