<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

$dictionary['Task'] = array('table' => 'tasks',
	'unified_search' => true,
                               'fields' => array (
  'name' =>
  array (
    'name' => 'name',
    'vname' => 'LBL_SUBJECT',
    'dbType' => 'varchar',
    'type' => 'name',
    'len' => '50',
	'unified_search' => true,
    'importable' => 'required',
    'required' => 'true',
  ),
  'status' =>
  array (
    'name' => 'status',
    'vname' => 'LBL_STATUS',
    'type' => 'enum',
    'options' => 'task_status_dom',
    'len' => 100,
    'required' => 'true',
    'default' => 'Not Started',
  ),
  'date_due_flag' =>
  array (
    'name' => 'date_due_flag',
    'vname' => 'LBL_DATE_DUE_FLAG',
    'type' =>'bool',
    'default'=>0,
    'group'=>'date_due',
  	'studio' => false,
  ),
  'date_due' =>
  array (
    'name' => 'date_due',
    'vname' => 'LBL_DUE_DATE',
    'type' => 'datetimecombo',
    'dbType' => 'datetime',
    'group'=>'date_due',
    'studio' => array('required' => true, 'no_duplicate' => true),
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    ),
  'time_due' =>
  array (
    'name' => 'time_due',
    'vname' => 'LBL_DUE_TIME',
    'type' => 'datetime',
    //'db_concat_fields'=> array(0=>'date_due'),
    'source' => 'non-db',
    'importable' => 'false',
    'massupdate' => false,
    ),
  'date_start_flag' =>
  array (
    'name' => 'date_start_flag',
    'vname' => 'LBL_DATE_START_FLAG',
    'type' =>'bool',
    'group'=>'date_start',
    'default'=>0,
  	'studio' => false,
  ),
  'date_start' =>
  array (
    'name' => 'date_start',
    'vname' => 'LBL_START_DATE',
    'type' => 'datetimecombo',
    'dbType' => 'datetime',
    'group'=>'date_start',
    'validation' => array('type' => 'isbefore', 'compareto' => 'date_due', 'blank' => false),
    'studio' => array('required' => true, 'no_duplicate' => true),
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    ),
 'parent_type'=>
  array(
  	'name'=>'parent_type',
  	'vname'=>'LBL_PARENT_NAME',
    'type' => 'parent_type',
    'dbType'=>'varchar',
  	 'group'=>'parent_name',
  	'required'=>false,
	'len'=>'255',
    'comment' => 'The Sugar object to which the call is related',
    'options' => 'parent_type_display',
),

  'parent_name'=>
  array(
	'name'=> 'parent_name',
	'parent_type'=>'record_type_display' ,
	'type_name'=>'parent_type',
	'id_name'=>'parent_id',
    'vname'=>'LBL_LIST_RELATED_TO',
	'type'=>'parent',
	'group'=>'parent_name',
	'source'=>'non-db',
	'options'=> 'parent_type_display',
  ),

  'parent_id' =>
  array (
    'name' => 'parent_id',
    'type' => 'id',
    'group'=>'parent_name',
    'reportable'=>false,
    'vname'=>'LBL_PARENT_ID',
  ),
  'contact_id' =>
  array (
    'name' => 'contact_id',
    'type' => 'id',
    'group'=>'contact_name',
    'reportable'=>false,
    'vname'=>'LBL_CONTACT_ID',
  ),

  'contact_name' =>
  array (
    'name' => 'contact_name',
    'rname'=>'last_name',
    'db_concat_fields'=> array(0=>'first_name', 1=>'last_name'),
    'source' => 'non-db',
    'len' => '510',
    'group'=>'contact_name',
    'vname' => 'LBL_CONTACT_NAME',
    'reportable'=>false,
    'id_name' => 'contact_id',
    'join_name' => 'contacts',
    'type' => 'relate',
    'module' => 'Contacts',
    'link'=>'contacts',
    'table'=>'contacts',
  ),

  'contact_phone'=>
    array(
        'name'=>'contact_phone',
        'type'=>'phone',
        'source'=>'non-db',
        'vname'=>'LBL_CONTACT_PHONE',
        'studio'=>array('listview' => true)
    ),

 'contact_email'=>
    array(
        'name'=>'contact_email',
        'type'=>'varchar',
		'vname' => 'LBL_EMAIL_ADDRESS',
		'source' => 'non-db',
        'studio' => 'hidden'
    ),

  'priority' =>
  array (
    'name' => 'priority',
    'vname' => 'LBL_PRIORITY',
    'type' => 'enum',
    'options' => 'task_priority_dom',
    'len' => 100,
    'required' => 'true',
  ),
	'contacts'=>	array(
		'name' => 'contacts',
		'type' => 'link',
		'relationship' => 'contact_tasks',
		'source'=>'non-db',
		'side'=>'right',
		'vname'=>'LBL_CONTACT',
	),
  'accounts' =>
  array (
  	'name' => 'accounts',
    'type' => 'link',
    'relationship' => 'account_tasks',
    'source'=>'non-db',
		'vname'=>'LBL_ACCOUNT',
  ),
  'opportunities' =>
  array (
    'name' => 'opportunities',
    'type' => 'link',
    'relationship' => 'opportunity_tasks',
    'source'=>'non-db',
    'vname'=>'LBL_OPPORTUNITY',
  ),
  'cases' =>
  array (
    'name' => 'cases',
    'type' => 'link',
    'relationship' => 'case_tasks',
    'source'=>'non-db',
    'vname'=>'LBL_CASE',
  ),
  'bugs' =>
  array (
    'name' => 'bugs',
    'type' => 'link',
    'relationship' => 'bug_tasks',
    'source'=>'non-db',
    'vname'=>'LBL_BUGS',
  ),
  'leads' =>
  array (
    'name' => 'leads',
    'type' => 'link',
    'relationship' => 'lead_tasks',
    'source'=>'non-db',
    'vname'=>'LBL_LEADS',
  ),
  'projects' =>
    array (
    'name' => 'projects',
    'type' => 'link',
    'relationship' => 'projects_tasks',
    'source'=>'non-db',
    'vname'=>'LBL_PROJECTS',
  ),
  'project_tasks' =>
    array (
    'name' => 'project_tasks',
    'type' => 'link',
    'relationship' => 'project_tasks_tasks',
    'source'=>'non-db',
    'vname'=>'LBL_PROJECT_TASKS',
  ),
    'notes' =>
  array (
  	'name' => 'notes',
    'type' => 'link',
    'relationship' => 'tasks_notes',
    'module'=>'Notes',
    'bean_name'=>'Note',
    'source'=>'non-db',
		'vname'=>'LBL_NOTES',
  ),
  
  'quotes' =>
  array (
    'name' => 'quotes',
    'type' => 'link',
    'relationship' => 'quote_tasks',
    'vname' => 'LBL_QUOTES',
    'source'=>'non-db',
  ),
	'contact_parent'=>
		array (
			'name' => 'contact_parent',
			'type' => 'link',
			'relationship' => 'contact_tasks_parent',
			'source' => 'non-db',
            'reportable' => false
	),
)
,
 'relationships' => array (
		'tasks_notes' => array(
			'lhs_module'		=> 'Tasks',
			'lhs_table'			=> 'tasks',
			'lhs_key'			=> 'id',
			'rhs_module'		=> 'Notes',
			'rhs_table'			=> 'notes',
			'rhs_key'			=> 'parent_id',
			'relationship_type'	=> 'one-to-many',
		),

  'tasks_assigned_user' =>
   array('lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
   'rhs_module'=> 'Tasks', 'rhs_table'=> 'tasks', 'rhs_key' => 'assigned_user_id',
   'relationship_type'=>'one-to-many')

   ,'tasks_modified_user' =>
   array('lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
   'rhs_module'=> 'Tasks', 'rhs_table'=> 'tasks', 'rhs_key' => 'modified_user_id',
   'relationship_type'=>'one-to-many')

   ,'tasks_created_by' =>
   array('lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
   'rhs_module'=> 'Tasks', 'rhs_table'=> 'tasks', 'rhs_key' => 'created_by',
   'relationship_type'=>'one-to-many')
)
                                                      , 'indices' => array (
       array('name' =>'idx_tsk_name', 'type'=>'index', 'fields'=>array('name')),
       array('name' =>'idx_task_con_del', 'type'=>'index', 'fields'=>array('contact_id','deleted')),
       array('name' =>'idx_task_par_del', 'type'=>'index', 'fields'=>array('parent_id','parent_type','deleted')),
       array('name' =>'idx_task_assigned', 'type'=>'index', 'fields'=>array('assigned_user_id')),
        array('name' =>'idx_task_status', 'type'=>'index', 'fields'=>array('status')),
             )

        //This enables optimistic locking for Saves From EditView
	,'optimistic_locking'=>true,
                            );
VardefManager::createVardef('Tasks','Task', array('default', 'assignable',
'team_security',
));
?>
