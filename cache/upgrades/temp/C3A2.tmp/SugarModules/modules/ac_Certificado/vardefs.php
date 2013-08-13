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

$dictionary['ac_Certificado'] = array(
	'table'=>'ac_certificado',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'rindio_examen' => 
  array (
    'required' => false,
    'name' => 'rindio_examen',
    'vname' => 'LBL_RINDIO_EXAMEN',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'No',
    'comments' => 'Rindió Examen',
    'help' => 'Rindi&amp;Atilde;&amp;sup3; Examen',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'sino_dom',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'aprobo_examen' => 
  array (
    'required' => false,
    'name' => 'aprobo_examen',
    'vname' => 'LBL_APROBO_EXAMEN',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'No',
    'comments' => 'Aprobó Examen',
    'help' => 'Aprob&Atilde;&sup3; Examen',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'sino_dom',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'ubicacion_certificado' => 
  array (
    'required' => false,
    'name' => 'ubicacion_certificado',
    'vname' => 'LBL_UBICACION_CERTIFICADO',
    'type' => 'text',
    'massupdate' => 0,
    'comments' => 'Ubicación Certificado',
    'help' => 'Ubicaci&Atilde;&sup3;n Certificado',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'fecha_examen' => 
  array (
    'required' => false,
    'name' => 'fecha_examen',
    'vname' => 'LBL_FECHA_EXAMEN',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => 'Fecha Examen',
    'help' => 'Fecha Examen',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'size' => '20',
    'enable_range_search' => false,
  ),
  'fecha_retiro' => 
  array (
    'required' => false,
    'name' => 'fecha_retiro',
    'vname' => 'LBL_FECHA_RETIRO',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => 'Fecha Retiro',
    'help' => 'Fecha Retiro',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'size' => '20',
    'enable_range_search' => false,
  ),
  'fecha_llegada' => 
  array (
    'required' => false,
    'name' => 'fecha_llegada',
    'vname' => 'LBL_FECHA_LLEGADA',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => 'Fecha Llegada',
    'help' => 'Fecha Llegada',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
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
VardefManager::createVardef('ac_Certificado','ac_Certificado', array('basic','team_security','assignable'));