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

$dictionary['ee_EvaluacionSCI'] = array(
	'table'=>'ee_evaluacionsci',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'idparticipante' => 
  array (
    'required' => false,
    'name' => 'idparticipante',
    'vname' => 'LBL_IDPARTICIPANTE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'idparticipante',
    'help' => 'idparticipante',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => '36',
    'size' => '20',
  ),
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
  'description' => 
  array (
    'name' => 'description',
    'vname' => 'LBL_DESCRIPTION',
    'type' => 'text',
    'comment' => 'Full text of the note',
    'rows' => '6',
    'cols' => '80',
    'required' => false,
    'massupdate' => 0,
    'comments' => 'Observación',
    'help' => 'Observaci&Atilde;&sup3;n',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'size' => '20',
    'studio' => 'visible',
  ),
  'calique' => 
  array (
    'required' => true,
    'name' => 'calique',
    'vname' => 'LBL_CALIQUE',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'calique_dom',
    'studio' => 'visible',
    'dependency' => false,
    'default' => '5',
  ),
  'nuevocampo' => 
  array (
    'required' => true,
    'name' => 'nuevocampo',
    'vname' => 'LBL_NUEVOCAMPO',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'nuevocampo_dom',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'recomendaria' => 
  array (
    'required' => false,
    'name' => 'recomendaria',
    'vname' => 'LBL_RECOMENDARIA',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'recomendaria_dom',
    'studio' => 'visible',
    'dependency' => false,
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
VardefManager::createVardef('ee_EvaluacionSCI','ee_EvaluacionSCI', array('basic','team_security','assignable'));