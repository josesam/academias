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
 * by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

$vardefs = array (
  'fields' => 
  array (
    'estado' => 
    array (
      'required' => false,
      'name' => 'estado',
      'vname' => 'LBL_ESTADO',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Planificado',
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
      'options' => 'estado_0',
      'studio' => 'visible',
      'dependency' => false,
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
    'ee_pmp_id_c' => 
    array (
      'required' => false,
      'name' => 'ee_pmp_id_c',
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
    'detalleprograma' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'detalleprograma',
      'vname' => 'LBL_DETALLEPROGRAMA',
      'type' => 'relate',
      'massupdate' => 0,
      'comments' => 'Detalle Programa',
      'help' => 'Detalle Programa',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'calculated' => false,
      'len' => '255',
      'size' => '20',
      'id_name' => 'ee_pmp_id_c',
      'ext2' => 'ee_PMP',
      'module' => 'ee_PMP',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'piloto' => 
    array (
      'required' => false,
      'name' => 'piloto',
      'vname' => 'LBL_PILOTO',
      'type' => 'bool',
      'massupdate' => 0,
      'default' => '0',
      'comments' => 'Piloto',
      'help' => 'Piloto',
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
  'relationships' => 
  array (
  ),
);