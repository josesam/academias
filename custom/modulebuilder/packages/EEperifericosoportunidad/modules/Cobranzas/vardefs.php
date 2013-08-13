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
    'fechaprevistapago' => 
    array (
      'required' => false,
      'name' => 'fechaprevistapago',
      'vname' => 'LBL_FECHAPREVISTAPAGO',
      'type' => 'date',
      'massupdate' => 0,
      'comments' => 'Fecha prevista pago',
      'help' => 'Fecha prevista pago',
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
    'fecharealpago' => 
    array (
      'required' => false,
      'name' => 'fecharealpago',
      'vname' => 'LBL_FECHAREALPAGO',
      'type' => 'date',
      'massupdate' => 0,
      'comments' => 'Fecha real de pago',
      'help' => 'Fecha real de pago',
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
    'formapago' => 
    array (
      'required' => false,
      'name' => 'formapago',
      'vname' => 'LBL_FORMAPAGO',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Cheque',
      'comments' => 'Forma Pago',
      'help' => 'Forma Pago',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'formapago_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'personapago' => 
    array (
      'required' => false,
      'name' => 'personapago',
      'vname' => 'LBL_PERSONAPAGO',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => 'Persona Pago',
      'help' => 'Persona Pago',
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
    'montopago' => 
    array (
      'required' => false,
      'name' => 'montopago',
      'vname' => 'LBL_MONTOPAGO',
      'type' => 'decimal',
      'massupdate' => 0,
      'default' => '0.00',
      'comments' => 'Monto pago',
      'help' => 'Monto pago',
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
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => '255',
      'unified_search' => false,
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'duplicate_merge_dom_value' => '1',
      'audited' => false,
      'reportable' => true,
      'calculated' => false,
      'size' => '20',
    ),
  ),
  'relationships' => 
  array (
  ),
);