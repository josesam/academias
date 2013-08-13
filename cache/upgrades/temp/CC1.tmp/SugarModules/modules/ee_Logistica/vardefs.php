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

$dictionary['ee_Logistica'] = array(
	'table'=>'ee_logistica',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'proveedor' => 
  array (
    'required' => false,
    'name' => 'proveedor',
    'vname' => 'LBL_PROVEEDOR',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Proveedor',
    'help' => 'Proveedor',
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
  'ee_items_id_c' => 
  array (
    'required' => false,
    'name' => 'ee_items_id_c',
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
  'items' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'items',
    'vname' => 'LBL_ITEMS',
    'type' => 'relate',
    'massupdate' => 0,
    'comments' => 'Items',
    'help' => 'Items',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'ee_items_id_c',
    'ext2' => 'ee_Items',
    'module' => 'ee_Items',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'precio' => 
  array (
    'required' => false,
    'name' => 'precio',
    'vname' => 'LBL_PRECIO',
    'type' => 'decimal',
    'massupdate' => 0,
    'default' => '0.00',
    'comments' => 'Precio',
    'help' => 'Precio',
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
	'relationships'=>array (
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('ee_Logistica','ee_Logistica', array('basic','team_security','assignable'));