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
    'fechaevaluacion' => 
    array (
      'required' => false,
      'name' => 'fechaevaluacion',
      'vname' => 'LBL_FECHAEVALUACION',
      'type' => 'date',
      'massupdate' => 0,
      'comments' => 'Fecha Evaluacion',
      'help' => 'Fecha Evaluacion',
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
    'conocimientos' => 
    array (
      'required' => false,
      'name' => 'conocimientos',
      'vname' => 'LBL_CONOCIMIENTOS',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Satisfactorio',
      'comments' => 'Conocimientos',
      'help' => 'Conocimientos',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'niveles_calif_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'destrezas' => 
    array (
      'required' => false,
      'name' => 'destrezas',
      'vname' => 'LBL_DESTREZAS',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Satisfactorio',
      'comments' => 'Destrezas',
      'help' => 'Destrezas',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'niveles_calif_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'actitudes' => 
    array (
      'required' => false,
      'name' => 'actitudes',
      'vname' => 'LBL_ACTITUDES',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Satisfactorio',
      'comments' => 'Actitudes',
      'help' => 'Actitudes',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'niveles_calif_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
  ),
  'relationships' => 
  array (
  ),
);