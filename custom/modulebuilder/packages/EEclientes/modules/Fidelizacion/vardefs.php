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

$vardefs = array (
  'fields' => 
  array (
    'fechaocurrencia' => 
    array (
      'required' => false,
      'name' => 'fechaocurrencia',
      'vname' => 'LBL_FECHAOCURRENCIA',
      'type' => 'date',
      'massupdate' => 0,
      'comments' => 'Fecha ocurrencia',
      'help' => 'Fecha ocurrencia',
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
    'motivo' => 
    array (
      'required' => false,
      'name' => 'motivo',
      'vname' => 'LBL_MOTIVO',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Aniversario',
      'comments' => 'Motivo',
      'help' => 'Motivo',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'motivo_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'aquien' => 
    array (
      'required' => false,
      'name' => 'aquien',
      'vname' => 'LBL_AQUIEN',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => 'A Quien',
      'help' => 'A Quien',
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
    'que' => 
    array (
      'required' => false,
      'name' => 'que',
      'vname' => 'LBL_QUE',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => 'Que',
      'help' => 'Que',
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
    'comentarios' => 
    array (
      'required' => false,
      'name' => 'comentarios',
      'vname' => 'LBL_COMENTARIOS',
      'type' => 'text',
      'massupdate' => 0,
      'comments' => 'Comentarios',
      'help' => 'Comentarios',
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
    'descuento' => 
    array (
      'required' => false,
      'name' => 'descuento',
      'vname' => 'LBL_DESCUENTO',
      'type' => 'decimal',
      'massupdate' => 0,
      'default' => '0.00',
      'comments' => 'Descuento',
      'help' => 'Descuento',
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
    'motivodescuento' => 
    array (
      'required' => false,
      'name' => 'motivodescuento',
      'vname' => 'LBL_MOTIVODESCUENTO',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Alumni',
      'comments' => 'Motivo descuento',
      'help' => 'Motivo descuento',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'motivodescuento_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
  ),
  'relationships' => 
  array (
  ),
);